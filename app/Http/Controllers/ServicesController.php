<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servic = Services::OrderBy('id', 'DESC')->paginate(6);
        $barbers = Barber::all();
        return view('admin.services.index', [
            'services' => $servic,
            'barbers'=>$barbers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barbers = Barber::all();
        return view('admin.services.create',[
            'barbers'=>$barbers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'barber_id' => 'required'
        ]);

        $data = new Services();
        $data->services_name = $request->services_name;
        $data->cost = $request->cost;
        $data->barber_id = $request->barber_id;

        $image = $request->photo;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->photo->move('photo', $imagename);
        $data->photo = $imagename;

        $data->save();
        return redirect()->route('admin.services.index');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Services $services
     * @return \Illuminate\Http\Response
     */
    public function show(Services $services,$id)
    {
        $services=Services::findor($id);
        return view('admin.services.show', [
            'services' => $services,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Services $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services, $id)
    {
//        dd($services->id);
        $services = Services::find($id);
        $barbers = Barber::all();
        return view('admin.services.edit', [
            'services'=>$services,
            'barbers'=>$barbers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Services $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'services_name'=>'required',
            'cost'=>'required',
            'barber_id'=>'required'
        ]);

        $services=Services::find($id);
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

        return  redirect(route('admin.services.index'));
    }


    public function destroy($id)
    {
        $service = Services::findOrFail($id);
        $service->delete();
        return redirect()->route('admin.services.index');
    }

}
