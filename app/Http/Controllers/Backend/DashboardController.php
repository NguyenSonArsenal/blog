<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Base\BackendController;

class DashboardController extends BackendController
{
    public function index()
    {
        $viewData = [];
        return view('backend.dashboard.index', $viewData);
    }
}
