<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCoreController extends Controller
{
    public function login (){


        return view('blog.login');
    }
}
