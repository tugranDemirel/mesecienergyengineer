@extends('admin.layouts.app')
@section('title')
    İletişim Mesajları
@endsection
@section('content')
    <x-admin.pageheader name="İLETİŞİM MESAJLARI" />
    <x-admin.alert />

    <div class="section-wrapper">

        <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Ad Soyad: <span class="tx-danger">*</span></label>
                            <input class="form-control " disabled value="{{ $contact->name }}">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                            <input class="form-control " disabled  value="{{ $contact->email }}">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Telefon Numarası: <span class="tx-danger">*</span></label>
                            <input class="form-control" disabled  value="{{ $contact->number}}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Mesaj: <span class="tx-danger">*</span></label>
                            <textarea name="" disabled id="" cols="30" rows="10" class="form-control">{{ $contact->message }}</textarea>
                        </div>
                    </div><!-- col-4 -->
                </div><!-- row -->

        </div><!-- form-layout -->
    </div>
@endsection
