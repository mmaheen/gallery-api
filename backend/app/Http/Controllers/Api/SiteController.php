<?php

namespace App\Http\Controllers\Api;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function photos(){
        $photos = Photo::all();
        return response()->json($photos);
    }
}
