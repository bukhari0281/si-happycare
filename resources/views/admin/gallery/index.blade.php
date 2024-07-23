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
	<div class="card-header">
		<a class="btn btn-outline-primary block float-end" href="{{ url('admin/galeri/create') }}">
			Tambah Data
		</a>
	</div>
</div>
{{-- @foreach ($faskes as $healthDestination)
    @if ($healthDestination->galeri->count() > 0)
        <div class="card">
            <div class="card-body">
                <h3>{{ $healthDestination->name ?? 'Tidak ada kategori' }}</h3>

                <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                    @foreach ($healthDestination->galeri as $galleryItem)
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <img class="w-100 active mb-2" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" alt="Gallery Image">
                            <button data-bs-toggle="modal" data-bs-target="#deleteGaleriModal{{ $galleryItem->id }}" class="btn btn-danger block btn-sm">Hapus</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endforeach
@foreach ($tourist as $touristDestination)
    @if ($touristDestination->galeri->count() > 0)
        <div class="card">
            <div class="card-body">
                <h3>{{ $touristDestination->name ?? 'Tidak ada kategori' }}</h3>

                <div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
                    @foreach ($touristDestination->galeri as $galleryItem)
                        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
                            <img class="w-100 active mb-2" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" alt="Gallery Image">
                            <button data-bs-toggle="modal" data-bs-target="#deleteGaleriModal{{ $galleryItem->id }}" class="btn btn-danger block btn-sm">Hapus</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
@endforeach --}}

@foreach ($items as $item)
    @if ($item->healthDestination)
        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
            <img src="{{ asset('storage/gallery/' . $item->url) }}" alt="{{ $item->healthDestination->nama }}">
            <button data-bs-toggle="modal" data-bs-target="#deleteGaleriModal{{ $item->id }}" class="btn btn-danger block btn-sm">Hapus</button>
            <button onclick="confirmDelete({{ $item->id }})" class="btn btn-danger block btn-sm">Hapus</button>

        </div>
    @elseif ($item->touristDestination)
        <div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
            <img src="{{ asset('storage/gallery/' . $item->url) }}" alt="{{ $item->touristDestination->nama }}">
            <button data-bs-toggle="modal" data-bs-target="#deleteGaleriModal{{ $item->id }}" class="btn btn-danger block btn-sm">Hapus</button>
        </div>
    @endif
@endforeach
@include('admin.gallery.delete')
@endsection
