<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RoomController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\createfunc;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\DineInController;
use Dompdf\Dompdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//------------------------------------Common Routs-------------------------------------------------------------------------

Route::get('/', function () {
    return view('inventory_page');
});
//show inventory data
Route::view('view_inventory','view_inventory');
Route::get('view_inventory',[InventoryController::class,'ShowInventoryData']);

//add inventory route
Route::view('add_inventory','add_inventory');
Route::post('add_inventory',[InventoryController::class,'AddInventoryData']);

//Delete inventory route
Route::view('delete_inventory','delete_inventory');
Route::get('DeleteInventoryData/{id}',[InventoryController::class,'DeleteInventoryData']);

//update inventory route
Route::view('update_inventory','update_inventory');
Route::get('update_inventory/{id}',[InventoryController::class,'ShowUpdateInventoryData']);
Route::post('update_inventory',[InventoryController::class,'UpdateInventoryData']);

//search
Route::get('/eventSearch',[InventoryController::class,'eventSearch']);

//Route::any('/search',[InventoryController::class,'Search']);

//navigate to dashboad clicking home button or logo
Route::view('dashboard','dashboard');

//rout navgationbar(navigate to inventorya page)
Route::view('inventory_page','inventory_page');

//Route::view('test','test');
Route::view('test','test');
// Route::get('test',[InventoryController::class,'ShowInventoryDatas']);
Route::get('test',[InventoryController::class,'ShowInventoryDataTest']);

//pdf  report genarategenrate

Route::view('inventorypdf','inventorypdf');
Route::get('inventorypdf',[InventoryController::class,'genaratePdf']);







//------------------- ----------------Room Managment Routes--------------------------------------------------------




//Route for room dashboard


Route::get('/', function () {
    return view('Room_Dashboard');
});


Route::view('Room_Dashboard','Room_Dashboard');



//route for add new room
Route::view('Add_Room','Add_Room');
Route::post('Add_Room',[RoomController::class,'AddRoomData']);


//route for view rooms
Route::view('view_Room','view_Room');
Route::get('View_Room',[RoomController::class,'ShowRoomData']);

//route for update room
Route::view('Update_Room','Update_Room');
Route::get('Update_Room/{id}',[RoomController::class,'ShowUpdateRoomData']);
Route::post('Update_Room',[RoomController::class,'UpdateRoomData']);


//route for search room
Route::get('/RoomSearch',[RoomController::class,'RoomSearch']);

//Route for delete room
Route::view('Delete_Room','Delete_Room');
Route::get('DeleteRoomData/{id}',[RoomController::class,'DeleteRoomData']);
Route::get('Delete_Room',[RoomController::class,'ShowRoomDataTest']);


//Route for generate report
Route::view('Roompdf','Roompdf');
Route::get('Roompdf',[RoomController::class,'genarateRoomPdf']);
//------------------- ----------------Customer Booking Routes--------------------------------------------------------

Route::get('roomindex',[indexController::class,'viewlist']);
Route::view('create','addnew');
Route::post('create',[createfunc::class,'getData']);

Route::view("edit",'editbookings');
Route::get('editlist/{id}',[indexController::class,'showData']);
Route::post('editlist',[indexController::class,'update']);

Route::get('deletelist/{id}',[indexController::class,'delete']);

Route::get('bookPdf',[indexController::class,'exportBookPDF']);

//pdf  report genarategenrate

Route::view('inventorypdf','inventorypdf');
Route::get('inventorypdf',[InventoryController::class,'genaratePdf']);




//------------------- ----------------Dinein Routes--------------------------------------------------------

Route::resource('dinein', 'App\Http\Controllers\DineInController');


Route::get('/addDinein', function () {

    return view('add_new_booking');

});

