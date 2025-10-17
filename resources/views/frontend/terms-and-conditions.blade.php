@extends('frontend.layout.app')

@section('content')

<main class="main">
    <!-- Header Section -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 ">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Terms & Conditions</h1>
            <h4 class="text-white">Please read carefully before using our services</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Terms & Conditions Section -->
    <section class="container py-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card border-0 shadow-sm rounded-3 p-5">
            <h3 class="text-primary fw-bold mb-4">Terms & Conditions</h3>

            <p class="text-muted mb-4">
                By accessing and using the <strong>Maharajbag Zoo, Nagpur</strong> website, you agree to comply with the following terms and conditions.
            </p>

            <ul class="text-muted list-unstyled ms-3 mb-4">
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>Information and content on this website are provided for general use and public awareness.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>Visitors must follow all zoo rules and regulations during their visit.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>Ticket purchases are subject to availability and are strictly non-transferable.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>The Zoo reserves the right to amend its policies or website content without prior notice.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>The website is maintained to provide public information about Maharajbag Zoo, Nagpur.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>While every effort is made to keep the information accurate and updated, the Zoo is not liable for any inadvertent errors or omissions.</li>
                <li class="mb-2"><i class="fa fa-circle text-primary me-2"></i>Visitors are advised to verify ticket prices, timings, and regulations from official notices or at the Zoo gate.</li>
            </ul>

            <p class="text-muted mb-0">
                For any clarification or additional information, please contact our official support team through the <a href="{{ url('/contact') }}" class="text-success text-decoration-none fw-semibold">Contact Us</a> page.
            </p>
        </div>
    </section>
    <!-- Terms & Conditions End -->
</main>

@endsection
