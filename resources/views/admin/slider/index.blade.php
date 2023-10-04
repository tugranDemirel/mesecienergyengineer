@extends('admin.layouts.app')
@section('title')
    Slider
@endsection
@section('content')
    <x-admin.pageheader name="Slider" />
    <x-admin.alert />
    <div class="section-wrapper">
        <div class="row">
            <div class="col-md-6">

                <p class="mg-b-20 mg-sm-b-40">Sliderlerinizi aşağıdan görebilir ve yönetebilirsiniz</p>

            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">Yeni Slider Ekle</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Arka Plan Resmi</th>
                    <th>Ana Resim</th>
                    <th>Video URL</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($sliders->count() > 0)
                @foreach($sliders as $slider)
                <tr>
                    <th scope="row">{{ $slider->id }}</th>
                    <td>
                        <img src="{{ asset($slider->bg_image) }}" alt="{{ $slider->bg_image }}" width="100">
                    </td>
                    <td>
                        <img src="{{ asset($slider->image) }}" alt="{{ $slider->image }}" width="100">
                    </td>
                    <td><a href="{{ $slider->url }}" target="_blank">{{ $slider->url }}</a></td>
                    <td>
                        <a href="{{ route('admin.slider.edit', ['slider' => $slider]) }}" class="btn btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz slider  eklenmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
