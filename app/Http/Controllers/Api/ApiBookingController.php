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

    public function days(){
        $today = date('Y-m-d');
        $today = strtotime($today);
        $tomorrow = strtotime("+1 day", $today);
        $after_tomorrow = strtotime("+2 day", $today);
        $today = date('Y-m-d', $today);
        $tomorrow = date('Y-m-d', $tomorrow);
        $after_tomorrow = date('Y-m-d', $after_tomorrow);

        $bookings_today = BookingResource::collection(Booking::where('day', $today)->orderby('start_time')->get());
        $bookings_tomorrow = BookingResource::collection(Booking::where('day', $tomorrow)->orderby('start_time')->get());
        $bookings_after_tomorrow = BookingResource::collection(Booking::where('day', $after_tomorrow)->orderby('start_time')->get());

        $mas = [
            'today'=>$bookings_today,
            'tomorrow'=>$bookings_tomorrow,
            'after_tomorrow'=>$bookings_after_tomorrow
        ];

        return response()->json($mas);
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
