<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $clients = Client::all();
        return view('front.contact', compact('clients'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'number' => 'required',
            'message' => 'required|min:10',
        ]);

        $create = Contact::create($data);
        if ($create) {
            return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi.');
        } else {
            return redirect()->back()->with('error', 'Mesajınız gönderilirken bir hata oluştu.');
        }
    }
}
