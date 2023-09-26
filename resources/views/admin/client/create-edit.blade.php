@extends('admin.layouts.app')
@section('title')
Çalışma Markalarımız
@endsection

@section('css')
@endsection
@section('content')
    <x-admin.pageheader name="Çalışma Markalarımız" />
    <x-admin.alert />

    <div class="section-wrapper">
        <p class="mg-b-20 mg-sm-b-40">Marka ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($client) ? route('admin.markalarimiz.update', ['client' => $client]) : route('admin.markalarimiz.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($client)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Marka Adı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ isset($client) ? $client->name : '' }}" placeholder="Marka adını giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Marka Resmi: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Marka URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('url') is-invalid @enderror" type="text" name="url" value="{{ isset($client) ? $client->url : '' }}" placeholder="Marka site url giriniz.">
                        </div>
                    </div><!-- col-4 -->
                    @isset($client)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <img src="{{ asset($client->image) }}" alt="{{ $client->name }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($client) ? 'Güncelle' : 'Kaydet' }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div>
@endsection
@section('js')
@endsection
