<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\Base\FrontendController;

class HomeController extends FrontendController
{
    public function index()
    {
        $viewData = [];
        return view('frontend.home', $viewData);
    }

    public function showError404()
    {
        return view('frontend.404');
    }
}
