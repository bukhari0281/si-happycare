@extends('admin.utils.layout')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $items->name }}</h3>
                <p class="text-subtitle text-muted">Destinasi</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/health-destination') }}">Tourist Destination</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $items->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <h4>Galeri</h4>
                    </div>
                    <div class="card-body">
                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            @foreach ($items->galeri as $galleryItem)
                            <div class="col-6 col-sm-6 col-lg-3 m-2">
                                <a href="#">
                                    <img class="w-100 active" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" data-bs-target="#Gallerycarousel" data-bs-slide-to="0">
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                <div class="card-body">
                    <h4>Deskripsi</h4>
                    <p>{{ $items->description }}</p>
                    <h4>Jenis Wisata</h4>
                    <p>{{ $items->wisataKategori->name }}</p>
                    <h4>Fasilitas yang disediakan</h4>
                    <h4>Bahasa yang tersedia</h4>
                    <ul>
                        @foreach($items->bahasa as $b)
                            <li>{{ $b->name }}</li>
                        @endforeach
                    </ul>
                    <h4>Kontak</h4>
                    <ul>
                        @if ($items->kontak)

                                <li> {{ $items->kontak->email }} </li>
                                <li> {{ $items->kontak->city->name }} </li>
                                <li> {{ $items->kontak->address }} </li>
                                <li> {{ $items->kontak->phone }} </li>
                        @endif
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
