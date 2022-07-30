<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFacultetRequest;
use App\Http\Requests\UpdateFacultetRequest;
use App\Http\Resources\FacultetCollection;
use App\Http\Resources\FacultetResource;
use App\Models\Facultet;
use Illuminate\Http\Request;

class FacultetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FacultetCollection(Facultet::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultetRequest $request)
    {
        Facultet::create($request->validated());

        return response([
            'code' => 201,
            'message' => 'Facultet created successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facultet = Facultet::where('id', $id)->get();

        return response([
            'code' => 200,
            'message' => 'One fucultet',
            'data' => FacultetResource::collection($facultet)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFacultetRequest $request, $id)
    {
        Facultet::where('id', $id)->update($request->validated());

        return response([
            'code' => 200,
            'message' => 'Facultet updated successfully'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Facultet::where('id', $id)->delete();

        return response([
            'code' => 200,
            'message' => 'Facultet deleted successfully'
        ]);
    }
}
