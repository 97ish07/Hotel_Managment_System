<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
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

Route::get('/', function () {
    return view('dashboard');
});



// Route::get('/', function () {
//     return view('inventory_page');
// });
//show inventory data
Route::view('view_inventory','view_inventory');
Route::get('view_inventory',[InventoryController::class,'ShowInventoryData']);

//add inventory route
Route::view('add_inventory','add_inventory');
Route::post('add_inventory',[InventoryController::class,'AddInventoryData']);

//Delete inventory route

Route::get('DeleteInventoryData/{id}',[InventoryController::class,'DeleteInventoryData']);

//update inventory route

Route::get('ShowUpdateInventoryData/{id}',[InventoryController::class,'ShowUpdateInventoryData']);
Route::post('update_inventory',[InventoryController::class,'UpdateInventoryData']);

//search
Route::get('/eventSearch',[InventoryController::class,'eventSearch']);

//Route::any('/search',[InventoryController::class,'Search']);

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//navigate to dashboad clicking home button or logo
Route::view('dashboard','dashboard');

//rout navgationbar(navigate to inventorya page)
Route::view('inventory_page','inventory_page');
//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::view('test','test');
Route::view('test','test');
// Route::get('test',[InventoryController::class,'ShowInventoryDatas']);
Route::get('test',[InventoryController::class,'ShowInventoryDataTest']);

//add room route
Route::view('Add_Room','Add_Room');
Route::post('Add_Room',[RoomController::class,'AddRoom']);
