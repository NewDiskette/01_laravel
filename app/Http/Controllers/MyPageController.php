<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyPageController extends Controller
{
    public function index(){
        return '<h1>This is my page</h1>';
    }
}
