@extends('admin.layouts.app')
@section('title')
    Proje Kategorisi
@endsection

@section('css')
@endsection
@section('content')
    <x-admin.pageheader name="Proje Kategorisi" />
    <x-admin.alert />
    <div class="section-wrapper">
        <div class="row">
            <div class="col-md-6">

                <p class="mg-b-20 mg-sm-b-40">Proje Kategorisini aşağıdan görebilir ve yönetebilirsiniz</p>

            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.proje-kategorisi.create') }}" class="btn btn-primary">Yeni Proje Kategorisi Ekle</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Kategori Resmi</th>
                    <th>Kategori Adı</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($categories->count() > 0)
                @foreach($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>
                        <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="100">
                    </td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.proje-kategorisi.edit', ['category' => $category]) }}" class="btn btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz proje kategorisi eklenmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
@section('js')
@endsection
