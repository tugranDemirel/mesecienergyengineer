<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.project.create-edit', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'sub_title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'image' => 'required',
          ]);

        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
        }

        $create = Project::create($data);

        if ($create) {
            return redirect()->back()->with('success', 'Proje başarıyla eklendi.');
        }
        return redirect()->back()->with('error', 'Proje eklenirken bir hata oluştu.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.project.create-edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'sub_title' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
            'image' => 'nullable',
        ]);

        $data['slug'] = Str::slug($data['title']);
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
        }

        $update = $project->update($data);

        if ($update) {
            return redirect()->back()->with('success', 'Proje başarıyla eklendi.');
        }
        return redirect()->back()->with('error', 'Proje eklenirken bir hata oluştu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {

            if ($project->delete()) {
                unlink(public_path($project->image));
                return redirect()->back()->with('success', 'Proje başarıyla silindi.');
            }
            return redirect()->back()->with('error', 'Proje silinirken bir hata oluştu.');
    }
}
