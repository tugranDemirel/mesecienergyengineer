<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteSetting = SiteSetting::first();
        return view("admin.site-setting.create-edit", compact("siteSetting"));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token");
        $data["meta_title"] = $request->title;
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $logoName = uniqid() . "." . $logo->getClientOriginalExtension();
            $logo->move(public_path("uploads"), $logoName);
            $data["logo"] =  '/uploads/' . $logoName;
        }
        if ($request->hasFile("favicon")) {
            $favicon = $request->file("favicon");
            $faviconName = uniqid() . "." . $favicon->getClientOriginalExtension();
            $favicon->move(public_path("uploads"), $faviconName);
            $data["favicon"] =  '/uploads/' . $faviconName;
        }
        $create = SiteSetting::create($data);
        if ($create) {
            return redirect()->back()->with("success", "Site ayarları başarıyla eklendi.");
        } else {
            return redirect()->back()->with("error", "Site ayarları eklenirken bir hata oluştu.");
        }
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $siteSetting)
    {
        $data = $request->except("_token", "_method");
        $siteSetting = SiteSetting::first();
        $data["meta_title"] = $request->title;
        if ($request->hasFile("logo")) {
            $logo = $request->file("logo");
            $logoName = uniqid() . "." . $logo->getClientOriginalExtension();
            $logo->move(public_path("uploads"), $logoName);
            $data["logo"] = $logoName;
            unlink(public_path("uploads/" . $siteSetting->logo));
        }
        if ($request->hasFile("favicon")) {
            $favicon = $request->file("favicon");
            $faviconName = uniqid() . "." . $favicon->getClientOriginalExtension();
            $favicon->move(public_path("uploads"), $faviconName);
            $data["favicon"] = $faviconName;
            unlink(public_path("uploads/" . $siteSetting->favicon));
        }
        $update = $siteSetting->update($data);
        if ($update) {
            return redirect()->back()->with("success", "Site ayarları başarıyla güncellendi.");
        } else {
            return redirect()->back()->with("error", "Site ayarları güncellenirken bir hata oluştu.");
        }
    }

}
