<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view('admin.slider.create-edit');
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
            'bg_image' => 'required',
            'image' => 'required',
            'url' => 'required|url',
            'description' => 'required|max:150',
        ]);


        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move(public_path("uploads"), $imageName);
            $data["image"] =  '/uploads/' . $imageName;
        }

        if ($request->hasFile("bg_image")) {
            $bgImage = $request->file("bg_image");
            $bgImageName = uniqid() . "." . $bgImage->getClientOriginalExtension();
            $bgImage->move(public_path("uploads"), $bgImageName);
            $data["bg_image"] =  '/uploads/' . $bgImageName;
        }

        $create = Slider::create($data);
        if ($create) {
            return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully');
        } else {
            return redirect()->route('admin.slider.index')->with('error', 'Slider creation failed');
        }
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
    public function edit(Slider $slider)
    {
        return view('admin.slider.create-edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

        $data = $request->validate([
            'bg_image' => 'nullable',
            'image' => 'nullable',
            'url' => 'required|url',
            'description' => 'required|max:150',
        ]);


        if ($request->hasFile("image")) {
            $image = $request->file("image");
            $imageName = uniqid() . "." . $image->getClientOriginalExtension();
            $image->move(public_path("uploads"), $imageName);
            $data["image"] =  '/uploads/' . $imageName;
            unlink(public_path($slider->image));
        }

        if ($request->hasFile("bg_image")) {
            $bgImage = $request->file("bg_image");
            $bgImageName = uniqid() . "." . $bgImage->getClientOriginalExtension();
            $bgImage->move(public_path("uploads"), $bgImageName);
            $data["bg_image"] =  '/uploads/' . $bgImageName;
            unlink(public_path($slider->bg_image));
        }

        $update = $slider->update($data);

        if ($update) {
            return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully');
        } else {
            return redirect()->route('admin.slider.index')->with('error', 'Slider update failed');
        }

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
