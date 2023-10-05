<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class FPorjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->get();
        return view('front.projects', compact('projects'));
    }

    public function single($slug)
    {
        $project = Project::where('slug', $slug)->with('category')->firstOrFail();
        $projects = Project::where('slug', '!=', $slug)->with('category')->get();
        return view('front.project-detail', compact('project', 'projects'));
    }
}
