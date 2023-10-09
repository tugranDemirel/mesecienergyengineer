@extends('admin.layouts.app')
@section('title')
    Anasayfa
@endsection

@section('css')
@endsection
@section('content')


    <x-admin.pageheader name="ANASAYFA" />
    <x-admin.alert />
    <div class="section-wrapper">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('admin.slider.index') }}" class="btn btn-pricing">Sliderler</a>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
