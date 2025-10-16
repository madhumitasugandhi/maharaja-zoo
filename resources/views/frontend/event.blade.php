@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">Event Calendar</h1>
            <h4 class="text-white">"Stay Tuned for Upcoming Events and Activities at Maharajbag Zoo"</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Event Calendar Section -->
    <section class="container py-5 text-center text-white wow fadeInUp" data-wow-delay="0.1s">
        <div class="text-start mb-5">
            <p class="text-muted"><span class="text-primary me-2">#</span>Events of Maharajbag Zoo</p>
            <h1 class="display-5 mb-3">
               <span class="text-primary">Event</span> Calendar
            </h1>
            <p class="text-muted">Click on any event date to see details.</p>
        </div>

        <div class="row g-4" style="width: 100%">
            @php
            $events = [
            ['date' => '5 January', 'name' => 'National Bird Day', 'details' => 'An annual observance focused on raising
            awareness about bird conservation and welfare.'],
            ['date' => '2 February', 'name' => 'World Wetlands Day', 'details' => 'Celebrates wetlands’ role in
            biodiversity and clean water.'],
            ['date' => '3 March', 'name' => 'World Wildlife Day', 'details' => 'Raises awareness of wild animals and
            plants.'],
            ['date' => '21 March', 'name' => 'International Day of Forests', 'details' => 'Promotes awareness of forest
            importance.'],
            ['date' => '22 April', 'name' => 'Earth Day', 'details' => 'Global event for environmental protection.'],
            ['date' => '5 June', 'name' => 'World Environment Day', 'details' => 'UN day for global awareness for the
            environment.'],
            ['date' => '29 July 2024', 'name' => 'International Tiger Day', 'details' => 'Celebrated at Maharajbagh Zoo
            with poster-making and conservation talks.'],
            ['date' => '4 August 2024', 'name' => 'Friendship Day', 'details' => 'Zoo staff tied friendship bands to
            trees symbolizing a bond with nature.'],
            ['date' => '19 August 2024', 'name' => 'Vrukshabandhan', 'details' => 'Eco-friendly celebration promoting
            tree protection.'],
            ['date' => '2–8 October 2024', 'name' => 'World Wildlife Week', 'details' => 'Week-long celebration for
            wildlife conservation awareness.'],
            ];
            @endphp

            @foreach ($events as $index => $event)
            <div class="col-md-4 col-lg-3">
                <div class="card shadow-sm border-2 p-3 border-success h-100 text-center event-card"
                    data-bs-toggle="modal" data-bs-target="#eventModal{{ $index }}">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $event['name'] }}</h5>
                        <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> {{ $event['date'] }}</p>
                        <p class="small text-secondary">Click for details</p>
                    </div>
                </div>
            </div>

            <!-- Event Modal -->
            <div class="modal fade" id="eventModal{{ $index }}" tabindex="-1"
                aria-labelledby="eventModalLabel{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-success p-3">
                            <h2 class="modal-title text-white" id="eventModalLabel{{ $index }}">{{ $event['name'] }}
                            </h2>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-5">
                            <p class="text-success"><strong>Date:</strong> {{ $event['date'] }}</p>
                            <p class="text-muted text-start">{{ $event['details'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Event Gallery Section -->
    <section class="container py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class=" mb-5">
            <p><span class="text-success me-2">#</span>Our Events</p>
            <h1 class="display-5 mb-0">Relive <span class="text-success">Maharajbagh Zoo</span>’s Exciting Moments</h1>
        </div>
        <!-- June-->
        <div class="event-gallery">
            <a class="event-item" href="assets/img/Events/June/june1.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/June/june1.jpg" alt="World Environment Day" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">June 5</p>
                    <h5 class="text-white mb-0">World Environment Day</h5>
                </div>
            </a>

            <a class="event-item" href="assets/img/Events/July/july1.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/July/july1.jpg" alt="International Tiger Day" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">July 29</p>
                    <h5 class="text-white mb-0">International Tiger Day</h5>
                </div>
            </a>

            <!-- July-->
            <a class="event-item" href="assets/img/Events/July/july2.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/July/july2.jpg" alt="Van Mahotsav Week" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">July 1–7</p>
                    <h5 class="text-white mb-0">Van Mahotsav Week</h5>
                </div>
            </a>

            <!-- August-->
            <a class="event-item" href="assets/img/Events/AUG/aug1.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/AUG/aug1.jpg" alt="Friendship Day" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">August 4</p>
                    <h5 class="text-white mb-0">Friendship Day</h5>
                </div>
            </a>

            <a class="event-item" href="assets/img/Events/AUG/aug2.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/AUG/aug2.jpg" alt="Vrukshabandhan" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">August 19</p>
                    <h5 class="text-white mb-0">Vrukshabandhan</h5>
                </div>
            </a>

            <!-- October-->
            <a class="event-item" href="assets/img/Events/Oct/oct1.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/Oct/oct1.jpg" alt="World Wildlife Week" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">October 2–8</p>
                    <h5 class="text-white mb-0">World Wildlife Week</h5>
                </div>
            </a>

            <a class="event-item" href="assets/img/Events/Oct/oct2.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/Oct/oct2.jpg" alt="Wildlife Week Activity" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">October 2–8</p>
                    <h5 class="text-white mb-0">Wildlife Week Activities</h5>
                </div>
            </a>

            <a class="event-item" href="assets/img/Events/Oct/oct3.jpg" data-lightbox="event">
                <img class="event-img" src="assets/img/Events/Oct/oct3.jpg" alt="World Wildlife Celebration" />
                <div class="animal-text">
                    <p class="text-white small text-uppercase mb-0">October 2–8</p>
                    <h5 class="text-white mb-0">World Wildlife Celebration</h5>
                </div>
            </a>
        </div>
    </section>
</main>



@endsection