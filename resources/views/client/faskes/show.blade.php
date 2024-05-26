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

<div class="container">
    <div class="card-body">
        <h4>Deskripsi</h4>
        <p>{{ $data->description }}</p>
        <h4>Kategori Faskes</h4>
        <p>{{ $data->faskesKategori->name }}</p>
        <h4>Layanan yang disediakan</h4>
        <ul>
            @foreach($data->Layanan as $service)
                <li>{{ $service->name }}</li>
            @endforeach
        </ul>
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
