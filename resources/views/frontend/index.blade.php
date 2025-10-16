@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header Start -->
    <div class="container-fluid bg-dark p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">
                        “Discover Wildlife. Preserve Nature.”
                    </h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="/about" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="" />
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Welcome To Maharajbag</p>
                    <h1 class="display-5 mb-4">
                        Why You Should Visit
                        <span class="text-primary">Maharajbag</span>!
                    </h1>
                    <p class="mb-4">
                        Nestled in the heart of Nagpur, Maharajbag Zoo is one of India’s oldest and most cherished
                        zoological parks.
                        It stands as a living legacy of wildlife conservation, education, and natural beauty.
                        Here, visitors can connect with nature, witness exotic animals up close, and learn the
                        importance of protecting our planet’s biodiversity.
                    </p>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Free Car
                        Parking
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Natural
                        Environment
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>Professional
                        Food & Breverages
                    </h5>
                    <h5 class="mb-3">
                        <i class="far fa-check-circle text-primary me-3"></i>World Best
                        Animals
                    </h5>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="/about">Read More</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="about-img img-fluid bg-white p-4 border border-5 border-success"
                            src="{{ asset('assets/img/logo/logo1.png') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-6 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">247</h1>
                    <p class="text-white mb-0">Total Animal</p>
                </div>
                <div class="col-md-6 col-lg-6 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2" data-toggle="counter-up">10,000</h1>
                    <p class="text-white mb-0">Daily Visitors</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Services</p>
                    <h1 class="display-5 mb-0">
                        Special Services For
                        <span class="text-primary">Maharajbag</span> Visitors
                    </h1>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Call for more info</p>
                            <h2 class="text-white mb-0">9423636143</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-2.png') }}" alt="Icon" />
                    <h5 class="mb-3">Car Parking</h5>
                    <span>Spacious and secure parking facility available for all visitors, ensuring a hassle-free and
                        convenient zoo experience.</span>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-8.png') }}" alt="Icon" />
                    <h5 class="mb-3">Play Ground</h5>
                    <span>A fun and safe play area designed for children to enjoy, relax, and explore while surrounded
                        by the beauty of nature.</span>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-4.png') }}" alt="Icon" />
                    <h5 class="mb-3">Guide Services</h5>
                    <span>Knowledgeable guides are available to enhance your visit with fascinating facts, stories, and
                        insights about our animals and their habitats.</span>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <img class="img-fluid mb-3" src="{{ asset('assets/img/icon/icon-5.png') }}" alt="Icon" />
                    <h5 class="mb-3">Food & Beverages</h5>
                    <span>Enjoy a variety of delicious and refreshing snacks, meals, and drinks at our clean and
                        comfortable food court areas.</span>
                </div>

            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Visiting Hours Start -->
    <div class="container-xxl bg-primary visiting-hours my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                    <h1 class="display-6 text-white mb-5">Visiting Hours</h1>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span>Monday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Tuesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Wednesday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Thursday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Friday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Saturday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                        <li class="list-group-item">
                            <span>Sunday</span>
                            <span>9:00AM - 6:00PM</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Contact Info</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Zoo</td>
                                <td>Gorepeth, Nagpur, Maharashtra 440012</td>
                            </tr>
                            <tr>
                                <td>Ticket</td>
                                <td>
                                    <p class="mb-2">Adult- 40</p>
                                    <p class="mb-2">Children – 20</p>
                                    <p class="mb-2">Children park - 5</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Support</td>
                                <td>
                                    <p class="mb-2">9423636143</p>
                                    <p class="mb-0">info@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Visiting Hours End -->

    <!-- Animal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <p><span class="text-primary me-2">#</span>Our Animals</p>
                    <h1 class="display-5 mb-0">
                        Let`s See Our <span class="text-primary">Maharajbag</span> Awesome Animals
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="/animals">Explore More Animals</a>
                </div>
            </div>


             <!-- 🐾 Unified Animal Grid -->
            <div class="row g-4 animal-gallery wow fadeInUp" data-wow-delay="0.1s">

                <!-- ================= Mammals ================= -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/bengal-tiger.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/bengal-tiger.jpg') }}" alt="Bengal Tiger">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Bengal Tiger</b></h5>
                                <i class="text-white">Majestic apex predator with orange coat and black stripes.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/leopard.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/leopard.jpg') }}" alt="Leopard">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Leopard</b></h5>
                                <i class="text-white">Stealthy big cat known for its spotted coat and powerful
                                    build.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Sloth Bear Card -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/slothbear.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/slothbear.jpg') }}" alt="Sloth Bear" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Sloth Bear</b></h5>
                                <div class="card-text text-white"><i>Insect-eating bear with a shaggy
                                        coat and white chest mark.</i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Spotted Deer Card -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/spotted-deer.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/spotted-deer.jpg') }}" alt="Spotted Deer" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Spotted Deer</b></h5>
                                <p class="card-text text-white"><i>Graceful herbivore with a spotted coat, found in
                                        grasslands and forests.</i></p>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Rhesus Macaque -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/rhesus-macaque.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/macaque.jpg') }}" alt="Rhesus Macaque" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Rhesus Macaque</b></h5>
                                <div class="card-text text-white"><i>Intelligent primate with a reddish-brown coat and
                                        long tail.</i></div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Blue Bull / Nilgai -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/blue-bull.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/mammels/nilgai.jpg') }}" alt="Blue Bull / Nilgai" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Blue Bull / Nilgai</b></h5>
                                <div class="card-text text-white"><i>Largest Asian antelope with a bluish-grey coat and
                                        white markings.</i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Smooth-coated Otter -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/smooth-coated-otter.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/otter.jpg') }}"
                                alt="Smooth-coated Otter" />
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Smooth-coated Otter</b></h5>
                                <div class="card-text text-white"><i>Social and playful aquatic mammal with a sleek
                                        coat.</i></div>
                            </div>
                        </div>
                    </a>
                </div>

                <!--Mammal End-->

                <!-- ================= Birds ================= -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/birds/emu.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/birds/emu.jpg') }}"
                                alt="Emu">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>Emu</b></h5>
                                <i class="text-white">Second-tallest bird, native to Australia and an excellent
                                    runner.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/birds/budgerigar.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/birds/budgerigar.jpg') }}" alt="Budgerigar">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>Budgerigar</b></h5>
                                <i class="text-white">Colorful parrot known for mimicry and cheerful chirps.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/birds/cockatiel.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/birds/cockatiel.jpg') }}" alt="Cockatiel">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>Cockatiel</b></h5>
                                <i class="text-white">Small cockatoo with a yellow crest and orange cheek patch.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/birds/alexandrine.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/birds/alexandrine.jpg') }}"
                                alt="Alexandrine Parakeet">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>Alexandrine Parakeet</b></h5>
                                <i class="text-white">Large parakeet with red wing patch and pink neck ring.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/birds/ringneck.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid"
                                src="{{ asset('assets/img/Animals/birds/ringneck.jpg') }}" alt="Rose-ringed Parakeet">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>Rose-ringed Parakeet</b></h5>
                                <i class="text-white">Medium-sized parakeet with black and pink neck ring.</i>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Birds End -->



                <!-- ================= Aquatic ================= -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Aquatic">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/Aquatic/fish1.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/Aquatic/fish1.jpg') }}"
                                alt="Goldfish">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Aquatic</p>
                                <h5 class="text-success mb-0"><b>Goldfish</b></h5>
                                <i class="text-white">Graceful golden fish with shimmering scales and smooth
                                    swimming.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Aquatic">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/Aquatic/fish2.jpg') }}"
                        data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/Aquatic/fish2.jpg') }}"
                                alt="Emperor Angelfish">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Aquatic</p>
                                <h5 class="text-success mb-0"><b>Emperor Angelfish</b></h5>
                                <i class="text-white">Colorful marine fish with bold blue and yellow stripes.</i>
                            </div>
                        </div>
                    </a>
                </div>

                

                <!-- ================= Aquatic Intro ================= -->
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s" data-animal="Aquatic">
                    <div class="card bg-light border-0 shadow-sm p-4">
                        <h3 class="text-success">Dive into the mesmerizing world of aquatic life</h3>
                        <p class="text-muted">Our zoo’s Aquatic Animals Zone showcases a wide range of marine and
                            freshwater species — from colorful tropical fish to majestic sea creatures that glide
                            gracefully through crystal-clear waters.</p>
                        <p class="text-muted">Explore the fascinating habitats of oceans, rivers, and lakes. Witness
                            dolphins, sea turtles, clownfish, seahorses, coral reef species, stingrays, octopuses, and
                            playful penguins that love to dive and splash around.</p>
                    </div>
                </div>

                <!-- Aquatic End -->

            </div>
        </div>
    </div>
    <!-- Animal End -->

</main>
@endsection