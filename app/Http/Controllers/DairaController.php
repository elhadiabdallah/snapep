<?php

namespace App\Http\Controllers;

use App\Models\Daira;
use Illuminate\Http\Request;

class DairaController extends Controller
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

    public function dairasPerWilaya($wilaya=null)
    {
        $list = Daira::where('wilaya_id', $wilaya)->get();
        return response()->json($list, 200);
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
     * @param  \App\Models\Daira  $daira
     * @return \Illuminate\Http\Response
     */
    public function show(Daira $daira)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daira  $daira
     * @return \Illuminate\Http\Response
     */
    public function edit(Daira $daira)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daira  $daira
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daira $daira)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daira  $daira
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daira $daira)
    {
        //
    }
}
