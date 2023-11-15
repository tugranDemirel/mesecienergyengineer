@extends('admin.layouts.app')
@section('title')
Slider
@endsection
@section('content')
    <x-admin.pageheader name="Slider" />
    <x-admin.alert />

    <div class="section-wrapper">
        <p class="mg-b-20 mg-sm-b-40">Slider ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($slider) ? route('admin.slider.update', ['slider' => $slider]) : route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($slider)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Ana Resim: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->
                    @isset($slider)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="{{ asset($slider->bg_image) }}" alt="{{ $slider->bg_image }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset
                    @isset($slider)
                        <div class="col-lg-6">
                            <div class="form-group">
                                <img src="{{ asset($slider->image) }}" alt="{{ $slider->image }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Slider Açıklama: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ isset($slider) ? $slider->description : ''}}">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Slider Video URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('url') is-invalid @enderror" type="text" name="url" value="{{ isset($slider) ? $slider->url : ''}}">
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($slider) ? 'Güncelle' : 'Kaydet' }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div>
@endsection
