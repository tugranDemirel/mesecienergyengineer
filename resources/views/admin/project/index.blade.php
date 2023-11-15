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

                <p class="mg-b-20 mg-sm-b-40">Projelerinizi aşağıdan görebilir ve yönetebilirsiniz</p>

            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.projelerimiz.create') }}" class="btn btn-primary">Yeni Proje Ekle</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Proje Resmi</th>
                    <th>Proje Adı</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($projects->count() > 0)
                @foreach($projects as $project)
                <tr>
                    <th scope="row">{{ $project->id }}</th>
                    <td>
                        <img src="{{ asset($project->image) }}" alt="{{ $project->name }}" width="100">
                    </td>
                    <td>{{ $project->title }}</td>
                    <td>
                        <a href="{{ route('admin.projelerimiz.edit', ['project' => $project]) }}" class="btn btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz proje  eklenmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
@section('js')
@endsection
