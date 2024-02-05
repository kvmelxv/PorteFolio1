@extends('master')
@section('title', 'Projects')

@section('content')
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">3D Carousel Slider</h2>
                                <p>In my latest project, I utilized Figma to design an interactive carousel featuring a can animation. This endeavor involved creating wireframes, designing carousel slides with relevant visual elements, and seamlessly animating the can throughout the various stages. My work demanded meticulous attention to detail and a thorough understanding of design and animation principles to craft an engaging and functional user experience.</p>
                            </div>
                            <video data-js-video class="img-fluid" src="./assets/video.mp4" width="300" height="400"></video>
                        </div>
                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Memory Game</h2>
                                <p>Development of a global online platform for stamp auctions accessible worldwide. Features include user registration, lot publication, real-time bidding, and secure transactions. Designing a user-friendly, responsive interface for optimal user experience across all devices. Integration of advanced search functionalities and user account management.</p>
                            </div>
                            <video data-js-video class="img-fluid" src="./assets/jeux.mp4" width="300" height="400"></video>
                        </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact">Contact me</a>
        </div>
    </div>
</section>
@endsection