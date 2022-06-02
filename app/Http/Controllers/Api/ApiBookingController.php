<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookingResource;
use App\Http\Resources\ContactResource;
use App\Models\Booking;
use Illuminate\Http\Request;
class ApiBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function today(){
        $today = date('Y-m-d');
        $bookings = BookingResource::collection(Booking::where('day', $today)->orderby('start_time')->get());
        return response()->json($bookings);
    }
    public function tomorrow(){
        $today = date('Y-m-d');
        $today = strtotime($today);
        $today = strtotime("+1 day", $today);
        $today = date('Y-m-d', $today);
        $bookings = BookingResource::collection(Booking::where('day', $today)->orderby('start_time')->get());
        return response()->json($bookings);
    }
    public function after_tomorrow(){
        $today = date('Y-m-d');
        $today = strtotime($today);
        $today = strtotime("+2 day", $today);
        $today = date('Y-m-d', $today);
        $bookings = BookingResource::collection(Booking::where('day', $today)->orderby('start_time')->get());
        return response()->json($bookings);
    }
    public function index()
    {
        $bookings = BookingResource::collection(Booking::all());
        return response()->json($bookings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $booking = Booking::create($request->all());

        return new BookingResource($booking);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        $bookings =  new BookingResource($booking);

        return response()->json($bookings);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {

        $booking->update($request->all());

        return $booking ;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return response(null, \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
