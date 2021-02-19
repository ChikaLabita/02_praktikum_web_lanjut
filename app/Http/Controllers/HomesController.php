<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function home(){
        return '<a href="https://www.educastudio.com/">https://www.educastudio.com/</a>';
    }
}
