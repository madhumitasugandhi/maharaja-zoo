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
                        Let`s See Our <span class="text-primary">Maharaj Bagh</span> Awesome Animals
                    </h1>
                </div>
                <div class="col-lg-6 text-lg-end wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary py-3 px-5" href="">Explore More Animals</a>
                </div>
            </div>

            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-6 fw-bold text-black">Meet Our Amazing Animals</h2>
                <p class="text-muted">Filter by Category</p>
            </div>

            <!-- Filter Buttons -->
            <div class="mb-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                <button class="btn btn-outline-primary filter-btn active" data-filter="all">All</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Mammals">Mammals</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Birds">Birds</button>
                <button class="btn btn-outline-primary filter-btn" data-filter="Aquatic">Aquatic</button>
            </div>

            <!-- 🐾 Unified Animal Grid -->
            <div class="row g-4 animal-gallery wow fadeInUp" data-wow-delay="0.1s">

                <!-- ================= Mammals ================= -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/bengal-tiger.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/bengal-tiger.jpg') }}" alt="Bengal Tiger">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Bengal Tiger</b></h5>
                                <i class="text-white">Majestic apex predator with orange coat and black stripes.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/leopard.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/leopard.jpg') }}" alt="Leopard">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Mammal</p>
                                <h5 class="text-success mb-0"><b>Leopard</b></h5>
                                <i class="text-white">Stealthy big cat known for its spotted coat and powerful build.</i>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Sloth Bear Card -->
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Mammals">
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/slothbear.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/slothbear.jpg') }}" alt="Sloth Bear" />
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
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/spotted-deer.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/spotted-deer.jpg') }}" alt="Spotted Deer" />
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
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/rhesus-macaque.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/macaque.jpg') }}" alt="Rhesus Macaque" />
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
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/blue-bull.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/nilgai.jpg') }}" alt="Blue Bull / Nilgai" />
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
                    <a class="animal-item" href="{{ asset('assets/img/Animals/mammels/smooth-coated-otter.jpg') }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset('assets/img/Animals/mammels/otter.jpg') }}" alt="Smooth-coated Otter" />
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
                @php
                $birds = [
                    ['name'=>'Emu', 'img'=>'assets/img/animals/birds/emu.jpg', 'desc'=>'Second-tallest bird, endemic to Australia, fast runner.'],
                    ['name'=>'Budgerigar', 'img'=>'assets/img/animals/birds/budgerigar.jpg', 'desc'=>'Small parrot known for vocal mimicry and bright colors.'],
                    ['name'=>'Cockatiel', 'img'=>'assets/img/animals/birds/cockatiel.jpg', 'desc'=>'Small cockatoo with yellow crest and orange cheek patch.'],
                    ['name'=>'Alexandrine Parakeet', 'img'=>'assets/img/animals/birds/alexandrine.jpg', 'desc'=>'Large parakeet with red wing patch and black-pink neck ring.'],
                    ['name'=>'Rose-ringed Parakeet', 'img'=>'assets/img/animals/birds/ringneck.jpg', 'desc'=>'Medium-sized parakeet with black and pink neck ring.'],
                ];
                @endphp

                @foreach ($birds as $bird)
                <div class="col-lg-4 col-md-6 animal-item-card" data-animal="Birds">
                    <a class="animal-item" href="{{ asset($bird['img']) }}" data-lightbox="animal">
                        <div class="position-relative mb-2">
                            <img class="animal-imgs img-fluid" src="{{ asset($bird['img']) }}" alt="{{ $bird['name'] }}">
                            <div class="animal-text p-4">
                                <p class="text-white small text-uppercase mb-0">Bird</p>
                                <h5 class="text-success mb-0"><b>{{ $bird['name'] }}</b></h5>
                                <i class="text-white">{{ $bird['desc'] }}</i>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach


                <!-- ================= Aquatic Intro ================= -->
                <div class="col-12" data-animal="Aquatic" >
                    <div class="card bg-light border-0 shadow-sm p-4">
                        <h3 class="text-success">Dive into the mesmerizing world of aquatic life</h3>
                        <p class="text-muted">Our zoo’s Aquatic Animals Zone showcases a wide range of marine and freshwater species — from colorful tropical fish to majestic sea creatures that glide gracefully through crystal-clear waters.</p>
                        <p class="text-muted">Explore the fascinating habitats of oceans, rivers, and lakes. Witness dolphins, sea turtles, clownfish, seahorses, coral reef species, stingrays, octopuses, and playful penguins that love to dive and splash around.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Animal End -->
</main>

@endsection





