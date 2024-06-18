
@extends('client.utils.layout')
@section('content')

<!-- ======= Hero Section ======= -->
<style>
    #jumbotron {
        margin-top: 100px;
        background-color: #e7f3ff
    }

    #jumbotron h1 {
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        text-transform: uppercase;
        color: #2c4964;
        }

</style>
<section id="jumbotron" class="container-fluid mb-5">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 400px;">
            <div class="col-12">
                <h1 class="mb-4 text-4xl">Fasilitas Kesehatan <span class="text-primary">Happycare</span></h1>
                <p class="mb-0">
                    Indonesia memiliki banyak <span class="text-primary">fasilitas kesehatan</span>
                    yang dapat digunakan sebagai pilihan utama anda.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Start -->
<div id="faskes" class="container-fluid blog pb-5">
    <div class="container pb-5">
        {{-- <div class="mx-auto text-center mb-5" style="max-width: 900px; height: 30vh">
            <h5 class="section-title px-3">FasKes</h5>
            <h1 class="mb-4">Fasilitas Kesehatan</h1>
            <p class="mb-0">
                Indonesia memiliki banyak <span class="text-primary">fasilitas kesehatan</span>
                yang dapat digunakan sebagai pilihan utama anda.
            </p>
        </div> --}}
        <div class="row g-4 justify-content-center mb-5">
            @foreach ($latest_faskes as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog-item p-0">
                    <div class="blog-img  pb-0">
                        <a href="{{ url('faskes/'.$item->name) }}">
                            @if($item->galeri->isNotEmpty())
                            <div class="blog-img-inner">
                                <img class="img-fluid w-100 rounded-top" src="{{ asset('storage/gallery/'.$item->galeri->first()->url) }}" alt="Image">
                                {{-- <img class="img-fluid w-100 rounded-top" src="{{ $item->url }}" alt="Image"> --}}
                            </div>
                            @else
                                <div class="blog-img-inner">
                                    <img class="img-fluid w-100 rounded-top" src="{{ asset('storage/gallery/happycare.png') }}" alt="Image">
                                </div>
                            @endif
                        </a>
                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <div class="d-flex flex-column">
                            <a href="{{ url('faskes/'.$item->name) }}" class="h4 mb-3">{{ $item->name }}</a>
                            <p> <i class="fa fa-calendar-alt text-primary me-2 mb-0"></i>{{ $item->kontak->address }} </p>
                            <p> <i class="fa fa-calendar-alt text-primary me-2 mb-2"></i>{{ $item->kontak->phone }} </p>
                        </div>
                        <a href="{{ url('faskes/'.$item->name) }}" class="btn btn-primary rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        {{ $latest_faskes->links() }}

    </div>
</div>
<!-- Blog End -->
@endsection
