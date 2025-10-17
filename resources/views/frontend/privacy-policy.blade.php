@extends('frontend.layout.app')

@section('content')

<main class="main">
    <!-- Header Section -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 ">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Privacy Policy</h1>
            <h4 class="text-white">Your privacy and trust are important to us</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Privacy Policy Content -->
    <section class="container py-5 wow fadeInUp" data-wow-delay="0.2s">
        <div class="card border-0 shadow-sm rounded-3 p-5">
            <h3 class="text-primary fw-bold mb-4">Privacy Policy</h3>

            <p class="text-muted">
                Your privacy is important to us. <strong>Maharajbag Zoo, Nagpur</strong> ensures that all visitor 
                information shared through this website is handled securely and confidentially.
            </p>

            <p class="text-muted">Here’s how we handle your data:</p>

            <ul class="text-muted list-unstyled ms-3 mb-4">
                <li class="mb-2">
                    <i class="fa fa-circle text-primary"></i> We do not collect personal information unless it is voluntarily provided 
                    (e.g., through contact or feedback forms).
                </li>
                <li class="mb-2">
                    <i class="fa fa-circle text-primary me-2"></i>Information collected is used only for official communication, responding to inquiries, 
                    or improving our website services.
                </li>
                <li class="mb-2">
                    <i class="fa fa-circle text-primary me-2"></i>We store your data securely and take all reasonable precautions to protect it from 
                    unauthorized access or disclosure.
                </li>
                <li>
                    <i class="fa fa-circle text-primary me-2"></i>We do not share visitor data with third parties except as required by law.
                </li>
            </ul>

            <p class="text-muted mb-0">
                By using our website, you agree to this Privacy Policy. 
                If you have any concerns or questions, please contact us through the official channels listed on our website.
            </p>
        </div>
    </section>
    <!-- Privacy Policy End -->
</main>

@endsection
