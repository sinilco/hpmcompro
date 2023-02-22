



@section('breadcrumbs')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('theme/img/k3g.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Contact</h2>
    <!-- <ol>
      <li><a href="{{url('/')}}">Home</a></li>
      <li>Contact</li>
    </ol> -->

  </div>
</div>
<!-- End Breadcrumbs -->
@endsection

@section('contact')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-map"></i>
          <h3>Our Address</h3>
          <p>Ngoro Industri Persada Blok K-2,Ngoro - Mojokerto,</p>
          <p>Jawa Timur, Indonesia, 61385</p>
        </div>
      </div>
      <!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-envelope"></i>
          <h3>Email Us</h3>
          <p>info@hpmindonesia.co.id</p>
        </div>
      </div>
      <!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-telephone"></i>
          <h3>Call Us</h3>
          <p>+62321-6819277<br>
          +62321-6819278</p>

        </div>
      </div>
      <!-- End Info Item -->

    </div>

    <div class="row gy-4 mt-1">

      <div class="col-lg-6 ">
        <iframe src="https://maps.google.com/maps?q=pt%20hp%20metals%20Ngoro%20Industri%20Persada%20Blok%20L-2,Ngoro%20-%20Mojokerto,%20%20Jawa%20Timur,%20Indonesia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen=""></iframe>
      </div>
      <!-- End Google Maps -->

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row gy-4">
            <div class="col-lg-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-lg-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
      </div>
      <!-- End Contact Form -->

    </div>

  </div>
</section>
<!-- End Contact Section -->

<!-- End #main -->


@endsection
