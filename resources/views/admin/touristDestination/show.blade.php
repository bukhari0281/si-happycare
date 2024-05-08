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
                        <li class="breadcrumb-item"><a href="{{ url('health-destination') }}">Tourist Destination</a></li>
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
                        <div class="carousel-item active">
                            <img src="./assets/compiled/jpg/banana.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/compiled/jpg/bg-mountain.jpg" class="d-block w-100" alt="...">
                        </div>
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
                    <p>{{ $items->name }}</p>
                </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
