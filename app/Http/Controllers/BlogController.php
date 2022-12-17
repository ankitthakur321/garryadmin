<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function addBlog() {
        return view('blogs.add-blog');
    }

    public function viewBlogs()
    {
        return view('blogs.view-blogs');
    }
}
