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
        <p class="mg-b-20 mg-sm-b-40">Marka ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($category) ? route('admin.proje-kategorisi.update', ['category' => $category]) : route('admin.proje-kategorisi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($category)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Kategori Adı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ isset($category) ? $category->name : '' }}" placeholder="Marka adını giriniz.">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Kategori Resmi: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->

                    @isset($category)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($category) ? 'Güncelle' : 'Kaydet' }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div>
@endsection
@section('js')
@endsection
