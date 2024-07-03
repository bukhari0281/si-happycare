@extends('admin.utils.layout')
@section('content')

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Galeri</h3>
                <!-- <p class="text-subtitle text-muted">Tempat yang didaftarkan</p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/health-destination') }}">Health Destination</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tempat</li>
                    </ol> -->
                </nav>
            </div>
        </div>
    </div>
<div class="card">
	<div class="card-header">
		<a class="btn btn-outline-primary block float-end" href="{{ url('admin/galeri/create') }}">
			Tambah Data
		</a>
	</div>
    <div class="card-body">
        <h3>Health Destination</h3>
        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
            @foreach ($items->where('health_destination_id', '!=', null) as $galleryItem) 
                <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                    <img class="w-100 active" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" alt="Gallery Image">
                    <p>{{ $galleryItem->healthDestination->name ?? 'Tidak ada kategori' }}</p> 
                </div>
            @endforeach
        </div>
    </div>

    <div class="card-body">
        <h3>Tourist Destination</h3>
        <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
            @foreach ($items->where('tourist_destination_id', '!=', null) as $galleryItem)
                <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                    <img class="w-100 active" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" alt="Gallery Image">
                    <p>{{ $galleryItem->touristDestination->name ?? 'Tidak ada kategori' }}</p>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
