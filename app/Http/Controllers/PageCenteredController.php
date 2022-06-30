<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageCenteredController extends Controller
{
    public function index(){
        return '<h1 style="text-align: center">This page is centered.</h1>';
    }
}
