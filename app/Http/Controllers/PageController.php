<?php

namespace App\Http\Controllers;

use App\Product;
use App\Photo;
use App\Banner;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function welcome(){
        $banners = Banner::all();
        $members = Team::all();
        $testimonials = Testimonial::all();
        return view('welcome', compact('banners', 'members', 'testimonials'));
    }
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
    public function services(){
        return view('services');
    }
}
