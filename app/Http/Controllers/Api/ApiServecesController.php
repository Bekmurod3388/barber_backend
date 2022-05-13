<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiServecesRequest;
use App\Http\Resources\ApiServecesResource;
use App\Models\Services;
use http\Env\Response;
use Illuminate\Http\Request;

class ApiServecesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  Services::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApiServecesRequest $request)
    {
        $serves = Services::create($request->validate());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ApiServecesResource(Services::findOrFail($id));
//        return new ApiServecesResource($services);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApiServecesRequest $request, Services $services)
    {
        $services ->update($request->validate());
        return $services;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        $services->delete();
        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
