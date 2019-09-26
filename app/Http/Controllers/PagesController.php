<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
        return view('page.contact');
    }

    public function about()
    {
        return view('page.about', ['members' => Member::all()]);
    }
}
