<?php

namespace App\Http\Controllers;

use App\Kost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kosts = Kost::all();
        return view('kost.index',compact('kosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kost.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'type'=>'required',
            'harga'=>'required',
            'fasilitas'=>'required',
            'ukuran'=>'required',
            'jarak'=>'required',
        ]);

        $foto='';
        if ($request->file('foto')) {
            $foto = $request->file('foto')->store('fotos','public');
        }
        $kost = Kost::create([
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            'type'=>$request->type,
            'foto' =>$foto
        ]);
        
        $value =[
            1=>['value'=>$request->harga],
            2=>['value'=>$request->fasilitas],
            3=>['value'=>$request->ukuran],
            4=>['value'=>$request->jarak],  
        ];

        $kost->criterias()->attach($value);
        return redirect()->route('kost.index')->with('status','Kost Baru Berhasil ditambahkan');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function show(Kost $kost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function edit(Kost $kost)
    {
        return view('kost.edit',compact('kost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kost $kost)
    {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'type'=>'required',
            'harga'=>'required',
            'fasilitas'=>'required',
            'ukuran'=>'required',
            'jarak'=>'required',
        ]);
        $kost->name = $request->name;
        $kost->phone_number = $request->phone_number;
        $kost->address = $request->address;
        $kost->type = $request->type;
        if ($request->file('foto')) {
            if ($kost->foto && file_exists(storage_path('app/public/'.$kost->foto))) {
                Storage::delete('public/'.$kost->foto);
            }
            $file = $request->file('foto')->store('fotos','public');
            $kost->foto = $file;
        }
        $kost->save();
        $value =[
            1=>['value'=>$request->harga],
            2=>['value'=>$request->fasilitas],
            3=>['value'=>$request->ukuran],
            4=>['value'=>$request->jarak],  
        ];
        $kost->criterias()->sync($value);
        return redirect()->route('kost.index')->with('status','Kost Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kost  $kost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kost $kost)
    {
        if ($kost->foto && file_exists(storage_path('app/public/'.$kost->foto))) {
            Storage::delete('public/'.$kost->foto);
        }
        $kost->delete();
    }

    public function userIndex()
    {
        $kosts= Kost::paginate(6);
        return view('utama.kostindex',compact('kosts'));
    }
}
