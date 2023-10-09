<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class FServiceController extends Controller
{
    public function index()
    {
        $projects = Project::with('category')->orderByDesc('id')->get();
        $clients = Client::all();
        $services = Service::with('category')->get();

        return view('front.service.index', compact('projects', 'clients', 'services'));
    }

    public function detail($slug)
    {
        $service = Service::where('slug', $slug)->with('category')->firstOrFail();
        return view('front.service.detail', compact('service'));
    }
}
