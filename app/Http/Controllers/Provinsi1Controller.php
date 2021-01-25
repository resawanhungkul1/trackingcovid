<?php

namespace App\Http\Controllers;

use App\Models\Provinsi1;
use Illuminate\Http\Request;

class Provinsi1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi= Provinsi::all();
        return view('admin.provinsi.index',compact('provinsi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi1  $provinsi1
     * @return \Illuminate\Http\Response
     */
    public function show(Provinsi1 $provinsi1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi1  $provinsi1
     * @return \Illuminate\Http\Response
     */
    public function edit(Provinsi1 $provinsi1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi1  $provinsi1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provinsi1 $provinsi1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi1  $provinsi1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provinsi1 $provinsi1)
    {
        //
    }
}
