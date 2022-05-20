<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarberRequest;
use Illuminate\Http\Request;
use App\Models\Barber;
use function GuzzleHttp\Promise\all;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::all();
        return view ('admin.barbers.index')->with('barbers', $barbers);
    }

    public function create()
    {
        return view('admin.barbers.create');
    }

    public function store(BarberRequest $request)
    {
        $data = new Barber();
        $data->barber_name = $request->nomi;
        $data->barber_phone_number = $request->telefon_raqami;
        $data->barber_home_adress = $request->address;
        $data->start_time = $request->start;
        $data->end_time  = $request->end;
        $data->save();
        return redirect(route('admin.barber.index'))->with('flash_message', 'Barbers Addedd!');
    }

    public function show($id)
    {
        $barbers = Barber::find($id);
        return view('admin.barbers.show')->with('barbers', $barbers);
    }

    public function edit($id)
    {
        $barbers = Barber::find($id);
        return view('admin.barbers.edit')->with('barbers', $barbers);
    }

    public function update(Request $request, $id)
    {
        $barbers = Barber::find($id);
        $input = $request->all();
        $barbers->update($input);
        return redirect(route('admin.barber.index'));
    }

    public function destroy($id)
    {
        Barber::destroy($id);
        return redirect(route('admin.barber.index'));

    }
}
