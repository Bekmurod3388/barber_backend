<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking=Booking::Orderby('id','desc')->get();
        return view('admin.bookings.index',[
            'bookings'=>$booking
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name'=>'required',
            'client_phone_number'=>['required','numeric',new PhoneNumber],
            'barber_id'=>'required',
            'time'=>'required'
        ]);
        $booking=new Booking();
        $booking->client_name=$request->client_name;
        $booking->client_phone_number=$request->client_phone_number;
        $booking->barber_id=$request->barber_id;
        $booking->time=$request->time;
        $booking->save();

    return redirect(route('admin.bookings.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking=Booking::findOr($id);
         return view('admin.bookings.show',['bookings'=>$booking]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookings = Booking::find($id);

        return view('admin.bookings.edit', compact('bookings'));
    }



    public function update(Request $request,$id)
    {
        $request->validate([
        'client_name'=>'required',
        'client_phone_number'=>['required','numeric',new PhoneNumber],
        'barber_id'=>'required',
        'time'=>'required'
    ]);
        $booking=Booking::findor($id);
        $booking->client_name=$request->client_name;
        $booking->client_phone_number=$request->client_phone_number;
        $booking->barber_id=$request->barber_id;
        $booking->time=$request->time;
        $booking->save();
        return redirect(route('admin.bookings.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking=Booking::findor($id);
        $booking->delete();
        return redirect()->route('admin.bookings.index');
    }
}
