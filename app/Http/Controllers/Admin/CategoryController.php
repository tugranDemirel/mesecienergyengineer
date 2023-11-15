<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create-edit');
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
           'name' => 'required|string|max:255',
            'image' => 'nullable'
        ]);
        $data['slug'] = Str::slug($data['name']);
        if ($request->hasFile('image')) { // Formdan gelen image adlı dosya var mı diye kontrol ediyoruz.
            $imageName = time() . '.' . $request->image->extension(); // Dosyanın adını düzenliyoruz.
            $request->image->move(public_path('uploads'), $imageName); // Dosyayı public/uploads dizinine kaydediyoruz.
            $data['image'] = '/uploads/' . $imageName; // Dosyanın adını $data değişkenine atıyoruz.
        }
        $create = Category::create($data); // Veritabanına kayıt ediyoruz.

        if ($create) { // Eğer kayıt başarılı ise
            return redirect()->back()->with('success', 'Kategori başarıyla eklendi.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
        }
        return redirect()->back()->with('error', 'Kategori eklenirken bir hata oluştu.'); // admin.markalarimiz.index route'una yönlendiriyoruz.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.create-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
           'name' => 'required|string|max:255',
            'image' => 'nullable'
        ]);

        $data['slug'] = Str::slug($data['name']);
        if ($request->hasFile('image')) { // Formdan gelen image adlı dosya var mı diye kontrol ediyoruz.
            $imageName = time() . '.' . $request->image->extension(); // Dosyanın adını düzenliyoruz.
            $request->image->move(public_path('uploads'), $imageName); // Dosyayı public/uploads dizinine kaydediyoruz.
            $data['image'] = '/uploads/' . $imageName; // Dosyanın adını $data değişkenine atıyoruz.
            unlink(public_path($category->image)); // Eski resmi siliyoruz.
        }

        $update = $category->update($data); // Veritabanına kayıt ediyoruz.

        if ($update) {
            return redirect()->back()->with('success', 'Kategori başarıyla güncellendi.');
        }
        return redirect()->back()->with('error', 'Kategori güncellenirken bir hata oluştu.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $delete = $category->delete();
        if ($delete) {
            unlink(public_path($category->image));
            return redirect()->back()->with('success', 'Kategori başarıyla silindi.');
        }
        return redirect()->back()->with('error', 'Kategori silinirken bir hata oluştu.');
    }
}
