<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReservationTable;

class BarController extends Controller
{
    public function bar()
    {
    	return view('bars.bar');
    }

    public function menu()
    {
    	return view('bars.menu');
    }

    public function blog()
    {
    	return view('bars.blog');
    }

    public function contact()
    {
    	return view('bars.contact');
    }

    public function index()
    {
    	$bars = ReservationTable::all();
    	return view('bars.index',[
    		'bars' => $bars
    	]);
    }
//'day', 'hour', 'name', 'tel_number', 'people'
    // protected function create(array $bars)
    // {
    //     return ReservationTable::create([
    //         'day' => $bars['day'],
    //         'hour' => $bars['hour'],
    //         'name' => $bars['name'],
    //     	'tel_number' => $bars['tel_number'],
    //     	'people' => $bars['people'],
    //     ]);
    // }

    protected function store(Request $request)
    {
 		$day = $request->input('day');
 		$hour = $request->input('hour');
 		$name = $request->input('name');
 		$tel_number = $request->input('phone');
 		$people = $request->input('persons');

 		ReservationTable::create([
            'day' => $day,
            'hour' => $hour,
            'name' => $name,
        	'tel_number' => $tel_number,
        	'people' => $people,
        ]);

        return redirect()->route('bar_index');
    }
    public function service()
    {
    	return view('service');
    }

}
