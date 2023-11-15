<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $categories = Category::all();
        return view('admin.service.index', compact('services', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
        return view('admin.service.create-edit', compact('categories'));
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
            'title' => 'required',
            'short_description' => 'required',
            'detail' => 'required',
            'image' => 'required',
            'icon' => 'required',
            'category_id' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
        }

        $create = Service::create($data);

        if ($create)
            return redirect()->back()->with('success', 'Hizmet başarıyla eklendi.');
        else
            return redirect()->back()->with('error', 'Hizmet eklenirken bir hata oluştu.');
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
    public function edit(Service $service)
    {
        $categories  = Category::all();
        return view('admin.service.create-edit', compact('service', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {

        $data = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'detail' => 'required',
            'image' => 'nullable',
            'icon' => 'nullable',
            'category_id' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);


        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
            unlink(public_path($service->image));
        }


        $update = $service->update($data);

        if ($update)
            return redirect()->back()->with('success', 'Hizmet başarıyla güncellendi.');
        else
            return redirect()->back()->with('error', 'Hizmet güncellenirken bir hata oluştu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
