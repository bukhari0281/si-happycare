@extends('client.utils.layout')
@section('content')

<style>
    #jumbotron {
        margin-top: 0;
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
        <h4>Description</h4>
        <p>{{ $data->description }}</p>
        <h4>Facility Category</h4>
        <p>{{ $data->faskesKategori->name }}</p>
        <h4>Services Provided</h4>
        <ul>
            @foreach($data->Layanan as $service)
                <li>{{ $service->name }}</li>
            @endforeach
        </ul>
        <h4>Available Languages</h4>
        <ul>
            @foreach($data->bahasa as $b)
                <li>{{ $b->name }}</li>
            @endforeach
        </ul>
        <h4>Contact</h4>
        <ul>
            @if ($data->kontak)
                <li> {{ $data->kontak->email }} </li>
                <li> {{ $data->kontak->city->name }} </li>
                <li> {{ $data->kontak->address }} </li>
                <li> {{ $data->kontak->phone }} </li>
            @endif
        </ul>
       
    </div>
    
</div>
<section id="services" class="services">
<div class="container">
<div class="section-title">
    <h2>Tour Recommendations</h2>
    <p>Your trusted source for unforgettable travel recommendations in your favorite destinations. We understand how precious your vacation time is and we are ready to help you plan the perfect travel experience.</p>
    </div>
    <div class="row">
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-5">
    <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/6697d4fab4eac.jpg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Candi Borobudur Magelang</a></h4>
        <p>Borobudur was built in the Mandala style that reflects the universe in Buddhist belief. The structure is box-shaped with four entrances and a circular center point. 
        When viewed from the outside to the inside, it is divided into two parts, namely the realm of the world which is divided into three zones on the outside, and the realm of Nirvana in the center.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-5">
    <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/6697daf994c74.jpg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Karimun Jawa <br>Jepara</a></h4>
        <p>Karimun Jawa is an archipelago located in the northern Java Sea, about 80 kilometers from the north coast of Central Java, Indonesia. The archipelago consists of beautiful small islands with white sandy beaches, clear sea water, and underwater life rich in marine life diversity.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-5">
    <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/Dieng.jpeg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Dieng <br>Wonosobo</a></h4>
        <p>Dieng offers stunning natural scenery, including green hills, small lakes, and breathtaking panoramas. The cool weather and fresh air make it a great place for long walks or outdoor trekking.</p>
        </div>
    </div>

</div>
</section>

@endsection
