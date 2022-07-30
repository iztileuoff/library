<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use App\Http\Resources\HistoryCollection;
use App\Http\Resources\HistoryResource;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new HistoryCollection(History::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHistoryRequest $request)
    {
        History::create($request->validated());

        return response([
            'code' => 201,
            'message' => 'History created successfully'
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
        $history = History::where('id', $id)->get();

        return response([
            'code' => 200,
            'message' => 'One history',
            'data' => HistoryResource::collection($history)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHistoryRequest $request, $id)
    {
        History::where('id', $id)->update($request->validated());

        return response([
            'code' => 200,
            'message' => 'History updated successfully'
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
        History::where('id', $id)->delete();

        return response([
            'code' => 200,
            'message' => 'History deleted successfully'
        ]);
    }
}
