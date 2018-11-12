<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiocontroller extends Controller
{
    public function audio(){
        return view('pages.audio');
    }

}
