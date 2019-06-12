<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criteria;
use App\Kost;
use Illuminate\Support\Facades\DB;
use App\PreferensiAlternatif;
use Illuminate\Support\Facades\Auth;

class AnalisaAlternatifController extends Controller
{
    public function tampilAlternatif()
    {
        $criterias = Criteria::all();
        $kosts = Kost::all();
        
        return view('analisa.alternatif',[
            'criterias'=>$criterias,
            'kosts'=>$kosts
        ]);
    }

    public function prosesAlternatif()
    {
        $criterias = Criteria::all();
        $kosts = Kost::all();

        //membuat matriks alternatif
        for ($i=0; $i < $kosts->count() ; $i++) { 
            for ($j=0; $j < $criterias->count() ; $j++) { 
                 $matriks[$i][$j] = $kosts[$i]->criterias[$j]->pivot->value;
            }
        }
        $minmaks_kriteria = [];
        
        //mencari nilai terkecil untuk category bertipe cost dan nilai terbesar untuk 
        for ($i=0; $i < $criterias->count() ; $i++) { 
            if ($criterias[$i]->category == "benefit") {
                $minmaks_kriteria[$i]=DB::select('select max(value) AS value from criteria_kost where criteria_id = ?', [$criterias[$i]->id])[0];
            } else {
                $minmaks_kriteria[$i]=DB::select('select min(value) AS value from criteria_kost where criteria_id = ?', [$criterias[$i]->id])[0];
            }
        }

        $matriksnormalisasi =[];
        $matriksterbobot =[];
        
        //membuat matriks ternormalisasi dan matriks terbobot
        for ($i=0; $i < $criterias->count() ; $i++) { 
            for ($j=0; $j < $kosts->count() ; $j++) { 
                if ($criterias[$i]->category == "benefit") {
                    $matriksnormalisasi[$j][$i] = $matriks[$j][$i]/$minmaks_kriteria[$i]->value;
                } else {
                    $matriksnormalisasi[$j][$i] = $minmaks_kriteria[$i]->value/$matriks[$j][$i];
                }
                $bobot = $criterias[$i]->priorityvectors->where('user_id',1)->first()->nilai;
                 $matriksterbobot[$j][$i] = $matriksnormalisasi[$j][$i]*$bobot;
            }
        }


        $preferensi =[];
        $jml =0;
        //menghitung nilai preferensi dengan menjumlahkan semua kriteria pada suatu baris pada matriks terbobot
        for ($i=0; $i < $kosts->count() ; $i++) { 
            $jml =0;
            for ($j=0; $j < $criterias->count() ; $j++) { 
                 $jml += $matriksterbobot[$i][$j];
            }
            $preferensi[$i] = $jml; 
            //memasukkan data ke database
            PreferensiAlternatif::updateOrCreate(
                [
                    'user_id'=>1,'kost_id'=>$kosts[$i]->id
                ],
                [
                    'preferensi'=>$preferensi[$i]
                ]
            );
        }

        $preferensiFromDB = PreferensiAlternatif::where('user_id',1)->orderBy('preferensi','desc')->first();

        return view('analisa.hasilalternatif',[
            'matriksnormalisasi'=>$matriksnormalisasi,
            'preferensi'=>$preferensi,
            'preferensiFromDB'=>$preferensiFromDB,
            'kosts'=>$kosts,
            'criterias'=>$criterias
        ]);
        
    }

    public function userAlternatif()
    {
        $criterias = Criteria::all();
        $kosts = Kost::all();
        
        return view('utama.alternatif',[
            'criterias'=>$criterias,
            'kosts'=>$kosts
        ]);
    }

    public function userProsesAlternatif()
    {
        $criterias = Criteria::all();
        $kosts = Kost::all();

        //membuat matriks alternatif
        for ($i=0; $i < $kosts->count() ; $i++) { 
            for ($j=0; $j < $criterias->count() ; $j++) { 
                 $matriks[$i][$j] = $kosts[$i]->criterias[$j]->pivot->value;
            }
        }
        $minmaks_kriteria = [];
        
        //mencari nilai terkecil untuk category bertipe cost dan nilai terbesar untuk 
        for ($i=0; $i < $criterias->count() ; $i++) { 
            if ($criterias[$i]->category == "benefit") {
                $minmaks_kriteria[$i]=DB::select('select max(value) AS value from criteria_kost where criteria_id = ?', [$criterias[$i]->id])[0];
            } else {
                $minmaks_kriteria[$i]=DB::select('select min(value) AS value from criteria_kost where criteria_id = ?', [$criterias[$i]->id])[0];
            }
        }

        $matriksnormalisasi =[];
        $matriksterbobot =[];
        
        //membuat matriks ternormalisasi dan matriks terbobot
        for ($i=0; $i < $criterias->count() ; $i++) { 
            for ($j=0; $j < $kosts->count() ; $j++) { 
                if ($criterias[$i]->category == "benefit") {
                    $matriksnormalisasi[$j][$i] = $matriks[$j][$i]/$minmaks_kriteria[$i]->value;
                } else {
                    $matriksnormalisasi[$j][$i] = $minmaks_kriteria[$i]->value/$matriks[$j][$i];
                }
                $bobot = $criterias[$i]->priorityvectors->where('user_id',1)->first()->nilai;
                 $matriksterbobot[$j][$i] = $matriksnormalisasi[$j][$i]*$bobot;
            }
        }


        $preferensi =[];
        $jml =0;
        //menghitung nilai preferensi dengan menjumlahkan semua kriteria pada suatu baris pada matriks terbobot
        for ($i=0; $i < $kosts->count() ; $i++) { 
            $jml =0;
            for ($j=0; $j < $criterias->count() ; $j++) { 
                 $jml += $matriksterbobot[$i][$j];
            }
            $preferensi[$i] = $jml; 
            //memasukkan data ke database
            PreferensiAlternatif::updateOrCreate(
                [
                    'user_id'=>Auth::user()->id,'kost_id'=>$kosts[$i]->id
                ],
                [
                    'preferensi'=>$preferensi[$i]
                ]
            );
        }

        $preferensiFromDB = PreferensiAlternatif::where('user_id',Auth::user()->id)->orderBy('preferensi','desc')->first();
        
        return view('utama.hasilalternatif',[
            'matriksnormalisasi'=>$matriksnormalisasi,
            'preferensi'=>$preferensi,
            'preferensiFromDB'=>$preferensiFromDB,
            'kosts'=>$kosts,
            'criterias'=>$criterias
        ]);
    }
    
}
