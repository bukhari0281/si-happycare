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
<section id="jumbotron" class="container-fluid mb-2">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 400px;">
            <div class="col-12">
                <h1 class="mb-4 text-4xl">contact <span class="text-primary">Happycare</span></h1>
                <p class="mb-0">
                Get closer to <span class="text-primary">us</span>
                </p>
            </div>
        </div>
    </div>
</section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        {{-- <div class="container">
          <div class="section-title">
            <h2>Contact</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae!</p>
          </div>
        </div> --}}

        <div class="container">
          <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6522.935805160249!2d110.33106593980902!3d-7.768444802178591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a587709f8feb9%3A0x9092c640c6f901ac!2sUniversitas%20&#39;Aisyiyah%20Yogyakarta!5e0!3m2!1sid!2sid!4v1719215906107!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-4">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jl. Siliwangi No.63, Area Sawah, Nogotirto, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55292</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>admin@happycare.com</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+6282211592439</p>
                </div>

              </div>

            </div>

            <div class="col-lg-8 mt-5 mt-lg-0">

              <!-- <form action="form/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form> -->

            </div>

          </div>

        </div>
      </section><!-- End Contact Section -->
@endsection
