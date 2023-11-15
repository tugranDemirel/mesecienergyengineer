<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class FPorjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('front.projects', compact('projects'));
    }

    public function detail($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $projects = Project::where('slug', '!=', $slug)->get();
        return view('front.project-detail', compact('project', 'projects'));
    }
}
