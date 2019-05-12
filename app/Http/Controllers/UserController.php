<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        if ($request->file('avatar')) {
            $file = $request->file('avatar')->store('avatars','public');
            $user->avatar = $file;
        }
        $user->save();
        return redirect()->route('user.index')->with('status','Pengguna baru berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);    
        }
        
        $user->role = $request->role;
        if ($request->file('avatar')) {
            if ($user->avatar && file_exists(storage_path('app/public/'.$user->avatar))) {
                Storage::delete('public/'.$user->avatar);
            }
            $file = $request->file('avatar')->store('avatars','public');
            $user->avatar = $file;
        }
        $user->save();
        return redirect()->route('user.index')->with('status','Pengguna berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->avatar && file_exists(storage_path('app/public/'.$user->avatar))) {
            Storage::delete('public/'.$user->avatar);
        }
        $user->delete();
       return redirect()->route('users.index')->with('status', 'pengguna berhasil dihapus');
    }
}
