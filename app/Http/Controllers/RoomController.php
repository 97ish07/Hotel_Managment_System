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



       function DeleteRoomData($ID)
    {

        $data=rooms::find($ID);
        $data->delete();
        return redirect('Delete_Room');
    }


    function ShowUpdateRoomData($ID)
    {
        $data=rooms::find($ID);
        return view('updateRoom',['update_key'=>$data]);
    }

    function UpdateRoomData(Request $req)
    {

        $req->validate([
            //'ItemId'=>'required',
            'roomID'=>'required',
            'floorNumber'=>'required',
            'roomType'=>'required',
            'price'=>'required',
            'roomStatus'=>'required',
            'description'=>'required'
        ]);

         $data=rooms::find($req->ID);
         $data->RoomID=$req->roomID;
         $data->FloorNumber=$req->floorNumber;
         $data->RoomType=$req->roomType;
         $data->Price=$req->price;
         $data->RoomStatus=$req->roomStatus;
         $data->Description=$req->description;
         $data->save();
         return redirect('view_Room');
    }

      
      public function eventsSearch(){

        

       $search_text = $_GET['query'];
       $Room_key = rooms::where('RoomID','Like', '%'.$search_text.'%')->orWhere('FloorNumber','Like', '%'.$search_text.'%')
        ->orWhere('RoomType','Like', '%'.$search_text.'%')->paginate(50);

       return view('search_Room',compact('Room_key'));

      
   }

     function ShowRoomDataTest(){

         $data =rooms::all();
         return view('Delete_Room',['delete_key' => $data]);
         return rooms::all();
     }
   

 

}