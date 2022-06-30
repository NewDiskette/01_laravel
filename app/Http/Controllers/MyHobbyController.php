<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyHobbyController extends Controller
{
    public function index(){
        return '<h1>My hobby is development.</h1>';
    }
}
