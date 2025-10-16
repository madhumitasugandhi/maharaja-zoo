<footer>
    <!-- Footer Start -->
    <div class="container-fluid footer bg-dark text-light mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <img class="img-fluid mb-3" src="{{ asset('assets/img/logo/logo2.png') }}" 
                         alt="Logo" style="width: 220px; height:auto; margin-top: -50px;" />
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link text-light" href="/">Home</a>
                    <a class="btn btn-link text-light" href="/about">About Us</a>
                    <a class="btn btn-link text-light" href="/contact">Contact Us</a>
                </div>

                <!-- Popular Links -->
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h5 class="text-light mb-4">Popular Links</h5>
                    <a class="btn btn-link text-light" href="/privacy-policy">Privacy Policy</a>
                    <a class="btn btn-link text-light" href="/terms-and-conditions">Terms & Condition</a>
                    <a class="btn btn-link text-light" href="/animals">Animals</a>
                </div>

                <!-- Address -->
                <div class="col-lg-3 col-md-6 text-center text-md-start">
                    <h5 class="text-light mb-4">Address</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Gorepeth, Nagpur, Maharashtra 440012</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>9423636143</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@gmail.com</p>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="container">
            <div class="copyright py-3 border-top border-secondary">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                        &copy; <a class="border-bottom text-light" href="#">Maharajbag</a>, All Rights Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                         "The zoo is not just about animals, it’s about understanding life in every form."
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</footer>

<style>
/* Footer Links Hover */
.footer .btn-link {
    text-decoration: none;
    color: #ffffff;
    transition: 0.3s;
}
.footer .btn-link:hover {
    color: #28a745; /* green hover */
}

/* Responsive Adjustments */
@media (max-width: 575.98px) {
    .footer .text-md-start {
        text-align: center !important;
    }
    .footer .text-md-end {
        text-align: center !important;
        margin-top: 10px;
    }
    .btn-link{
      text-align: center !important;
    }
    .footer img {
        margin-top: 0 !important;
        width: 180px;
    }
}

/* Back to Top Button */
.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
    z-index: 999;
}
</style>

<script>
// Show Back to Top button on scroll
window.addEventListener('scroll', function () {
    const btn = document.querySelector('.back-to-top');
    if (window.scrollY > 300) btn.style.display = 'block';
    else btn.style.display = 'none';
});
</script>
