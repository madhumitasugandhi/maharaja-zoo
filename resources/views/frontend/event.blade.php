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
    <section class="container py-5 text-center text-white">
        <div class="text-start mb-5">
            <p class="text-muted"><span class="text-primary me-2">#</span>Events of Maharajbag Zoo</p>
            <h1 class="display-5 mb-3">
                Event Calendar
                <span class="text-primary">2024–2025</span>
            </h1>
            <p class="text-muted">Click on any event date to see details.</p>
        </div>

        <!-- Simple Month View (can later be replaced with JS calendar like FullCalendar) -->
        <div class="row g-4" style="width: 100%">
            @php
            $events = [
            ['date' => '5 January', 'name' => 'National Bird Day', 'details' => 'An annual observance focused on raising
            awareness about bird conservation and welfare. Established in 2002 by the Avian Welfare Coalition, it
            highlights threats like extinction and illegal pet trade.'],
            ['date' => '2 February', 'name' => 'World Wetlands Day', 'details' => 'Celebrates wetlands’ role in
            biodiversity, flood control, and clean water. Marks the 1971 Ramsar Convention.'],
            ['date' => '3 March', 'name' => 'World Wildlife Day', 'details' => 'Raises awareness of the importance of
            wild animals and plants. Commemorates the 1973 CITES agreement.'],
            ['date' => '21 March', 'name' => 'International Day of Forests', 'details' => 'Promotes awareness of forest
            importance and encourages tree-planting campaigns.'],
            ['date' => '22 March', 'name' => 'World Water Day', 'details' => 'Highlights the need for sustainable
            management of freshwater resources.'],
            ['date' => '22 April', 'name' => 'Earth Day', 'details' => 'Global event raising awareness about climate
            change and environmental protection.'],
            ['date' => '3rd Friday of May', 'name' => 'Endangered Species Day', 'details' => 'Celebrates conservation
            efforts and raises awareness about biodiversity loss.'],
            ['date' => '22 May', 'name' => 'International Day for Biological Diversity', 'details' => 'UN-declared day
            to increase understanding of biodiversity importance.'],
            ['date' => '5 June', 'name' => 'World Environment Day', 'details' => 'UN day for global awareness and action
            for the environment.'],
            ['date' => '1–7 July', 'name' => 'Van Mahotsav Week', 'details' => 'India’s tree-planting festival promoting
            forest conservation.'],
            ['date' => '29 July 2024', 'name' => 'International Tiger Day', 'details' => 'Celebrated at Maharajbagh Zoo
            with quizzes and poster-making to promote tiger conservation.'],
            ['date' => '4 August 2024', 'name' => 'Friendship Day', 'details' => 'Zoo staff tied friendship bands to
            trees symbolizing a bond with nature.'],
            ['date' => '19 August 2024', 'name' => 'Vrukshabandhan', 'details' => 'Eco-friendly celebration where staff
            tied rakhis to trees, promoting tree protection.'],
            ['date' => '2–8 October 2024', 'name' => 'World Wildlife Week', 'details' => 'Week-long celebration with
            competitions and awareness events on wildlife conservation.'],
            ];
            @endphp

            @foreach ($events as $index => $event)
            <div class="col-md-4 col-lg-3">
                <div class="card shadow-sm border-2 p-4 border-success h-100 text-center event-card "
                    style="width:310px; border-radius: 8px;" data-bs-toggle="modal"
                    data-bs-target="#eventModal{{ $index }}">
                    <div class="card-body">
                        <h5 class="fw-bold">{{ $event['name'] }}</h5>
                        <p class="text-muted mb-1"><i class="bi bi-calendar-event"></i> {{ $event['date'] }}</p>
                        <p class="small text-secondary">Click for details</p>
                    </div>
                </div>
            </div>

            <!-- Event Modal -->
            <div class="modal fade " id="eventModal{{ $index }}" tabindex="-1"
                aria-labelledby="eventModalLabel{{ $index }}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-success p-3">
                            <h2 class="modal-title text-white" id="eventModalLabel{{ $index }}">{{ $event['name'] }}
                            </h2>
                            <button type="button" class="btn-close b btn-close-white" data-bs-dismiss="modal"
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
    <!-- Event Calendar End -->
</main>

@endsection