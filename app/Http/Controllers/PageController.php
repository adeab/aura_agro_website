<?php

namespace App\Http\Controllers;

use App\Product;
use App\Photo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function cattles(){
        $total=Product::count();
        $allcattles= Product::orderBy('id','desc')->paginate(12);
        return view('cattles', compact('allcattles', 'total'));
    }

    public function show($slug){
        $cattle= Product::with('photos')->where('slug', $slug)->first();
        // dd($cattle);
        return view('cattle', compact('cattle'));
    }
}
