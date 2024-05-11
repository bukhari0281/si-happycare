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
<section id="jumbotron" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 400px;">
            <div class="col-12">
                <h1 class="mb-4 text-4xl">Tentang <span class="text-primary">Happycare</span></h1>
                <p class="mb-0">
                    Indonesia memiliki banyak <span class="text-primary">fasilitas kesehatan</span>
                    yang dapat digunakan sebagai pilihan utama anda.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Start -->
<div class="container-fluid about">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p>

                <div class="icon-box">
                <div class="icon sm"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias </p>
                </div>

                <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus que</p>
                </div>

                <div class="icon-box">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href="">Dine Pad</a></h4>
                <p class="description">Explicabo est voluptatum asperiores consequatur magnam.</p>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- ======= Doctors Section ======= -->
<section id="doctors" class="doctors mb-5">
    <div class="container">
        <div class="section-title">
        <h2>Kelompok 7</h2>
        <p>Dibalik suksesnya <a class="text-primary text-bold" href="{{ url('/') }}">Happycare</a></p>
        </div>

        <div class="row">

        <div class="col-lg-6">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ url('Medilab/assets/img/doctors/doctors-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Ketua Kelompok</h4>
                <span>Founder</span>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ url('Medilab/assets/img/doctors/doctors-2.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Anggota 1</h4>
                <span>Co Founder 1</span>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ url('Medilab/assets/img/doctors/doctors-3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Anggota 2</h4>
                <span>Co Founder 2</span>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
            </div>
            </div>
        </div>

        <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ url('Medilab/assets/img/doctors/doctors-4.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Anggota 3</h4>
                <span>Co Founder 3</span>
                <p>Lorem ipsum dolor sit amet.</p>
                <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section><!-- End Doctors Section -->
@endsection
