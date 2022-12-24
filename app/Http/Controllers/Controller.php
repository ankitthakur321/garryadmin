<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Blog;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function networkSecurity()
    {
        $blogs = Blog::where('blog_category', "Network & Security")
            ->orderBy('created_at')
            ->paginate(10);
        return view('network-security', compact('blogs'));
    }

    public function cloudComputing()
    {
        $blogs = Blog::where('blog_category', "Cloud Computing")
            ->orderBy('created_at')
            ->paginate(10);
        return view('cloud-computing', compact('blogs'));
    }

    public function socialMedia()
    {
        $blogs = Blog::where('blog_category', "Social Media")
            ->orderBy('created_at')
            ->paginate(10);
        return view('social-media', compact('blogs'));
    }


    public function diveIn()
    {
        return view('dive-in');
    }
}
