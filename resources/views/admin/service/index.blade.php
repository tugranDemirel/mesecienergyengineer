@extends('admin.layouts.app')
@section('title')
    Hizmetlerimiz
@endsection

@section('css')
@endsection
@section('content')
    <x-admin.pageheader name="Hizmetlerimiz" />
    <x-admin.alert />
    <div class="section-wrapper">
        <div class="row">
            <div class="col-md-6">

                <p class="mg-b-20 mg-sm-b-40">Hizmetlerinizi aşağıdan görebilir ve yönetebilirsiniz</p>

            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.hizmetlerimiz.create') }}" class="btn btn-primary">Yeni Hizmet Ekle</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Hizmet Resmi</th>
                    <th>Hizmet Adı</th>
                    <th>Hizmet Kategorisi</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($services->count() > 0)
                @foreach($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>
                        <img src="{{ asset($service->image) }}" alt="{{ $service->name }}" width="100">
                    </td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->category->name }}</td>
                    <td>
                        @if($service->status == 2)
                            <span class="badge badge-success">Aktif</span>
                        @else
                            <span class="badge badge-danger">Pasif</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.hizmetlerimiz.edit', ['service' => $service]) }}" class="btn btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz Hizmet eklenmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
@section('js')
@endsection
