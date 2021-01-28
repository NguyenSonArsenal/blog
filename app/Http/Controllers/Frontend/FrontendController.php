<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function getHome()
    {
        return view('frontend.home');
    }

    public function getPage404()
    {
        return view('frontend.404');
    }

    public function getListPost()
    {
        return view('frontend.list-post');
    }

    public function getContact()
    {
        return view('frontend.contact');
    }

    public function getProfile()
    {
        return view('frontend.profile');
    }
}
