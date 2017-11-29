<?php

namespace App\Modules\Backend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;


class AdminController extends Controller
{
    public function login()
    {
        return view('Backend::master');
    }
}