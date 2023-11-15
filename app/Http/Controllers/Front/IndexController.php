<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $projects = Project::limit(6)->get();
        $services = Service::with('category')->limit(4)->get();
        $clients = Client::all();
        return view('front.index', compact('sliders', 'services', 'projects', 'clients'));
    }
}
