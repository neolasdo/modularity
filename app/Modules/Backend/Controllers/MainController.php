<?php
namespace App\Modules\Backend\Controllers;


use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        return view(Backend::index);
    }
}