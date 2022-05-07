<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\inventory;
use Illuminate\Support\Facades\DB;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;


class InventoryController extends Controller
{
    function ShowInventoryData(){

        $data =inventory::all();
        return view('view_inventory',['inventory_key'=>$data]);
        //return inventory::all();
    }

    function AddInventoryData(Request $req ){

        $req->validate([
            //'ItemId'=>'required',
            'ItemType'=>'required',
            'ItemName'=>'required',
            'SupplireName'=>'required',
            'UnitPrice'=>'required|numeric',
            'Quantity'=>'required|numeric',
            'Description'=>'required'
        ]);

    

        $addinventory= new inventory;

       // $addinventory->Item_Id=$req->ItemId;
        $addinventory->Item_Type=$req->ItemType;
        $addinventory->Item_Name=$req->ItemName;
        $addinventory->Supplire_Name=$req->SupplireName;
        $addinventory->Unit_Price=$req->UnitPrice;
        $addinventory->Quantity=$req->Quantity;
        $addinventory->Description=$req->Description;
        $addinventory->save();
        // return redirect('add_inventory');
        return redirect()->back()->with('message', 'Inventory Details Added Successfully ');
        
    }

    function DeleteInventoryData($id)
    {

        $data=inventory::find($id);
        $data->delete();
        // return redirect('test');
        return redirect()->back()->with('message', 'Inventory Details Delete Successfully ');
    }

    function ShowUpdateInventoryData($id)
    {
        $data=inventory::find($id);
        return view('update_inventory',['update_key'=>$data]);
    }

    function UpdateInventoryData(Request $req)
    {

        $req->validate([
            //'ItemId'=>'required',
            'ItemType'=>'required',
            'ItemName'=>'required',
            'SupplireName'=>'required',
            'UnitPrice'=>'required|numeric',
            'Quantity'=>'required|numeric',
            'Description'=>'required'
        ]);

         $data=inventory::find($req->id);
         $data->Item_Type=$req->ItemType;
         $data->Item_Name=$req->ItemName;
         $data->Supplire_Name=$req->SupplireName;
         $data->Unit_Price=$req->UnitPrice;
         $data->Quantity=$req->Quantity;
         $data->Description=$req->Description;
         $data->save();
        //  return redirect('view_inventory');
         return redirect('view_inventory')->with('message', 'Inventory Details Update Successfully ');
    }

   // public function DbOperation()
    //{

    //    return DB::table('inventory')->get();
    //}
    
    public function eventSearch(){

        //search function 

       $search_text = $_GET['query'];
       $inventory_key = inventory::where('Item_Type','Like', '%'.$search_text.'%')->orWhere('Item_Name','Like', '%'.$search_text.'%')
        ->orWhere('Supplire_Name','Like', '%'.$search_text.'%')->paginate(50);

       return view('search_inventory',compact('inventory_key'));

      
   }
    
// delet eke popup eka hdnna althen hadpu test ekata  adala ewa
function ShowInventoryDataTest(){

    $data =inventory::all();
    return view('test',['inventory_keys'=>$data]);
    return inventory::all();
}


//genarate pdf 
 function genaratePdf()
 {

    $data =inventory::all();
    // $pdf = PDF::loadView('inventorypdf', $data);

    $invpdf = PDF::loadview('inventorypdf',compact('data'));
    return $invpdf->download('InventoryList.pdf');

 }


}