<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function homeAdmin()
    {
        return view('admin.index');
    }
}
