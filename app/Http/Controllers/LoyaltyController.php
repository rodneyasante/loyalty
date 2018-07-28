<?php

namespace App\Http\Controllers;

use App\loyalty;
use Illuminate\Http\Request;

class LoyaltyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index")->withloyalties((loyalty::all());
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
     * @param  \App\loyalty  $loyalty
     * @return \Illuminate\Http\Response
     */
    public function show(loyalty $loyalty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loyalty  $loyalty
     * @return \Illuminate\Http\Response
     */
    public function edit(loyalty $loyalty)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loyalty  $loyalty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loyalty $loyalty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loyalty  $loyalty
     * @return \Illuminate\Http\Response
     */
    public function destroy(loyalty $loyalty)
    {
        //
    }
}
