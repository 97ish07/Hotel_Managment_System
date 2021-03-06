<?php

namespace App\Http\Controllers;

use App\Models\dine_in;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class DineInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dinein = dine_in::where([
            ['meal_code', '!=', Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('meal_code','LIKE','%'. $term . '%')->get();
                }
            }]
        ])
            ->orderBy("id", "desc")
            ->paginate(10);

        return view('view_menu', compact('dinein'))
            ->with('i' , (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'country' => 'required|max:225',
            'category' => 'required|max:225',
            'meal_code' => 'required|max:225',
            'menu' => 'required|max:225',
            'small_portion_price' => 'required|max:225',
            'medium_portion_price' => 'required|max:225',
            'large_portion_price' => 'required|max:225'
        ]);

        $dineIn = new dine_in([
            'country' => $request->get('country'),
            'category' => $request->get('category'),
            'meal_code' => $request->get('meal_code'),
            'menu' => $request->get('menu'),
            'small_portion_price' => $request->get('small_portion_price'),
            'medium_portion_price' => $request->get('medium_portion_price'),
            'large_portion_price' => $request->get('large_portion_price')
        ]);

        

        $dineIn -> save();

        return redirect('/dinein')->with('completed','Meal has been saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dineIn = dine_in::findOrFail($id);
        return view('dine_in_update', compact('dineIn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'country' => 'required|max:225',
            'category' => 'required|max:225',
            'meal_code' => 'required|max:225',
            'menu' => 'required|max:225',
            'small_portion_price' => 'required|max:225',
            'medium_portion_price' => 'required|max:225',
            'large_portion_price' => 'required|max:225',
        ]);
        dine_in::whereId($id)->update($updateData);
        return redirect('/dinein')->with('completed', 'Meal has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dineIn = dine_in::findOrFail($id);
        $dineIn->delete();

        return redirect('/dinein')->with('completed', 'Meal has been deleted');
    }

    public function generatepdf()
    {
        $dineIn = dine_in::all();
        $generatePDF = PDF::loadview('view_menu',compact('dineIn'));
    }
}

