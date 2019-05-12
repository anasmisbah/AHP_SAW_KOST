<?php

namespace App\Http\Controllers;

use App\Criteria;
use Illuminate\Http\Request;

class CriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criterias =  Criteria::all();
        return view('criterias.index', compact('criterias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criterias.create');
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
            'name'=> 'required|min:3|max:50'
        ]);
        Criteria::create($request->all());
        return redirect()->route('criteria.create')->with('status','Criteria Succesfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function show(Criteria $criteria)
    {

        return view('criterias.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Criteria $criteria)
    {   
        return view('criterias.edit',compact('criteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Criteria $criteria)
    {
        $request->validate([
            'name'=> 'required|min:3|max:50',
            'category'=>'required'
        ]);
        $criteria->update([
            'name'=>$request->name,
            'category'=>$request->category
        ]);
        return redirect()->route('criteria.edit',['criterion'=>$criteria])->with('status','Criteria Succesfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criteria $criteria)
    {
        $criteria->delete();
        return redirect()->route('criteria.index')->with('status','Criteria Succesfully Deleted');
    }
}
