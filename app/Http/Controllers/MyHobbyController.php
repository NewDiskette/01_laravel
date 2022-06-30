<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hobby;

class MyHobbyController extends Controller
{
    public function index(){
        $hobby = Hobby::find(1);
        dump($hobby);
        dump($hobby->hobby);
        dump($hobby->image);
        dump($hobby->description);
        dump($hobby->created_at);
        dump($hobby->updated_at);
    }
}
