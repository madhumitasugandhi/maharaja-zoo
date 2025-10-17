@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Education & Careers</h1>
            <h4 class="text-white">"Empowering Future Generations Through Knowledge and Conservation"</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Career Options Section -->
    <section class="container py-5">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-6">
                        <p><span class="text-primary me-2">#</span>Education</p>
                        <h1 class="display-5 mb-3">
                            Career Options In
                            <span class="text-primary">Maharajbag</span>
                        </h1>
                        <p class="text-muted">Explore opportunities to grow with us — as a Researcher, Intern, or
                            Volunteer.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="membership-item position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/animal-md-3.jpg') }}" alt="" />
                            <h1 class="display-1">01</h1>
                            <h2 class="text-white my-4">Researcher</h2>
                            <p class="card-text">Join our research team and contribute to wildlife studies and
                                conservation projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="membership-item position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/animals/birds/budgerigar.jpg') }}" alt="" />
                            <h1 class="display-1">02</h1>
                            <h2 class="text-white my-4 fw-bold">Intern</h2>
                            <p class="card-text">Join our research team and contribute to wildlife studies and
                                conservation projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="membership-item position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/animals/Aquatic/fish1.jpg') }}" alt="" />
                            <h1 class="display-1">03</h1>
                            <h2 class="text-white my-4 fw-bold">Volunteer</h2>
                            <p class="card-text">Be part of our volunteer network and support awareness and visitor
                                programs.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Career Options End -->

    <!-- Inquiry Form Section -->
    <section class="bg-light py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5 mb-3">
                    Inquiry Form</h1>
                <p class="text-success">Have a question or want to get involved? Fill out the form below.</p>
            </div>

          <form class="w-75 mx-auto"
      action="https://formsubmit.co/maharajbagzoo@gmail.com"
      method="POST"
      onsubmit="setTimeout(() => this.reset(), 100); alert('✅ Your inquiry has been sent successfully.');">

    <!-- FormSubmit hidden fields -->
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_subject" value="New Inquiry - Education & Careers Form">
    <input type="hidden" name="_template" value="table">

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="role" class="form-label">Role</label>
        <select name="role" id="role" class="form-select" required>
            <option value="">Select Role</option>
            <option value="Researcher">Researcher</option>
            <option value="Intern">Intern</option>
            <option value="Volunteer">Volunteer</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="purpose" class="form-label">Visit Purpose</label>
        <textarea name="purpose" id="purpose" rows="4" class="form-control" required></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success px-4 py-2">Submit Inquiry</button>
    </div>
</form>
        </div>
    </section>
    <!-- Inquiry Form End -->
</main>

@endsection