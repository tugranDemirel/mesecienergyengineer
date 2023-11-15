@extends('admin.layouts.app')
@section('title')
Projelerimiz
@endsection

@section('css')
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
@endsection
@section('content')
    <x-admin.pageheader name="Proje Kategorisi" />
    <x-admin.alert />

    <div class="section-wrapper">
        <p class="mg-b-20 mg-sm-b-40">Proje ayarlarını aşağıdaki form alanlarından yönetebilirsiniz.</p>

        <div class="form-layout">
            <form action="{{  isset($project) ? route('admin.projelerimiz.update', ['project' => $project]) : route('admin.projelerimiz.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @isset($project)
                    @method('PUT')
                @endisset
                <div class="row mg-b-25">

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Proje Resmi: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Proje Ana Başlığı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ isset($project) ? $project->title : '' }}">
                        </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-control-label">Proje Alt Başlığı: <span class="tx-danger">*</span></label>
                            <input class="form-control @error('sub_title') is-invalid @enderror" type="text" name="sub_title" value="{{ isset($project) ? $project->sub_title : '' }}">
                        </div>
                    </div><!-- col-4 -->

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-control-label">Proje Detayları: <span class="tx-danger">*</span></label>
                            <textarea class="form-control ckeditor1 @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10">{{ isset($project) ? $project->description : '' }}</textarea>
                        </div>
                    </div><!-- col-4 -->



                    @isset($project)
                        <div class="col-lg-4">
                            <div class="form-group">
                                <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" width="100">
                            </div>
                        </div><!-- col-4 -->
                    @endisset
                </div><!-- row -->

                <div class="form-layout-footer">
                    <button class="btn btn-primary bd-0">{{  isset($project) ? 'Güncelle' : 'Kaydet' }}</button>
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
