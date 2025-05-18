<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_active',true)->latest()->get();
        $services = Service::latest()->get();
        return view('home.index', compact('projects','services'));
    }
    public function projects()
    {
        $projects = Project::latest()->get();
        $css = ['work.css'];
        return view('project.index', compact('projects','css'));
    }

    public function contact()
    {
        $css = ['contact.css'];
        return view('contact.index', compact('css'));
    }
}
