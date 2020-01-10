<?php

namespace App\Http\Controllers;

use App\Renthouse;
use Illuminate\Http\Request;

class RenthouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.renthouse.index');
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
     * @param  \App\Renthouse  $renthouse
     * @return \Illuminate\Http\Response
     */
    public function show(Renthouse $renthouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Renthouse  $renthouse
     * @return \Illuminate\Http\Response
     */
    public function edit(Renthouse $renthouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Renthouse  $renthouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renthouse $renthouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Renthouse  $renthouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Renthouse $renthouse)
    {
        //
    }
}
