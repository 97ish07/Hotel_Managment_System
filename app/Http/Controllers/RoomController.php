<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
     function ShowRoomData(){

        $data =rooms::all();
        return view('View_Room',['Room_key'=>$data]);
     }

function AddRoom(Request $req ){

        $req->validate([
            // 'ItemId'=>'required',
            'RoomID'=>'required',
            'FloorNumber'=>'required',
            'RoomType'=>'required',
            'Price'=>'required',
            'RoomStatus'=>'required',
             'Description'=>'required'
        ]);

        $addroom= new rooms;

      
        $addroom->RoomID=$req->roomID;
        $addroom->FloorNumber=$req->floorNumber;
        $addroom->RoomType=$req->roomType;
        $addroom->Price=$req->price;
        $addroom->RoomStatus=$req->roomStatus;
        $addroom->Description=$req->description;
        $addroom->save();
        return redirect('Add_Room');
    }
}