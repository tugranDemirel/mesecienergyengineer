<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class FAboutController extends Controller
{
    public function index()
    {

        $projects = Project::with('category')->orderByDesc('id')->get();
        $clients = Client::all();
        $services = Service::with('category')->get();
        return view('front.about', compact('services', 'clients', 'projects'));
    }
}
