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
        $services = Service::with('category')->get();
        return view('admin.service.index', compact('services'));
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
            'bg_image' => 'required',
            'image' => 'required',
            'image2' => 'required',
            'icon' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('bg_image')) {
            $imageName = uniqid() . '.' . $request->bg_image->extension();
            $request->bg_image->move(public_path('uploads'), $imageName);
            $data['bg_image'] = '/uploads/' . $imageName;
        }
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
        }
        if ($request->hasFile('image2')) {
            $imageName = uniqid() . '.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName);
            $data['image2'] = '/uploads/' . $imageName;
        }
        if ($request->hasFile('icon')) {
            $imageName = uniqid() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads'), $imageName);
            $data['icon'] = '/uploads/' . $imageName;
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
            'bg_image' => 'nullable',
            'image' => 'nullable',
            'image2' => 'nullable',
            'icon' => 'nullable',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $data['slug'] = Str::slug($data['title']);

        if ($request->hasFile('bg_image')) {
            $imageName = uniqid() . '.' . $request->bg_image->extension();
            $request->bg_image->move(public_path('uploads'), $imageName);
            $data['bg_image'] = '/uploads/' . $imageName;
            unlink(public_path($service->bg_image));
        }
        if ($request->hasFile('image')) {
            $imageName = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads'), $imageName);
            $data['image'] = '/uploads/' . $imageName;
            unlink(public_path($service->image));
        }
        if ($request->hasFile('image2')) {
            $imageName = uniqid() . '.' . $request->image2->extension();
            $request->image2->move(public_path('uploads'), $imageName);
            $data['image2'] = '/uploads/' . $imageName;
            unlink(public_path($service->image2));
        }
        if ($request->hasFile('icon')) {
            $imageName = uniqid() . '.' . $request->icon->extension();
            $request->icon->move(public_path('uploads'), $imageName);
            $data['icon'] = '/uploads/' . $imageName;
            unlink(public_path($service->icon));
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
