@extends('admin.layouts.app')
@section('title')
Hizmetlerimiz
@endsection

@section('css')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <x-admin.pageheader name="Hizmetlerimiz" />
    <x-admin.alert />

    <div class="section-wrapper">
        <p class="mg-b-20 mg-sm-b-40">Hizmet ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($service) ? route('admin.hizmetlerimiz.update', ['service' => $service]) : route('admin.hizmetlerimiz.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($service)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Kategori Adı: <span class="tx-danger">*</span></label>
                            <select name="category_id" id="" class="form-control @error('category_id') is-invalid @enderror">
                                @foreach($categories as $category) @endforeach
                                <option value="{{ $category->id }}"  {{ isset($service) && $service->status == $service->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Ana Başlığı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ isset($service) ? $service->title : '' }}">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Arka Plan Resmi: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('bg_image') is-invalid @enderror" type="file" name="bg_image">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Resmi 1: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Resmi 2: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image2') is-invalid @enderror" type="file" name="image2">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet İcon: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('icon') is-invalid @enderror" type="file" name="icon">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Kısa Açıklaması: <span class="tx-danger">*</span></label>
                            <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" id="" cols="30" rows="10">{{ isset($service) ? $service->short_description : '' }}</textarea>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Detayları: <span class="tx-danger">*</span></label>
                            <textarea class="form-control ckeditor1 @error('detail') is-invalid @enderror" name="detail" id="" cols="30" rows="10">{{ isset($service) ? $service->detail : '' }}</textarea>
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-control-label">Hizmet Durumu: <span class="tx-danger">*</span></label>
                            <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                                <option value="1" {{ isset($service) && $service->status == 1 ? 'selected' : '' }}>İnaktif</option>
                                <option value="2" {{ isset($service) && $service->status == 2 ? 'selected' : '' }}>Aktif</option>
                            </select>
                        </div>
                    </div><!-- col-4 -->

                    @isset($service)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($service) ? 'Güncelle' : 'Kaydet' }}</button>
                </div><!-- form-layout-footer -->
            </form>
        </div><!-- form-layout -->
    </div>
@endsection
@section('js')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        let ck = document.querySelectorAll('.ckeditor1');
        for (let i = 0; i < ck.length; i++) {
            CKEDITOR.replace(ck[i], {
                height: 500,
                filebrowserUploadUrl: "{{route('admin.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        }
    </script>
@endsection
