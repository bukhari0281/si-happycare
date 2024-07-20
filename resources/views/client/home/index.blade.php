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
                <a href="{{ url('about-us') }}" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
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
    <p>We understand how important it is to choose the right healthcare facility for you and your family. We are your trusted source for information and guidance on hospitals and healthcare services near you. Whether you're looking for ratings and reviews of nearby hospitals, or want to know which specialists are available for a particular health condition, we're here to help.</p>
    </div>

    <div class="row">
    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-5">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/RS JIH.jpg') }}" class="img-fluid" alt="Gambar Rumah Sakit 1"></div>
        <h4><a href="">JIH Hospital Yogyakarta</a></h4>
        <p>A major hospital in Yogyakarta, JIH Hospital opens Specialist Poly services at any time, from morning at 08.00 WIB until night at 21.00 WIB. Specialists in Pediatrics, Obsgyn (Obstetrics and Gynecology), Internal Medicine, Neurology, Cardiology, ENT, Dentistry are always ready to help from morning to night without a break.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 mb-5">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/RS Oen.jpg') }}" class="img-fluid" alt="Gambar Rumah Sakit 1"></div>
        <h4><a href="">Dr. Oen Hospital Surakarta</a></h4>
        <p>The hospital, located in Solo, Central Java, ranks third as the best hospital in Indonesia and globally ranks 4,069th.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0 mb-5">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/RSUP dr.Kariadi.png') }}" class="img-fluid" alt="Gambar Rumah Sakit 1"></div>
        <h4><a href="">RSUP dr.Kariadi Semarang</a></h4>
        <p>Established on September 9, 1923, Dr. Kariadi Central General Hospital (RSUP) has become the most comprehensive and referral hospital in Central Java. 
        As a class A hospital, RSUP Dr. Kariadi is also a place of education for doctors, specialists, and subspecialists from the UNDIP Faculty of Medicine and other educational institutions.</p>
        </div>
    </div>

    <div class="section-title">
    <h2>Tour Recommendations</h2>
    <p>Your trusted source for unforgettable travel recommendations in your favorite destinations. We understand how precious your vacation time is and we are ready to help you plan the perfect travel experience.</p>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/6697d4fab4eac.jpg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Candi Borobudur Magelang</a></h4>
        <p>Borobudur was built in the Mandala style that reflects the universe in Buddhist belief. The structure is box-shaped with four entrances and a circular center point. 
        When viewed from the outside to the inside, it is divided into two parts, namely the realm of the world which is divided into three zones on the outside, and the realm of Nirvana in the center.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/6697daf994c74.jpg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Karimun Jawa <br>Jepara</a></h4>
        <p>Karimun Jawa is an archipelago located in the northern Java Sea, about 80 kilometers from the north coast of Central Java, Indonesia. The archipelago consists of beautiful small islands with white sandy beaches, clear sea water, and underwater life rich in marine life diversity.</p>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
        <div class="icon-box">
        <div class="my-3"><img src="{{ asset('storage/gallery/Dieng.jpeg') }}" class="img-fluid" alt="Gambar Wisata 1"></div>
        <h4><a href="">Dieng <br>Wonosobo</a></h4>
        <p>Dieng offers stunning natural scenery, including green hills, small lakes, and breathtaking panoramas. The cool weather and fresh air make it a great place for long walks or outdoor trekking.</p>
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
