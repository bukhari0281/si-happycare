@extends('client.utils.layout')
@section('content')

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

    h4 {
        font-weight: 700;
    }

</style>
<section id="jumbotron" class="container-fluid mb-5">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="margin-bottom: 40px;">
            <div class="col-12">
            <div class="blog-img  pb-0 mb-5">
                <a href="{{ url('faskes/'.$data->name) }}">
                    @if($data->galeri->isNotEmpty())
                    <div class="blog-img-inner">
                        <img class="img-fluid w-100 rounded" src="{{ asset('storage/gallery/'.$data->galeri->first()->url) }}" alt="Image">
                        {{-- <img class="img-fluid w-100 rounded-top" src="{{ $data->url }}" alt="Image"> --}}
                    </div>
                    @else
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{ asset('storage/gallery/happycare.png') }}" alt="Image">
                        </div>
                    @endif
                </a>
            </div>
                <h1 class="mb-4 text-4xl">{{ $data->name }}</h1> 
            </div>
        </div>
    </div>
</section>

<div class="container mb-5">
    <div class="card-body">
        <h4>Deskripsi</h4>
        <p>{{ $data->description }}</p>
        <h4>Wisata Faskes</h4>
        <p>{{ $data->wisataKategori->name }}</p>
        <!-- <h4>Layanan yang disediakan</h4>  -->
        <h4>Bahasa yang tersedia</h4>
        <ul>
            @foreach($data->bahasa as $b)
                <li>{{ $b->name }}</li>
            @endforeach
        </ul>
        <h4>Kontak</h4>
        <ul>
            <li> {{ $data->kontak->email }} </li>
            <li> {{ $data->kontak->city->name }} </li>
            <li> {{ $data->kontak->address }} </li>
            <li> {{ $data->kontak->phone }} </li>
        </ul>
    </div>
</div>

@endsection
