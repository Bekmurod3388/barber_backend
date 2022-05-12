<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barber;
use function GuzzleHttp\Promise\all;

class BarberController extends Controller
{
    public function index()
    {
        $barbers = Barber::all();
        return view ('students.index')->with('barbers', $barbers);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Barber::create($input);
        return redirect('barbers')->with('flash_message', 'Barbers Addedd!');
    }

    public function show($id)
    {
        $barbers = Barber::find($id);
        return view('barbers.show')->with('barbers', $barbers);
    }

    public function edit($id)
    {
        $barbers = Barber::find($id);
        return view('barbers.edit')->with('barbers', $barbers);
    }

    public function update(Request $request, $id)
    {
        $barbers = Barber::find($id);
        $input = $request->all();
        $barbers->update($input);
        return redirect('barbers')->with('flash_message', 'barbers Updated!');
    }

    public function destroy($id)
    {
        Barber::destroy($id);
        return redirect('barbers')->with('flash_message', 'Barbers deleted!');
    }
}
