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
        $services = Service::with('category')->get();

        return view('front.service.index', compact( 'services'));
    }

    public function detail($slug)
    {
        $service = Service::where('slug', $slug)->with('category')->firstOrFail();
        $otherServices = Service::where('id', '!=', $service->id)->with('category')->get();
        return view('front.service.detail', compact('service', 'otherServices'));
    }
}
