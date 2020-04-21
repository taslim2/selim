<?php

namespace App\Http\Controllers\Mtp;

use App\Hospital;
use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        $data['hospitals'] = Hospital::all();
        return view('mtp/hospital/hospuitals',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mtp/hospital/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['phoneno'] = $request->phone;

        Hospital::create($data);
        return redirect('hospitals');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital,$id)
    {
        $data['hospital'] = Hospital::findOrfail($id);
        return view('mtp/hospital/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital,$id)
    {
        $data['name'] = $request->name;
        $data['address'] = $request->address;
        $data['phoneno'] = $request->phone;

        Hospital::FindOrFail($id)->update($data);
        return redirect('hospitals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital,$id)
    {
        Hospital::FindorFail($id)->delete();
        return redirect('hospitals');
    }
}
