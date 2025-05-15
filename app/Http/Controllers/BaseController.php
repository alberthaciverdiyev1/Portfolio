<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $projects = [];
        return view('home.index', compact('projects'));
    }
    public function projects()
    {
        $projects = [];
        $css = ['work.css'];
        return view('project.index', compact('projects','css'));
    }

    public function contact()
    {
        $css = ['contact.css'];
        return view('contact.index', compact('css'));
    }
}
