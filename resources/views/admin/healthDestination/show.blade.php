@extends('admin.utils.layout')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>{{ $items->name }}</h3>
                <p class="text-subtitle text-muted">Tempat yang didaftarkan</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/health-destination') }}">Health Destination</a></li>
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
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($items->galeri as $galleryItem)
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <img src="{{ asset('storage/gallery/'.$galleryItem->url) }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                            @foreach ($items->galeri as $galleryItem)
                            <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
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
                    <h4>Kategori Faskes</h4>
                    <p>{{ $items->faskesKategori->name }}</p>
                    <h4>Layanan yang disediakan</h4>
                    <ul>
                        @foreach($items->Layanan as $service)
                            <li>{{ $service->name }}</li>
                        @endforeach
                    </ul>
                    <h4>Bahasa yang tersedia</h4>
                    <ul>
                        @foreach($items->bahasa as $b)
                            <li>{{ $b->name }}</li>
                        @endforeach
                    </ul>
                    <h4>Kontak</h4>
                    <ul>
                        <li> {{ $items->kontak->email }} </li>
                        <li> {{ $items->kontak->city->name }} </li>
                        <li> {{ $items->kontak->address }} </li>
                        <li> {{ $items->kontak->phone }} </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
