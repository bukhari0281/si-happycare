@extends('admin.utils.layout')
@section('content')


<div class="card">
	<div class="card-header">
		<h4 class="card-title">Galeri</h4>
	</div>
	<div class="card-body">
		<div class="row gallery" data-bs-toggle="modal" data-bs-target="#galleryModal">
			@foreach ($items as $galleryItem)
				<div class="col-6 col-sm-6 col-lg-3 mt-2 mt-md-0 mb-md-0 mb-2">
					<img class="w-100 active" src="{{ asset('storage/gallery/'.$galleryItem->url) }}" alt="Gallery Image">
					<p>{{ $galleryItem->healthDestination->name }}</p>
				</div>
			@endforeach
		</div>
	</div>
</div>
@endsection
