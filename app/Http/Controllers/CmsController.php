<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Appearance;
use App\Banner;

class CmsController extends Controller
{
    //
    public function appearance(){
        $appearance = Appearance::take(1)->first();
        // dd($appearance);
        return view('admin.cms.appearance', compact('appearance'));
    }
    public function banner(){
        $banners = Banner::all();
        return view('admin.cms.banner', compact('banners'));
    }
    public function updateAppearance(Request $request){
        

        $appearance = Appearance::take(1)->first();
        if(!$appearance){
            $appearance = new Appearance();
        }

        if($request->service){
            $appearance->service_text = $request->service; 
            $appearance->save();
            return Redirect::route('service.index');
        }

        $appearance->facebook = $request->facebook;
        $appearance->youtube = $request->youtube;
        $appearance->phone_number = $request->mobile;
        $appearance->about_us = $request->about_us;
        $appearance->address= $request->address;
        $appearance->welcome_header = $request->welcome_title;
        $appearance->welcome_message = $request->welcome;
        $appearance->team_message= $request->team;
        $appearance->team_header = $request->team_title; 
          

        if($request->file('image')){
            $folderPath = public_path('images/');
            $image_parts = explode(";base64,", $request->image_data);
            $image_type_aux = explode("image/", $image_parts[0]);
            // $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $imageName = 'logo.png';
            $imageFullPath = $folderPath.$imageName;
            file_put_contents($imageFullPath, $image_base64);
        }
        if($request->file('adv_image')){
            $folderPath = public_path('images/popup/');
            $img = $request->file('adv_image');
            $advertiseImage =$img->getClientOriginalName();
            $img->move($folderPath, $advertiseImage);
            $appearance->adevertise_image="$advertiseImage";
        }
        $appearance->save();
       
        return Redirect::route('appearance');
        
    }
}
