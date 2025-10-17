@extends('frontend.layout.app')
@section('content')

<main class="main">
  <!-- Page Header Start -->
  <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <h1 class="display-4 text-white mb-3 animated slideInDown">
        Contact Us
      </h1>
      <h4 class="text-white">"Get in touch with us for any inquiries or assistance"</h4>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4 mb-5">
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-map-marker-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Address</p>
              <h5 class="mb-0">Sitabardi, Nagpur, Maharashtra 440012</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-phone-alt text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Call Now</p>
              <h5 class="mb-0">0712-2523720</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100 bg-light d-flex align-items-center p-5">
            <div class="btn-lg-square bg-white flex-shrink-0">
              <i class="fa fa-envelope-open text-primary"></i>
            </div>
            <div class="ms-4">
              <p class="mb-2"><span class="text-primary me-2">#</span>Mail Now</p>
              <h5 class="mb-0">maharajbagzoo@gmail.com</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-5">
        <!-- Contact Form -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p><span class="text-primary me-2">#</span>Contact Us</p>
          <h1 class="display-5 mb-4">Have Any Query? Please Contact Us!</h1>

          <form id="contactForm"
                action="https://formsubmit.co/maharajbagzoo@gmail.com"
                method="POST">
            
            <!-- Hidden fields -->
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_subject" value="New Contact Message from Maharajbag Zoo Website">
            <input type="hidden" name="_template" value="table">

            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control bg-light border-0" id="name" name="name" placeholder="Your Name" required />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control bg-light border-0" id="email" name="email" placeholder="Your Email" required />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input type="text" class="form-control bg-light border-0" id="subject" name="subject" placeholder="Subject" required />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control bg-light border-0" id="message" name="message" placeholder="Message" style="height: 100px" required></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
              </div>
            </div>
          </form>

          <!-- Success Message -->
          <div id="successMsg" class="alert alert-success mt-3 d-none">
            ✅ Thanks for reaching out! We’ll get back to you shortly.
          </div>
        </div>

        <!-- Map -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100" style="min-height: 400px">
            <iframe class="rounded w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.909306948396!2d79.07243677522726!3d21.14469448417568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0864d0bb5f9%3A0x7e3e7688de6ef223!2sMaharajbagh%20Zoo%2C%20Sitabardi%2C%20Nagpur%2C%20Maharashtra%20440012!5e0!3m2!1sen!2sin!4v1739700000000!5m2!1sen!2sin"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->
</main>

<!-- ✅ JavaScript for handling submit and reset -->
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();

  fetch(this.action, {
    method: 'POST',
    body: new FormData(this)
  })
  .then(response => {
    if (response.ok) {
      // Show success message
      document.getElementById('successMsg').classList.remove('d-none');
      // Reset fields
      this.reset();
    } else {
      alert("Error: Message could not be sent!");
    }
  })
  .catch(() => alert("Something went wrong. Try again!"));
});
</script>

@endsection
