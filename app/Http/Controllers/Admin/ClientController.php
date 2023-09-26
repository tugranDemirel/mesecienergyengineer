<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view("admin.client.index", compact("clients"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create-edit');
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
            'name' => 'required',
            'url' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) { // Formdan gelen image adlı dosya var mı diye kontrol ediyoruz.
            $imageName = time() . '.' . $request->image->extension(); // Dosyanın adını düzenliyoruz.
            $request->image->move(public_path('uploads'), $imageName); // Dosyayı public/uploads dizinine kaydediyoruz.
            $data['image'] = '/uploads/' . $imageName; // Dosyanın adını $data değişkenine atıyoruz.
        }
        $create = Client::create($data); // Veritabanına kayıt ediyoruz.
        if ($create) { // Eğer kayıt başarılı ise
            return redirect()->back()->with('success', 'Marka başarıyla eklendi.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
        }
        return redirect()->back()->with('error', 'Marka eklenirken bir hata oluştu.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.create-edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->validate([
            'name' => 'required',
            'url' => 'required',
            'image' => 'nullable',
        ]);

        if ($request->hasFile('image')) { // Formdan gelen image adlı dosya var mı diye kontrol ediyoruz.
            $imageName = time() . '.' . $request->image->extension(); // Dosyanın adını düzenliyoruz.
            $request->image->move(public_path('uploads'), $imageName); // Dosyayı public/uploads dizinine kaydediyoruz.
            $data['image'] = '/uploads/' . $imageName; // Dosyanın adını $data değişkenine atıyoruz.
            unlink(public_path($client->image)); // Eski resmi siliyoruz.
        }
        $update = $client->update($data); // Veritabanına kayıt ediyoruz.
        if ($update) { // Eğer kayıt başarılı ise
            return redirect()->back()->with('success', 'Marka başarıyla güncellendi.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
        }
        return redirect()->back()->with('error', 'Marka güncellenirken bir hata oluştu.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
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
