@extends('admin.layouts.app')
@section('title')
    İletişim
@endsection
@section('content')
    <x-admin.pageheader name="İletişim" />
    <x-admin.alert />
    <div class="section-wrapper">
        <div class="table-responsive">
            <table class="table mg-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Ad Soyad</th>
                    <th>Email</th>
                    <th>Telefon Numarası</th>
                    <th>İşlem</th>
                </tr>
                </thead>
                <tbody>
                @if($contacts->count() > 0)
                @foreach($contacts as $contact)
                <tr>
                    <th scope="row">{{ $contact->id }}</th>
                    <td>
                        {{ $contact->name }}
                    </td>
                    <td>
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </td>
                    <td>
                        <a href="tel:{{ $contact->number }}">{{ $contact->number }}</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.iletisim.show', ['contact' => $contact]) }}" class="btn btn-primary">Gör</a>
                    </td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Henüz iletişime geçilmemiş</td>
                    </tr>
                @endif

                </tbody>
            </table>
        </div><!-- table-responsive -->
    </div>
@endsection
