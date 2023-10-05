<?php

namespace App\Http\Middleware;

use App\Models\Project;
use App\Models\Service;
use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;

class ViewShareMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $siteSetting = SiteSetting::first();
        view()->share('_siteSetting', $siteSetting);

        $projects = Project::select('image', 'slug')->take(6)->orderBy('id', 'desc')->get();
        view()->share('_projects', $projects);

        $services = Service::select('title', 'slug')->take(6)->orderBy('id', 'desc')->get();
        view()->share('_services', $services);

        return $next($request);
    }
}
