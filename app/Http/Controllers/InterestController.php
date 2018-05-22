<?php

namespace App\Http\Controllers;

use App\interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intrests=Interest::orderBy('created_at','desc')->paginate(5);
      //  dd($intrests);
        return view('interest.index',array("intr"=>$intrests));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('interest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
          'name'  =>'required|max:255',
        ]);
        $data=$request->all();
        $interest= Interest::create($data);

        return redirect()->route('interests.index')->with('message', 'Interest created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function show(interest $interest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function edit(interest $interest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, interest $interest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\interest  $interest
     * @return \Illuminate\Http\Response
     */
    public function destroy(interest $interest)
    {
        //
    }
}
