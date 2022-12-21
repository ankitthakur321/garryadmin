<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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

    public function socialMedia()
    {
        return view('social-media');
    }

    public function networkSecurity()
    {
        return view('network-security');
    }

    public function diveIn()
    {
        return view('dive-in');
    }

    public function cloudComputing()
    {
        return view('cloud-computing');
    }
}
