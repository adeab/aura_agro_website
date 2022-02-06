<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;


class PhotoController extends Controller
{
    //
    public function index(){
        return view('test.index');
    }
    // public function index_two(){
    //     return view('test.crop-image-upload');
    // }
 
    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('upload/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $saveFile = new Photo();
         $saveFile->photo_name = $imageName;
         $saveFile->product_id= 1;
         $saveFile->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }
    public function store(Request $request)
    {
       request()->validate([
            'profileImage.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('profileImage')) {
       	// Define upload path
            $destinationPath = public_path('/profile_images/'); // upload path
            foreach($files as $img) {
				// Upload Orginal Image           
	           $profileImage =$img->getClientOriginalName();
	           $img->move($destinationPath, $profileImage);
	        	// Save In Database
				$imagemodel= new Photo();
				$imagemodel->photo_name="$profileImage";
				$imagemodel->save();
			}

        }
        return back()->with('success', 'Image Upload successfully');
 
    }
}
