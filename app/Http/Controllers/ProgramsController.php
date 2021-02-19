<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    public function program($id){
        echo '<a href="https://www.educastudio.com/program/'.$id.'">https://www.educastudio.com/program/'.$id.'</a>';
    }
}