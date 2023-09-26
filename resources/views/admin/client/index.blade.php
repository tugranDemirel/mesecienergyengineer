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
        <div class="row">
            <div class="col-md-6">

                <p class="mg-b-20 mg-sm-b-40">Çalışma Markalarınızı aşağıdan görebilir ve yönetebilirsiniz</p>

            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.markalarimiz.create') }}" class="btn btn-primary">Yeni Çalışma Markası Ekle</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Marka Resmi</th>
                    <th>Marka Adı</th>
                    <th>Marka Sitesi</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($clients->count() > 0)
                @foreach($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>
                        <img src="{{ asset($client->image) }}" alt="{{ $client->name }}" width="100">
                    </td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->url }}</td>
                    <td>
                        <a href="{{ route('admin.markalarimiz.edit', ['client' => $client]) }}" class="btn btn-primary">Düzenle</a>
                        <a href="#" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz çalışma markası eklenmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
@section('js')
@endsection
