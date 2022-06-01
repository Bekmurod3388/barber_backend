<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarberRequest;
use App\Rules\PassportNumber;
use Illuminate\Http\Request;
use App\Models\Barber;
use function GuzzleHttp\Promise\all;

class BarberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barbers = Barber::OrderBy('id', 'DESC')->paginate(6);
        return view('admin.barbers.index', [
            'barbers' => $barbers
        ]);
    }

    public function create()
    {
        return view('admin.barbers.create');
    }

    public function store(BarberRequest $request)
    {
//        Barber::create($request->all());
        $data = new Barber();

        $data->barber_name = $request->barber_name;
        $data->barber_phone_number = $request->barber_phone_number;
        $data->barber_home_adress = $request->barber_home_adress;
        $data->passport_number = $request->passport_number;
        $data->start_time = $request->start_time;
        $data->end_time = $request->end_time;

        $data->save();


        return redirect(route('admin.barber.index'));

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
        $data = Barber::find($id);

        $data->barber_name = $request->barber_name;
        $data->barber_phone_number = $request->barber_phone_number;
        $data->barber_home_adress = $request->barber_home_adress;
        $data->passport_number = $request->passport_number;
        $data->start_time = $request->start_time;
        $data->end_time = $request->end_time;

        $data->save();
        return redirect(route('admin.barber.index'));
    }

    public function destroy($id)
    {
        Barber::destroy($id);
        return redirect(route('admin.barber.index'));

    }
}
