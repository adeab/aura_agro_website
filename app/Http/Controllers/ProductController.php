<?php

namespace App\Http\Controllers;

use App\Product;
use App\Photo;
use Illuminate\Http\Request;
use Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth', ['except' => ['showCattles']]);
    // }

    // public function showCattles()
    // {
        
    // }

     public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.cattles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $cattle= new Product();
        $cattle->name=$request->cattle_title;
        $cattle->slug= strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->cattle_title), '-'));
        $cattle->description= $request->cattle_detail;
        $cattle->bookingStatus=0;
        $cattle->videoLink= $request->cattle_video;
        $cattle->price= $request->price;
        $folderPath = public_path('upload/');
        $image_parts = explode(";base64,", $request->image_data);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
        $imageFullPath = $folderPath.$imageName;
        file_put_contents($imageFullPath, $image_base64);
        $cattle->coverPhoto = $imageName;
        $cattle->save();

        if ($files = $request->file('gallery_image')) 
        {
            foreach($files as $img) {
                // Upload Orginal Image           
            $galleryImage =$img->getClientOriginalName();
            $img->move($folderPath, $galleryImage);
                // Save In Database
                $imagemodel= new Photo();
                $imagemodel->photo_name="$galleryImage";
                $imagemodel->product_id=$cattle->id;
                $imagemodel->save();
            }
    }
        return Redirect::route('cattle-detail', $cattle->slug);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $cattle= Product::with('photos')->find($id);
        // dd($cattle);
        // dd($product);
        //
        // dd($product);
        // return response()->json([
        //         'cattle'=>$product
        //     ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);

    }
    public function toggleStatus($id){
        $cattle= Product::find($id);
        $cattle->bookingStatus = !$cattle->bookingStatus;
        $cattle->save();
    }
}
