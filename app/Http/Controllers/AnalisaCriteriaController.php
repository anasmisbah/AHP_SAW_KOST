<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Perbandingankriteria;
use App\PvectorCtriteria;
use App\Randomindex;

class AnalisaCriteriaController extends Controller
{
    public function index()
    {
        $jumlahkriteria = Criteria::count();
        
        
        $kriteria = Criteria::all();
        $urut = 0;
        $oldPerbandingan = Perbandingankriteria::where('user_id','1')->get();
        // dd($oldPerbandingan->count());
        // dd($oldPerbandingan->where('criteria1_id',1+1)->where('criteria2_id',2+1)->first()->nilai);
        return view('analisa.criteria',['jumlahkriteria'=>$jumlahkriteria,'kriteria'=>$kriteria,'urut'=>$urut,'oldPerbandingan'=>$oldPerbandingan]);
    }

    public function proses(Request $request)
    {
        
        $jumlahkriteria = Criteria::count();
        $kriteria = Criteria::all();
        $matrikskriteria = [];
        $urut = 0;
        for ($x=0; $x <= ($jumlahkriteria - 2); $x++) { 
            for ($y=$x+1; $y <= ($jumlahkriteria - 1) ; $y++) { 
                $urut++;
                $pilihan = $request->pilihan[$urut];
                $bobot = $request->bobot[$urut];
                if ($pilihan == 1) {
                    $matrikskriteria[$x][$y] = $bobot;
                    $matrikskriteria[$y][$x] = 1/$bobot;
                } else {
                    $matrikskriteria[$x][$y] = 1/$bobot;
                    $matrikskriteria[$y][$x] = $bobot;
                }

                Perbandingankriteria::updateOrCreate(
                    [
                        'user_id' =>1
                    ],
                    [
                        'criteria1_id' => $kriteria[$x]->id,
                        'criteria2_id' => $kriteria[$y]->id,
                        'nilai'=> $matrikskriteria[$x][$y],
                    ]
                );
            }
        }

        for ($i=0; $i <= ($jumlahkriteria - 1) ; $i++) { 
                $matrikskriteria[$i][$i] = 1;
        }

        //inisialisasi jumlah tiap kolom dan baris kriteria
        $jmlpb = [];
        $jmlpk = [];

        for ($i=0; $i <= ($jumlahkriteria - 1) ; $i++) { 
                $jmlpb[$i] = 0;
                $jmlpk[$i] = 0;
        }

        for ($x=0; $x <= ($jumlahkriteria - 1) ; $x++) { 
                for ($y=0; $y <= ($jumlahkriteria - 1) ; $y++) { 

                    $nilai = $matrikskriteria[$x][$y];
                    $jmlpb[$y] += $nilai;

                }
        }

        //menghitung jumlah pada baris matrik yang telah dinormalisasi
        for ($x=0; $x <= ($jumlahkriteria - 1); $x++) { 
                for ($y=0; $y <= ($jumlahkriteria - 1); $y++) { 
                        $matrikskriterianormal[$x][$y] = $matrikskriteria[$x][$y]/$jmlpb[$y];
                        $nilai = $matrikskriterianormal[$x][$y];
                        $jmlpk[$x] += $nilai;
                }

                $priorityVector[$x] = $jmlpk[$x]/$jumlahkriteria;
                PvectorCtriteria::updateOrCreate(
                    ['user_id'=> 1 ,'criteria_id' => $kriteria[$x]->id],
                    ['nilai'=>$priorityVector[$x]]
                );
        }


        $eigenvalue = $this->getEigenValue($jmlpb,$jmlpk,$jumlahkriteria);
        $consistencyIndex = ($eigenvalue - $jumlahkriteria)/($jumlahkriteria - 1);
        $RiValue = Randomindex::where('amount',$jumlahkriteria)->get();

        $consistencyRatio = $consistencyIndex/ $RiValue[0]->value;
        
        return view('analisa.hasilkriteria',
            [
                'kriterias'=>$kriteria,
                'jumlahkriteria'=>$jumlahkriteria,
                'matrikskriteria'=>$matrikskriteria,
                'jmlpb'=>$jmlpb,
                'matrikskriterianormal'=>$matrikskriterianormal,
                'jmlpk'=>$jmlpk,
                'priorityvector'=>$priorityVector,
                'eigenvalue'=>$eigenvalue,
                'consistencyIndex'=>$consistencyIndex,
                'consistencyRatio'=>$consistencyRatio

            ]
        );

        
    }

    private function getEigenValue($jmlpb,$jmlpk,$jumlahkriteria)
    {
        $eigenvalue = 0;
        for ($i=0; $i <= ($jumlahkriteria - 1); $i++) { 
            $eigenvalue += ($jmlpb[$i]*(($jmlpk[$i])/$jumlahkriteria));

        }
        return $eigenvalue;
    }
}
