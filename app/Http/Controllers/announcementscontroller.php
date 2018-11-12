<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class announcementscontroller extends Controller
{
    public function announcements()
    {
        return view('pages.announcements');
    }
}
