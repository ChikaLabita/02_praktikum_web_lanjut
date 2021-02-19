<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products(){
        echo '<ul><b><h3>Products Educa Studio : </h3></ul><b>';
        echo '<a href="https://www.educastudio.com/category/marbel-edu-games"><ul><li><b>https://www.educastudio.com/category/marbel-edu-games</li></a><br>';
        echo '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games"><li>https://www.educastudio.com/category/marbel-and-friends-kids-games</li></a><br>';
        echo '<a href="https://www.educastudio.com/category/riri-story-books"><li>https://www.educastudio.com/category/riri-story-books</li></a><br>';
        echo '<a href="https://www.educastudio.com/category/kolak-kids-songs"><li>https://www.educastudio.com/category/kolak-kids-songs</li></ul></a></b><br>';
    }
}
