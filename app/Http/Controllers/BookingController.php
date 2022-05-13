<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Booking;
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
         $bookings = Booking::all();
         return view('admin.bookings.index',[
             'bookings'=>$bookings,
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
        return view('admin.bookings.create',[
            'barbers'=>$barbers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking = new Booking();
        $booking->client_name = $request->client_name;
        $booking->client_phone_number = $request->client_phone_number;
        $booking->barber_id = $request->barber_id;
        $booking->time = $request->time;
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
        $booking = Booking::find($id);

        return view('admin.bookings.show',[
            'bookings'=>$booking,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $booking = Booking::find($id);
        $barbers = Barber::all();

        return view('admin.bookings.edit',[
            'bookings'=>$booking,
            'barbers'=>$barbers,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $booking = Booking::find($id);

        $booking->client_name = $request->client_name;
        $booking->client_phone_number = $request->client_phone_number;
        $booking->barber_id = $request->barber_id;
        $booking->time = $request->time;
        $booking->save();

        return redirect(route('admin.bookings.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        $booking = Booking::find($id);
        $booking -> delete();
        return redirect(route('admin.bookings.index'));

    }
}
