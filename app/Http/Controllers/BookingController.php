<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Barber;
use App\Models\Booking;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;
class BookingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookings = Booking::orderBy('created_at','desc')->paginate(6);
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
    public function store(BookingRequest $request)
    {

        Booking::create($request->all());
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
        $booking->day = $request->day;
        $booking->start_time = $request->start_time;
        $booking->barber_id = $request->barber_id;
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
