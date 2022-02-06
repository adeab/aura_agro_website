<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appearance;

class CmsController extends Controller
{
    //
    public function appearance(){
        $appearance = Appearance::all();
        return view('cms.appearance', compact('appearance'));
    }
    public function updateAppearance(Request $request){
        dd($request);
    }
}
