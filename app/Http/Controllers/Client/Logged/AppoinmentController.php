<?php

namespace App\Http\Controllers\Client\Logged;

use App\Appoinment;
use App\Hospital;
use App\Http\Controllers\Controller;
use App\Requested;
use App\Test;
use App\User;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //$data['user'] = auth()->user();
        //$data['hospitals'] = Hospital::all();
        $data['tests'] = Test::all();
        dd($data);

        return view('user/logged/appoinmnet/create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoinment $appoinment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoinment $appoinment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoinment $appoinment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appoinment  $appoinment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoinment $appoinment)
    {
        //
    }
}
