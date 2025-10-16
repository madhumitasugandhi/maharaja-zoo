@extends('frontend.layout.app')
@section('content')

<main class="main">

    <!-- Page Header Start -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Our Animals</h1>
            <h4 class="text-white">“Explore Our Animal Kingdom”</h4>
        </div>
    </div>
    <!-- Page Header End -->

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
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.3s">
                    <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                </div>
            </div>

            <div class=" mb-4 wow fadeInUp" data-wow-delay="0.5s">

                <p class="text-muted">Filter by Category</p>
            </div>

            <!-- Filter Buttons -->
            <div class="mb-4 wow fadeInUp" data-wow-delay="0.5s">
                <button class="btn btn-outline-primary filter-btn active" data-filter="all">All</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Mammals">Mammals</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Birds">Birds</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Aquatic">Aquatic</button>
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
    <!-- Animation & Filter Script -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButtons = document.querySelectorAll(".filter-btn");
            const animalCards = document.querySelectorAll(".animal-item-card");

            filterButtons.forEach((btn) => {
                btn.addEventListener("click", () => {
                    const filter = btn.getAttribute("data-filter");

                    // Button active state
                    filterButtons.forEach(b => b.classList.remove("active"));
                    btn.classList.add("active");

                    animalCards.forEach((card, i) => {
                        const match = filter === "all" || card.dataset.animal === filter;
                        if (match) {
                            card.style.display = "block";
                            card.classList.remove("animate__fadeOut");
                            void card.offsetWidth;
                            card.classList.add("animate__animated", "animate__fadeInUp");
                            card.style.animationDelay = `${i * 0.1}s`;
                        } else {
                            card.classList.remove("animate__fadeInUp");
                            card.classList.add("animate__animated", "animate__fadeOut");
                            setTimeout(() => {
                                card.style.display = "none";
                            }, 400);
                        }
                    });
                });
            });
        });

    </script>
</main>

@endsection