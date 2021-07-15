<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class TravelController extends Controller
{
    public function index(){

        //SELECT * `travel`
        $query = Travel::all();
        //dump($query);

        /* $query = Travel::where('price', '>', 800 )->get();
        dd($query); */

        /* [
            'query' => $query
        ] */

        return view('home', compact('query'));
    }
}
