<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;

class MyLanguageController extends Controller
{
    public function index(){
        $language = Language::find(1);
        dump($language);
        dump($language->language);
        dump($language->image);
        dump($language->description);
        dump($language->created_at);
        dump($language->updated_at);
    }
}
