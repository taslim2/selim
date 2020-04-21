<?php

namespace App\Http\Controllers\Client\Logged;

use App\Http\Controllers\Controller;
use App\Requested;
use Illuminate\Http\Request;

class RequestedController extends Controller
{
    public function index()
    {
        return view('user/logged/requested/requested');
    }

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
     * @param  \App\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function show(Requested $requested)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function edit(Requested $requested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requested $requested)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requested $requested)
    {
        //
    }
}
