<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyLanguageController extends Controller
{
    public function index(){
        return '<h1>My favorite language of development is PHP.</h1>';
    }
}
