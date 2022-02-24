<?php

namespace App\Http\Controllers;

use App\Product;
use App\Photo;
use App\Service;
use App\Banner;
use App\Team;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    //
    public function welcome(){
        // Session::put('key', "session key");	// Set session variable
        $showPopUp = $this->popUpShowStatus();
        $banners = Banner::all();
        $members = Team::all();
        $testimonials = Testimonial::all();
        $services = Service::take(3)->get();
        return view('welcome', compact('banners', 'members', 'testimonials', 'services', 'showPopUp'));
    }
    public function popUpShowStatus()
    {
        $showed = Session::get('popup_showed');
        if($showed){
            return false;
        }
        else{
            Session::put('popup_showed', true);
            return true;
        }
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
    public function showService($slug){
        $service= Service::where('slug', $slug)->first();
        // dd($service);
        return view('service', compact('service'));
    }
    public function services(){
        $services= Service::orderBy('id','desc')->get();
        return view('services', compact('services'));
    }
    public function search(Request $request){
        $allcattles= Product::where('name', 'LIKE', "%{$request->keyword}%")->paginate(12);
        // dd($allcattles);
        $total = count( $allcattles->toArray());
        return view('cattles', compact('allcattles', 'total'));
    }
}
