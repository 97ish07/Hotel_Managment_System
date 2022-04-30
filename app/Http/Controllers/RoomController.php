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
            //'ItemId'=>'required',
            'roomID'=>'required',
            'floorNumber'=>'required',
            'roomType'=>'required',
            'price'=>'required',
            'roomStatus'=>'required',
             'description'=>'required'
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

    function UpdateRoomData($ID){
       $data = rooms::find($ID);
       return view('updateRoom',['data' =>$data]);
    }
}