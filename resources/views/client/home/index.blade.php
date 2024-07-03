@extends('client.utils.layout')
@section('content')
<style>
    #hero {
        margin-top: 0;
        background-color: #e7f3ff;
        height: 100vh;
        background-image: url("storage/gallery/bg_home.jpeg");
        /* background-repeat: no-repeat; */
        /* background-attachment: fixed; */
        background-position: center;
        background-size: 100%;
    }
</style>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" >
    <div class="container text-end">
      <h1 class="text-primary  text-end">Welcome To HappyCare</h1>
      <h2 class=" text-end">Website of Health Tourism Facilities Provider in Central Java Region</h2>
      <form action="{{ url('faskes/search') }}" class=" text-end" method="POST">
        @csrf
        <div class="form-body">
            <div class="row">
                <div class="col-12  text-end">
                    <input type="text" class="form-control  text-end" name="keyword" placeholder="Search Hospital or Services">
                </div>
                <div class="col-md-12 form-group">
                    <button type="submit" id="button-search" class="btn btn-get-started scrollto">Search Now</button>
                </div>
            </div>
        </div>
      </form>
    </div>
  </section><!-- End Hero -->

<!-- ======= Why Us Section ======= -->
<section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
            <h3>Why Choose HappyCare??</h3>
            <p>
            Happy Care is an online platform dedicated to facilitating health tourism in the Central Java region.
            We provide various features designed to assist patients in finding medical care that suits their needs.
            </p>
            <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
            </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h2>250+</h2>
                    <p>Specialzation & Subspetialties</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h2>300+</h2>
                    <p>Test Laboratory</p>
                </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h2>150+</h2>
                    <p>Examination Radiology</p>
                </div>
                </div>
            </div>
            </div><!-- End .content-->
        </div>
        </div>

    </div>
</section><!-- End Why Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
<div class="container">

    <div class="row">

    <div class="col-lg-4 col-md-6">
        <div class="count-box">
        <i class="fas fa-user-md"></i>
        <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
        <p>Medical Personel</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
        <i class="far fa-hospital"></i>
        <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter"></span>
        <p>Central Java Hospital</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
        <i class="fas fa-flask"></i>
        <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1" class="purecounter"></span>
        <p>Tourist Visit</p>
        </div>
    </div>



    </div>

</div>
</section><!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
<div class="container">

    <div class="section-title">
    <h2>Hospital Recommendations</h2>
    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-heartbeat"></i></div>
        <h4><a href="">Hospital 1</a></h4>
        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-pills"></i></div>
        <h4><a href="">Hospital 1</a></h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-hospital-user"></i></div>
        <h4><a href="">Hospital 1 </a></h4>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-dna"></i></div>
        <h4><a href="">Hospital 1</a></h4>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-wheelchair"></i></div>
        <h4><a href="">Hospital 1</a></h4>
        <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="icon"><i class="fas fa-notes-medical"></i></div>
        <h4><a href="">Hospital 1</a></h4>
        <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
        </div>
    </div>

    </div>

</div>
</section><!-- End Services Section -->  

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
<div class="container">

    <div class="section-title">
        <h2>Testimonials</h2>
    </div>

    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper-wrapper">

        <div class="swiper-slide">
        <div class="testimonial-wrap">
            <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Arya Kamandanu</h3>
            <h4>Ceo &amp; Southern Sea Blue Dragon</h4>
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                This website really helps me in finding information related to health.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            </div>
        </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
        <div class="testimonial-wrap">
            <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Mr Let Me Think</h3>
            <h4>Blue Band</h4>
            <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Let me think, let me think, let me think. <i class="fa-regular fa-face-thinking"></i>
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            </div>
        </div>
        </div><!-- End testimonial item --> 

    </div>
    <div class="swiper-pagination"></div>
    </div>

</div>
</section><!-- End Testimonials Section --> 
@endsection
