@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">School Visits</h1>
            <h4 class="text-white">"Educational Experiences for School Students"</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Introduction -->
    <section class="container  mb-5">
        <div class="row g-5 mb-5 align-items-end">
            <div class="col-lg-6">
                <p><span class="text-success me-2">#</span>School Visits</p>
                <h1 class="display-5 mb-0">
                    Connecting <span class="text-success"> Classrooms </span> with <span class="text-success">
                        Conservation </span>
                </h1>
            </div>
        </div>
        <p class="text-muted text-start w-75 ">
            Maharajbagh Zoo welcomes schools to participate in guided educational tours designed to inspire young minds
            about wildlife conservation and biodiversity.
            Our programs combine fun and learning, giving students a chance to experience nature up close.
        </p>
    </section>

    <!-- Apply for Visit Form -->
    <section class="bg-light py-5">
        <div class="container">
             <div class="text-center mb-5">
            <h1 class="display-5 mb-3">
                Apply for a School Visit</h1>
            <p class="text-success">Schools can register for an educational trip to Maharajbagh Zoo by filling the
                    form below.</p>
        </div>

<form class="w-75 mx-auto"
      action="https://formsubmit.co/maharajbagzoo@gmail.com"
      method="POST"
      onsubmit="setTimeout(() => this.reset(), 100); alert('✅ Your school visit application has been sent successfully.');">
    
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_subject" value="New School Visit Application - Maharajbagh Zoo">
    <input type="hidden" name="_template" value="table">

    <div class="mb-3">
        <label for="school_name" class="form-label">School Name</label>
        <input type="text" name="school_name" id="school_name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="contact_person" class="form-label">Contact Person</label>
        <input type="text" name="contact_person" id="contact_person" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="students_count" class="form-label">Number of Students</label>
        <input type="number" name="students_count" id="students_count" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="visit_date" class="form-label">Preferred Visit Date</label>
        <input type="date" name="visit_date" id="visit_date" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Special Requests / Notes</label>
        <textarea name="message" id="message" rows="4" class="form-control"></textarea>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-success px-4 py-2">Submit Application</button>
    </div>
</form>

        </div>
    </section>
    <!-- Gallery Section -->
    <section class="container  my-5">
        <div class="row g-5 mb-5 align-items-end">
       
            <div class="col-lg-6">
                <p><span class="text-success me-2">#</span>Student Visit Gallery</p>
                <h1 class="display-5 mb-0">
                    <span class="text-success">Student Visit</span> Gallery
                </h1>
                <p class="text-muted">A glimpse of our happy young visitors learning with nature.</p>
            </div>
        </div>

        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-sm-6">
                    <div class="student-item position-relative overflow-hidden rounded">
                        <img src="{{ asset('assets/img/School-Visits/school1.jpg') }}"
                            class="student-img img-fluid rounded" alt="Student Visit 1">
                        <div class="student-overlay d-flex align-items-center justify-content-center">
                            <h5 class="text-white fw-bold mb-0">Learning with Nature</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="student-item position-relative overflow-hidden rounded">
                        <img src="{{ asset('assets/img/School-Visits/school2.jpg') }}"
                            class="student-img img-fluid rounded" alt="Student Visit 2">
                        <div class="student-overlay d-flex align-items-center justify-content-center">
                            <h5 class="text-white fw-bold mb-0">Fun & Knowledge</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQs Section -->
    <section class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5 mb-3">
                Frequently Asked Questions</h1>
            <p class="text-success">Have a question or want to get involved? Fill out the form below.</p>
        </div>

        <div class="accordion w-75 mx-auto" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq1">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse1">
                        What is the minimum group size for a school visit?
                    </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        There is <strong>no limit</strong> on the number of students who can participate in a school
                        visit.
                        Schools are welcome to bring as many students as they wish — our team will ensure a
                        well-organized and educational experience for all.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="faq3">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse3">
                        Can we bring our own food and water?
                    </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Schools may bring packed meals and water bottles. However, please <strong>avoid
                            littering</strong> and <strong>feeding</strong>
                        animals.
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

@endsection