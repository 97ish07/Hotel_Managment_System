<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\indexController;
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






//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//navigate to dashboad clicking home button or logo
Route::view('dashboard','dashboard');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');








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


//------------------- ----------------Customer Booking Routes--------------------------------------------------------

Route::get('roomindex',[indexController::class,'viewlist']);
Route::view('create','addnew');
Route::post('create',[createfunc::class,'getData']);

Route::view("edit",'editbookings');
Route::get('editlist/{id}',[indexController::class,'showData']);
Route::post('editlist',[indexController::class,'update']);

Route::get('deletelist/{id}',[indexController::class,'delete']);

Route::get('bookPdf',[indexController::class,'exportBookPDF']);