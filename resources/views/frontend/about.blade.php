@extends('frontend.layout.app')
@section('content')

<main class="main">
    <!-- Header -->
    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown">About Us</h1>
            <h4 class="text-white">"Discover the Legacy and Mission of Maharajbag Zoo"</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Section -->
    <section class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p><span class="text-primary me-2">#</span>Welcome to Maharajbag Zoo</p>
                    <h1 class="display-5 mb-4">
                        Preserving Wildlife & Inspiring Conservation
                    </h1>
                    <p class="mb-4">
                        The history of Maharajbag Zoo dates back to its origins as a <b>Shikar Khana (hunting ground)</b> belonging
                        to the erstwhile ruler of Nagpur, <b>Maharaja Raghoji Raje Bhosale</b>. In 1894, upon the establishment of
                        the C.P. & Berar state, the facility was taken over by the Department of Agriculture and officially designated
                        as the Maharajbag Zoo.
                    </p>
                    <p>
                        Initially housing just three cages for animals like Tigers, Hyena, monkeys, and birds, the zoo developed further
                        during the British period with a Deer Park and new enclosures. Since 1969, it has been under the administrative
                        control of <b>Dr. Panjabrao Deshmukh Krushi Vidyapeeth (P.D.K.V.), Akola</b>, through the College of Agriculture, Nagpur.
                        Recently, it received approval for a new <b>Master Layout Plan (2023)</b> from the Central Zoo Authority, New Delhi,
                        marking a step towards modernization and adherence to the <b>National Zoo Policy (1998)</b>.
                    </p>
                    <a class="btn btn-primary py-3 px-5 mt-3" href="#team">Meet Our Team</a>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border border border-primary  ">
                        <img class="img-fluid" src="{{ asset('assets/img/bg-1.jpg') }}" alt="About Maharajbag Zoo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facts Section -->
    <div class="container-xxl bg-primary facts my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 text-center text-white">
            <h3  class="display-4 text-white mb-5 animated slideInDown">Maharajbag Zoo at a Glance</h3>
            <div class="row g-4">
                <div class="col-md-3">
                     <i class="fa fa-paw fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2">1894</h1>
                    <p>Establishment Year</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-snowflake fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2">131 Years</h1>
                    <p>Legacy (2024–25)</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-home fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2">100+</h1>
                    <p>Species Housed</p>
                </div>
                <div class="col-md-3">
                     <i class="fa fa-users fa-3x text-primary mb-3"></i>
                    <h1 class="text-white mb-2">Conservation</h1>
                    <p>Our Core Mission</p>
                </div>
            </div>
        </div>
    </div>

   <!-- Objectives -->
<section class="zoo-section zoo-objectives container wow fadeInUp" data-wow-delay="0.1s"">
  <h1 class="section-title">Our Objectives</h1>
  <ul class="list-group list-group-flush list-unstyled">
    <li class="zoo-list-item"><b>Conservation Breeding:</b> Engaging in the conservation breeding of endangered species found within the region.</li>
    <li class="zoo-list-item"><b>Rescue & Rehabilitation:</b> Providing housing, care, and medical attention for rescued or orphaned wildlife.</li>
    <li class="zoo-list-item"><b>Education & Empathy:</b> Cultivating empathy among visitors and promoting sustainable environmental awareness.</li>
    <li class="zoo-list-item"><b>Scientific Research:</b> Collecting and analyzing data on animal biology, behavior, and healthcare.</li>
    <li class="zoo-list-item"><b>In-situ Conservation Support:</b> Supporting conservation efforts in natural habitats through public education.</li>
  </ul>
</section>

<!-- Mission -->
<section class="zoo-section container my-5 wow fadeInUp" data-wow-delay="0.1s">
   <div class="container-xxl py-5">
      <div class="container">
        <h1
          class="display-5 section-title text-black text-center mb-5 wow fadeInUp"
          data-wow-delay="0.1s">Our Mission</h1>
        <div
          class="owl-carousel testimonial-carousel wow fadeInUp"
          data-wow-delay="0.1s"
        >
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border-2 p-2 mx-auto mb-4"
              src="{{ asset('assets/img/icon/icon-1.png') }}"
              style="width: 120px; height: 120px; border: 4px solid #2eb872;"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
               <b> Advancing Conservation:</b> Complementing national efforts through coordinated breeding of endangered species.
              </p>
              
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle border-2 p-2 mx-auto mb-4"
              src="{{ asset('assets/img/icon/icon-2.png') }}"
              style="width: 120px; height: 120px; border: 4px solid #2eb872;"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                <b> Fostering Empathy & Action:</b> Inspiring visitors to actively support wildlife conservation.
              </p>
            </div>
          </div>
          <div class="testimonial-item text-center">
            <img
              class="img-fluid rounded-circle p-2 mx-auto mb-4"
              src="{{ asset('assets/img/icon/icon-3.png') }}"
              style="width: 120px; height: 120px; border: 4px solid #2eb872;"
            />
            <div class="testimonial-text rounded text-center p-4">
              <p>
                <b>Promoting Ecological Understanding:</b> Educating visitors about ecological linkages and sustainable living.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- Team -->
<section class="zoo-section zoo-team container wow fadeInUp" data-wow-delay="0.1s">
  <h1 class="section-title">Meet Our Team</h1>
  <div class="table-responsive">
    <table class="table table-bordered text-center zoo-table">
      <thead>
        <tr>
          <th>Designation</th>
          <th>Name / Position</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Officer In-charge</td><td>Dr. S. S. Bawaskar</td></tr>
        <tr><td>Zoo Controller</td><td>Dr. P. R. Kadu</td></tr>
        <tr><td>Curator</td><td>-</td></tr>
        <tr><td>Education Officer cum Biologist</td><td>-</td></tr>
        <tr><td>Sr. Clerk / Livestock Supervisor</td><td>-</td></tr>
        <tr><td>Head Keeper</td><td>-</td></tr>
        <tr><td>Agricultural Assistant / Garden Supervisor</td><td>-</td></tr>
        <tr><td>Sweeper</td><td>-</td></tr>
        <tr><td>Animal Keeper / Labour / Mazdoor</td><td>-</td></tr>
      </tbody>
    </table>
  </div>
</section>

</main>

@endsection
