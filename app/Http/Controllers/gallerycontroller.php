<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gallerycontroller extends Controller
{
    public function gallery(){
        return view('pages.gallery');
    }
}
