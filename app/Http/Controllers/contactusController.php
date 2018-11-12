<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactusController extends Controller
{
    public function contactUs(){
    return view('pages.contactUs');
}
}
