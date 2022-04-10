<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return view('booking_list', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_new_booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'customer_id' => 'required|max:225',
            'name' => 'required|max:225',
            'contact_no' => 'required|max:225',
            'email' => 'required|max:225',
            'address' => 'required|max:225',
            'booking_id' => 'required|max:225',
            'room_id' => 'required|max:225',
            'check_in_date' => 'required|max:225',
            'check_out_date' => 'required|max:225'
        ]);

        $booking = new Booking([
            'customer_id' => $request->get('customer_id'),
            'name' => $request->get('name'),
            'contact_no' => $request->get('contact_no'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'booking_id' => $request->get('booking_id'),
            'room_id' => $request->get('room_id'),
            'check_in_date' => $request->get('check_in_date'),
            'check_out_date' => $request->get('check_out_date')
        ]);

        $booking -> save();

        return redirect('/booking')->with('completed','Booking has been Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
