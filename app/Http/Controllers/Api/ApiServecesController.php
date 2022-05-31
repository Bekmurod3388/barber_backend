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
        $services = ApiServecesResource::collection(Services::all());
        return response()->json($services);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Services();
        $data->services_name = $request->services_name;
        $data->cost = $request->cost;
        $data->barber_id = $request->barber_id;
        $image = $request->photo;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->photo->move('photo', $imagename);
        $data->photo = $imagename;

        $data->save();

        return new ApiServecesResource($data);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $services = new ApiServecesResource(Services::findorFail($id));
        return response()->json($services);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApiServecesResource $request, Services $services )
    {

        $services->services_name=$request->services_name;
        $services->cost=$request->cost;
        $services->barber_id=$request->barber_id;

        if ($request->photo != null) {
            $image = $request->photo;
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->photo->move('photo', $imagename);
            $services->photo = $imagename;
        }

        $services->save();

        return response()->json($services);

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
