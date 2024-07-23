@extends('client.utils.layout')
@section('content')

 <!-- ======= Hero Section ======= -->
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

</style>
<section id="jumbotron" class="container-fluid">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 400px;">
            <div class="col-12">
                <h1 class="mb-4 text-4xl">About <span class="text-primary">Happycare</span></h1>
                <p class="mb-0">
                    Indonesia has many <span class="text-primary">healthcare facilities</span>
                    that can be used as your primary choice.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- About Start -->
<div class="container-fluid about">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-5 col-lg-6 text-center">
                <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a> -->
                <img src="storage/gallery/logo.png" width="500px" alt="">
            </div>

            <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                <h3>Happycare Logo Philosophy</h3>
                <p>Happy Care is an online platform dedicated to facilitating health tourism in the Central Java region. We provide various features designed to assist patients in finding medical care that suits their needs.</p>

                <div class="icon-box">
                <div class="icon sm"><i class="bx bx-fingerprint"></i></div>
                <h4 class="title"><a href="">Home </a></h4>
                <p class="description">as a Symbol of Warmth and Security: Home is a place of refuge from all unpleasant conditions. At home, we feel safe, comfortable and surrounded by our loved ones. This warmth and security is essential for mental and physical health. When we feel stressed or depressed, home can be a place to relax and recover. </p>
                </div>

                <div class="icon-box">
                <div class="icon"><i class="bx bx-gift"></i></div>
                <h4 class="title"><a href="">Heart </a></h4>
                <p class="description">as a Symbol of Love and Care: The heart is a symbol of love and compassion. The affection of those around us can provide emotional support that is vital for health. When we feel loved and appreciated, we find it easier to face challenges and maintain mental and physical health.</p>
                </div>

                <div class="icon-box">
                <div class="icon"><i class="bx bx-atom"></i></div>
                <h4 class="title"><a href="">Hands</a></h4>
                <p class="description">as a Symbol of Action and Support The hand holding the heart shows action to provide affection and support. This means that we need to actively show affection to those around us, both physically and emotionally. Strong social support can help us to cope with stress, improve mental health, and speed up recovery from illness.</p>
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
        <h2>Kelompok 7 <strong>Let Me Think</strong></h2>
        <p>behind the success of <a class="text-primary text-bold" href="{{ url('/') }}">Happycare</a></p>
        </div>

        <div class="row">

        <div class="col-lg-6">
            <div class="member d-flex align-items-start">
            <div class="pic"><img src="{{ asset('storage/gallery/icon_user.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Qeis Irsal Zi'ul Haq/2211501019</h4>
                <span>Project Manager</span>
                <p>Lead and manage the website project from start to finish and monitor the progress of the project and ensure it goes according to plan.</p>
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
            <div class="pic"><img src="{{ asset('storage/gallery/user woman.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Umi Zakiyah/2211501042</h4>
                <span>Needs Analysis</span>
                <p>Understand the client's needs and goals regarding the website and work closely with other teams to ensure that the website meets all the client's needs.
                </p>
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
            <div class="pic"><img src="{{ asset('storage/gallery/icon_user.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Al-Bukhori Bin Riedho/2011501034</h4>
                <span>Web Developer</span>
                <p>Build the website structure and develop the various functionalities required and integrate content and media into the website.</p>
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
            <div class="pic"><img src="{{ asset('storage/gallery/icon_user.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Arya Apriansyah Lasulika/2211501048</h4>
                <span>Web Developer</span>
                <p>Build the website structure and develop the various functionalities required and integrate content and media into the website.</p>
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
            <div class="pic"><img src="{{ asset('storage/gallery/icon_user.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Virgiawan Aqil Ridwan/2211501018</h4>
                <span>UI/UX Design</span>
                <p>Designing the look and feel of a website that is attractive and easy to use as well as creating wireframes, mockups, and website prototypes.</p>
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
            <div class="pic"><img src="{{ asset('storage/gallery/icon_user.png') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
                <h4>Muhammad Farhan Husen/2211501017</h4>
                <span>Quality Assurance</span>
                <p>Conduct thorough testing of the website to ensure its quality and report bugs, defects, and other problems if they occur.
                </p>
                <div class="social">
                <a href="https://wa.me/6282211592439" target="blank"><i class="ri-twitter-fill"></i></a>
                <a href="https://wa.me/6282211592439" target="blank"><i class="ri-facebook-fill"></i></a>
                <a href="https://wa.me/6282211592439" target="blank"><i class="ri-instagram-fill"></i></a>
                <a href="https://wa.me/6282211592439" target="blank"> <i class="ri-linkedin-box-fill"></i> </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section><!-- End Doctors Section -->
@endsection
