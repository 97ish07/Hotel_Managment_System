<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;


class createfunc extends Controller
{
    //
    function getData(Request $req)
    {
        $booking = new Booking;
        $booking ->cus_name=$req->cus_name;
        $booking ->contact_No=$req->contact_No;
        $booking ->email=$req->email;
        $booking ->address=$req->address;
        $booking ->book_ID=$req->book_ID;
        $booking ->room_ID=$req->room_ID;
        $booking ->checked_in=$req->checked_in;
        $booking ->checked_out=$req->checked_out;
        
        $booking->save();
        return redirect('roomindex');
        
    }
}
