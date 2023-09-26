@extends('admin.layouts.app')
@section('title')
    Site Ayarları
@endsection

@section('css')
@endsection
@section('content')
    <div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Anasayfa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Site Ayarları</li>
        </ol>
        <h6 class="slim-pagetitle">Site Ayarları</h6>
    </div>
    @include('components.admin.alert')
    <div class="section-wrapper">
        <p class="mg-b-20 mg-sm-b-40">Site ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($siteSetting) ? route('admin.site-ayarlari.update', ['site_ayarlari' => $siteSetting]) : route('admin.site-ayarlari.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($siteSetting)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Site Adı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ isset($siteSetting) ? $siteSetting->title : '' }}" placeholder="Site adını giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ isset($siteSetting) ? $siteSetting->email : '' }}" placeholder="Site email adresini giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Telefon Numarası: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ isset($siteSetting) ? $siteSetting->phone : '' }}" placeholder="Site telefon numarasını giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Adres: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('address') is-invalid @enderror" type="text" name="address" value="{{ isset($siteSetting) ? $siteSetting->address : '' }}" placeholder="Adres giriniz.">
                        </div>
                    </div><!-- col-4 -->


                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Site Logo: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file" name="logo" >
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Site Favicon: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('favicon') is-invalid @enderror" type="file" name="favicon" >
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Twitter URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('twitter') is-invalid @enderror" type="text" name="twitter" value="{{ isset($siteSetting) ? $siteSetting->twitter : '' }}" placeholder="Twitter URL giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Instagram URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('instagram') is-invalid @enderror" type="email" name="instagram" value="{{ isset($siteSetting) ? $siteSetting->instagram : '' }}" placeholder="Instagram URL giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Facebook URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('facebook') is-invalid @enderror" type="text" name="facebook" value="{{ isset($siteSetting) ? $siteSetting->facebook : '' }}" placeholder="Facebook URL giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-control-label">Linkedin URL: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('linkedin') is-invalid @enderror" type="text" name="linkedin" value="{{ isset($siteSetting) ? $siteSetting->linkedin : '' }}" placeholder="Linkedin URL giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Site Açıklaması: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('meta_description') is-invalid @enderror" type="text" name="meta_description" value="{{ isset($siteSetting) ? $siteSetting->meta_description : '' }}" placeholder="Site açıklaması giriniz.">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Site Anahtar Kelimeler: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('meta_keywords') is-invalid @enderror" type="text" name="meta_keywords" value="{{ isset($siteSetting) ? $siteSetting->meta_keywords : '' }}" placeholder="Site anahtar kelimeleri giriniz.">
                        </div>
                    </div><!-- col-4 -->


                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($siteSetting) ? 'Güncelle' : 'Kaydet' }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div>
@endsection
@section('js')
@endsection
