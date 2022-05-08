<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use PDF;

class indexController extends Controller
{
    //
    function viewlist()
    {
        
        error_log('test');
        if(isset($_GET['search'])){

            error_log($_GET['search']);
            $data = Booking::where('cus_name', "{$_GET['search']}")->get();
            return view('roomindex',['bookings'=>$data]);
        }
        else{
            $data = Booking::all();
            return view('roomindex',['bookings'=>$data]);

        }

        
        error_log($_GET['search']);
    }

    public function exportBookPDF(){
        $bookings = Booking::all();
        $bookpdf = PDF::loadview('roomindex',compact('bookings'));
        return $bookpdf->download('bookList.pdf');
    }

    function delete($id)
    {
        $data = Booking::where('id', $id);
        $data->delete();
        return redirect('roomindex');
    }

    function showData($id)
    {
        $data=Booking::find($id);
        return view('editbookings',['data'=>$data]);
    }

    function update(Request $req)
    {
        $data = Booking::find($req->id);
        
        error_log('test');
        $data->cus_name=$req->cus_name;
        $data->contact_No=$req->contact_No;
        $data->email=$req->email;
        $data->address=$req->address;
        $data->book_ID=$req->book_ID;
        $data->room_ID=$req->room_ID;
        $data->checked_in=$req->checked_in;
        $data->checked_out=$req->checked_out;
        $data->save();
        return redirect('roomindex');        
    }


    

    
}
