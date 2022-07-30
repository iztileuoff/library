<?php

namespace App\Http\Controllers;

use App\Models\Facultet;
use App\Http\Requests\StoreFacultetRequest;
use App\Http\Requests\UpdateFacultetRequest;

class FacultetController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFacultetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultetRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Facultet  $facultet
     * @return \Illuminate\Http\Response
     */
    public function show(Facultet $facultet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFacultetRequest  $request
     * @param  \App\Models\Facultet  $facultet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultetRequest $request, Facultet $facultet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Facultet  $facultet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facultet $facultet)
    {
        //
    }
}
