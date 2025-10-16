@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 ">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Adoption & Donation</h1>
            <h4 class="text-white">"Support Our Mission to Care for Animals in Need"</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Tagline -->
    <section class="container py-5 text-center text-white wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-start mb-5 ">
            <p class="text-muted"><span class="text-primary me-2">#</span>Adopt Pet from Maharajbag Zoo</p>
            <h1 class="display-5 mb-3">
                “<span class="text-primary">Adopt</span>. Support. Conserve.”
            </h1>
            <p class="text-muted">Your small contribution can make a big difference in the lives of our animals.</p>
        </div>
        <h2 class="fw-bold"></h2>
        <p class="text-muted"></p>
    </section>

    <!-- Steps Section -->
    <section class="container py-5">
        <section class="zoo-section zoo-objectives px-3 container wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="section-title">How It Works</h1>
            <p class="text-success text-center">Follow these simple steps to become a part of our conservation family.
            </p>
            </div>

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon my-3">
                                <i class="fa fa-paw fs-1 text-success"></i>
                            </div>
                            <h5 class="fw-bold">Step 1: Choose Animal</h5>
                            <p class="text-muted">Select your favorite animal from our adoption list and make it a part
                                of your family in spirit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="bi bi-file-earmark-text fs-1 text-success"></i>
                            </div>
                            <h5 class="fw-bold">Step 2: Fill Form</h5>
                            <p class="text-muted">Provide your details in the adoption form to register your support and
                                receive updates.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="bi bi-heart-fill fs-1 text-success"></i>
                            </div>
                            <h5 class="fw-bold">Step 3: Support Zoo</h5>
                            <p class="text-muted">Your donation helps us care for the animals, maintain habitats, and
                                promote conservation education.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Adoption Form -->
        <section class=" py-5 wow fadeInUp" data-wow-delay="0.3s">
            <div class="container">
                <div class="container">
                    <h1 class="display-5 section-title text-black text-center mb-5">Adoption / Donation Form</h1>
                    <p class="text-success text-center">Complete the form below to adopt an animal or make a donation.
                    </p>
                </div>

                <form class="w-75 mx-auto">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="animal" class="form-label">Choose Animal</label>
                        <input type="text" name="animal" id="animal" class="form-control"
                            placeholder="e.g.,Dog, Cat,......" required>
                    </div>

                    <div class="mb-3">
                        <label for="support_type" class="form-label">Support Type</label>
                        <select name="support_type" id="support_type" class="form-select" required>
                            <option value="">Select Option</option>
                            <option value="Adoption">Adoption</option>
                            <option value="Donation">Donation</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message (Optional)</label>
                        <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-4 py-2">Submit</button>
                    </div>
                </form>
            </div>
        </section>
</main>

@endsection