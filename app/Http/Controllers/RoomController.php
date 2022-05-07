<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;
use Illuminate\Support\Facades\DB;
//use Barryvdh\DomPDF\Facade\Pdf;

class RoomController extends Controller
{
   function ShowRoomData(){

        $data =rooms::all();
        return view('View_Room',['room_key'=>$data]);
     }

     function AddRoomData(Request $req ){

        $req->validate([
            'Room_Type'=>'required',
            'Room_ID'=>'required',
            'Room_Status'=>'required',
            'Pri_ce'=>'required|numeric',
            'Floor_Number'=>'required|numeric',
            'Descri_ption'=>'required'
        ]);

    

        $addroom= new rooms;

       
        $addroom->RoomType=$req->Room_Type;
        $addroom->RoomID=$req->Room_ID;
        $addroom->RoomStatus=$req->Room_Status;
        $addroom->Price=$req->Pri_ce;
        $addroom->FloorNumber=$req->Floor_Number;
        $addroom->Description=$req->Descri_ption;
        $addroom->save();
        return redirect()->back()->with('message', 'New Room Added Successfully ');
        
    }



    function ShowUpdateRoomData($id)
    {
        $data=rooms::find($id);
        return view('Update_Room',['update_key'=>$data]);
    }

    function UpdateRoomData(Request $req)
    {

        $req->validate([
            'Room_Type'=>'required',
            'Room_ID'=>'required',
            'Room_Status'=>'required',
            'Pri_ce'=>'required|numeric',
            'Floor_Number'=>'required|numeric',
            'Descri_ption'=>'required'
        ]);

         $data=rooms::find($req->id);
         $data->RoomType=$req->Room_Type;
         $data->RoomID=$req->Room_ID;
         $data->RoomStatus=$req->Room_Status;
         $data->Price=$req->Pri_ce;
         $data->FloorNumber=$req->Floor_Number;
         $data->Description=$req->Descri_ption;
         $data->save();
         //return redirect('View_Room');
         return redirect('View_Room')->with('message', 'Room Details Update Successfully ');
    }


    public function RoomSearch(){

       

       $search_text = $_GET['query'];
       $room_key = rooms::where('RoomType','Like', '%'.$search_text.'%')->orWhere('RoomID','Like', '%'.$search_text.'%')
        ->orWhere('RoomStatus','Like', '%'.$search_text.'%')->paginate(50);

       return view('Search_Room',compact('room_key'));


    }


    function ShowRoomDataTest(){

    $data =rooms::all();
    return view('Delete_Room',['room_keys'=>$data]);
    return rooms::all();
}



     function DeleteRoomData($id)
    {

        $data=rooms::find($id);
        $data->delete();
        //return redirect('Delete_Room');
        return redirect()->back()->with('message', 'Room was successfully deleted ');
    }


   // function genarateRoomPdf()
 //{

    //$data =rooms::all();
    

   // $rmpdf = PDF::loadview('Roompdf',compact('data'));
    //return $rmpdf->download('InventoryList.pdf');

 //}


}