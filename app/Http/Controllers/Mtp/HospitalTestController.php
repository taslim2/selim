<?php

namespace App\Http\Controllers\Mtp;

use App\Hospital;
use App\HospitalTest;
use App\Http\Controllers\Controller;
use App\Test;
use Illuminate\Http\Request;


class HospitalTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data['tests'] = Test::all();
        $data['hospitals'] = Hospital::FindOrFail($id);
        $data['hospitaltests'] = HospitalTest::all()->where('hospital_id',$id);
        //dd($data);
        return view('mtp/hospitaltest/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['tests'] = Test::all();
        $data['hospitals'] = Hospital::all();
        return view('mtp/hospitaltest/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['hospital_id'] = $request->hospital_id;
        $data['test_id'] = $request->test_id;
        $data['cost'] = $request->cost;
        // $id = $request->hospital_id;
        HospitalTest::create($data);
        return redirect('hospitals');//to make it work i need to use route!
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HospitalTest  $hospitalTest
     * @return \Illuminate\Http\Response
     */
    public function show(HospitalTest $hospitalTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HospitalTest  $hospitalTest
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalTest $hospitalTest,$id)
    {
        $data['hospitals'] = Hospital::all();
        $data['tests'] = Test::all();
        $data['hospitaltest'] = HospitalTest::findorfail($id);
        return view('mtp/hospitaltest/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HospitalTest  $hospitalTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HospitalTest $hospitalTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HospitalTest  $hospitalTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalTest $hospitalTest,$id)
    {
        HospitalTest::findorfail($id)->delete();
        return redirect('hospitals');
    }
}
