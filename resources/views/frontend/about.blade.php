@extends('layouts.fronend.app')

@section('title')
    About
@endsection

@section('body')
    <style>
/* لما الصفحة تكون RTL */
.accordion-button-ar {
  justify-content: flex-end; /* يخلي النص يمين */
}

.accordion-button-ar::after {
  margin-left: 0 !important;   /* نلغي المسافة الافتراضية */
  margin-right: auto !important; /* نحرك السهم شمال */
}

        .faq-section .accordion .accordion-item .accordion-header .accordion-button {
            color: var(--bs-white);
            background: #93bf34;
            font-size: 18px;
        }

        .banner::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 500px;
            top: -200px;
            left: 0;
            background: #93bf34;
            transform: rotate(45deg);
            z-index: 1;
        }
        .banner::before {
    content: "";
    position: absolute;
    width: 100px;
    height: 500px;
    bottom: -200px;
    right: 0;
    background:#1E3A5F;
    transform: rotate(45deg);
    z-index: 1;
        }

        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: #93bf34;
            border-color: var(--bs-btn-hover-border-color);
        }
        .btn {
            background-color: #134688;
        }
    </style>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb banner">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                <li class="breadcrumb-item active" style="    color: #93bf34;">About</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 style="    color: #7a914a;">About Us – NKM</h4>

                        <h1 class="display-6 mb-4" style="    color: #93bf34;">{{__('about.About Us section 1 - 1-1')}} <br>{{__('about.About Us section 1 - 1-2')}}</h1>
                        <h4 class="mb-4" style="    color: #3c6292;"> {{__('about.About Us section 1 - 2')}}</h4><br>
                        <div class="text-dark mb-4">
                            <p class="fs-5" style="    color: #1E3A5F;"> <span
                                    class="fa fa-check text-primary me-2"></span> {{__('about.About Us section 1 - 3')}}</p>
                            <p class="fs-5" style="    color: #1E3A5F;"> <span
                                    class="fa fa-check text-primary me-2"></span>{{__('about.About Us section 1 - 4')}}</p>
                            <p class="fs-5" style="    color: #1E3A5F;"> <span
                                    class="fa fa-check text-primary me-2"></span> {{__('about.About Us section 1 - 5')}}</p>
                        </div>
                        <p class="fs-3" style="    color: #93bf34;"> {{__('about.About Us section 1 - 6')}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="position-relative h-100">
                        <img src="{{ asset('uploads/posts/postSeeder/0deb0f78-9fd6-4208-8f3a-204689560c451739635109jpeg.jpeg') }}"
                            class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                        <div class="bg-white">
                            <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                                <div class=" p-4" style="background-color: #1E3A5F;">
                                    <h4 class="display-2 mb-0">20+</h4>
                                    <p class="text-white fs-5 mb-0">years of experience</p>
                                </div>
                            </div>
                            <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                                <img src="{{ asset('uploads/posts/postSeeder/12.jpeg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Banner Start -->
    <div class="container-fluid banner py-5 wow zoomIn" data-wow-delay="0.2s">
        <div class="banner-design-1"></div>
        <div class="banner-design-2"></div>
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="">
                        <h4 class="text-white">{{__('about.About Us section 2 - 1')}}</h4>
                        <h1 class="display-4 text-white mb-0">{{__('about.About Us section 2 - 2')}}</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-lg-end h-100">
                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2"
                            href="{{ route('frontend.conact.index') }}">{{__('about.About Us section 2 - 3')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Projects Start -->
    {{-- <div class="container-fluid projects bg-light py-5">
                    <div class="container py-5">
                        <div class="row g-5">
                            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                                <div>
                                    <h4 class="text-primary">Our Projects</h4>
                                    <h1 class="display-4 mb-4">How to work Our Electricity Projects</h1>
                                    <p class="mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum fugiat quae nihil obcaecati,</p>
                                    <ul class="nav">
                                        <li class="nav-item bg-white mb-4 w-100">
                                            <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill" href="#ProjectsTab-1">
                                                <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-bolt small"></span></div><span>Power Path Unveiling Our process</span>
                                            </a>
                                        </li>
                                        <li class="nav-item bg-white mb-4 w-100">
                                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-2">
                                                <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-charging-station small"></span></div><span>Electro Flow Decoding Our method</span>
                                            </a>
                                        </li>
                                        <li class="nav-item bg-white mb-4 w-100">
                                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-3">
                                                <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-broadcast-tower small"></span></div><span>Energetic Engine Behind Scenes</span>
                                            </a>
                                        </li>
                                        <li class="nav-item bg-white mb-4 w-100">
                                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-4">
                                                <div class="projects-icon btn-md-square bg-primary text-white me-3"><span class="fas fa-bolt small"></span></div><span>Watt Works Discover Operations</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                                <div class="tab-content">
                                    <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                                        <div class="projects-item">
                                            <img src="{{asset('assets/frontend')}}/img/img/industrial-1.jpg" class="img-fluid w-100" alt="">
                                            <div class="projects-content bg-white p-4">
                                                <h4 class="mb-3">Power Path Unveiling Our process</h4>
                                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quo? Enim facere, praesentium voluptatem vero officiis libero fuga rem autem amet recusandae voluptates, dolorem quo magni. Corporis eveniet consequuntur accusantium.
                                                </p>
                                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                                        <div class="projects-item">
                                            <img src="{{asset('assets/frontend')}}/img/img/industrial-2.jpg" class="img-fluid w-100" alt="">
                                            <div class="projects-content bg-white p-4">
                                                <h4 class="mb-3">Electro Flow Decoding Our method</h4>
                                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quo? Enim facere, praesentium voluptatem vero officiis libero fuga rem autem amet recusandae voluptates, dolorem quo magni. Corporis eveniet consequuntur accusantium.
                                                </p>
                                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                                        <div class="projects-item">
                                            <img src="{{asset('assets/frontend')}}/img/img/commercial-1.jpg" class="img-fluid w-100" alt="">
                                            <div class="projects-content bg-white p-4">
                                                <h4 class="mb-3">Energetic Engine Behind Scenes</h4>
                                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quo? Enim facere, praesentium voluptatem vero officiis libero fuga rem autem amet recusandae voluptates, dolorem quo magni. Corporis eveniet consequuntur accusantium.
                                                </p>
                                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                                        <div class="projects-item">
                                            <img src="{{asset('assets/frontend')}}/img/img/commercial-2.jpg" class="img-fluid w-100" alt="">
                                            <div class="projects-content bg-white p-4">
                                                <h4 class="mb-4">Watt Works Discover Operations</h4>
                                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quo? Enim facere, praesentium voluptatem vero officiis libero fuga rem autem amet recusandae voluptates, dolorem quo magni. Corporis eveniet consequuntur accusantium.
                                                </p>
                                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
    <!-- Projects End -->

    <br>
    <br>
    <br>

    <!-- FAQ Start -->
    <div class="container-fluid faq-section bg-light pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-12 wow fadeInRight" data-wow-delay="0.4s">
 @if (App::getLocale() == 'ar')
 <h4 class="text-end text-primary">{{__('about.About Us section 3 - 1')}}</h4>
     
 @else
     
 <h4 class="text-primary">{{__('about.About Us section 3 - 1')}}</h4>
                    @endif
                    <div class="h-100">
                        @if (App::getLocale() == 'ar')
                            
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button accordion-button-ar  text-end" type="button" data-bs-toggle="collapse"
    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" dir="rtl">
    {{ __('about.About Us section 3 - 2-1') }}
</button>

                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-end">
                                        {{__('about.About Us section 3 - 2-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button accordion-button-ar  text-end  collapsed" dir="rtl" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{__('about.About Us section 3 - 3-1')}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-end">{{__('about.About Us section 3 - 3-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button accordion-button-ar  text-end  collapsed" dir="rtl" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        {{__('about.About Us section 3 - 4-1')}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-end">
                                        {{__('about.About Us section 3 - 4-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button accordion-button-ar  text-end  collapsed" dir="rtl" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        {{__('about.About Us section 3 - 5-1')}}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-end">
                                        {{__('about.About Us section 3 - 5-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button accordion-button-ar  text-end  collapsed" dir="rtl" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        {{__('about.About Us section 3 - 6-1')}}

                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body text-end">
                                       {{__('about.About Us section 3 - 6-2')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @else
                            
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        {{__('about.About Us section 3 - 2-1')}}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show active"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{__('about.About Us section 3 - 2-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        {{__('about.About Us section 3 - 3-1')}}
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">{{__('about.About Us section 3 - 3-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        {{__('about.About Us section 3 - 4-1')}}
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{__('about.About Us section 3 - 4-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        {{__('about.About Us section 3 - 5-1')}}
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        {{__('about.About Us section 3 - 5-2')}}
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        {{__('about.About Us section 3 - 6-1')}}

                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       {{__('about.About Us section 3 - 6-2')}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/frontend') }}/lib/wow/wow.min.js"></script>
    <script>
        (function($) {
            "use strict";

            // Spinner
            var spinner = function() {
                setTimeout(function() {
                    if ($('#spinner').length > 0) {
                        $('#spinner').removeClass('show');
                    }
                }, 1);
            };
            spinner(0);


            // Initiate the wowjs
            new WOW().init();


            // Header carousel
            $(".header-carousel").owlCarousel({
                animateOut: 'fadeOut',
                items: 1,
                margin: 0,
                stagePadding: 0,
                autoplay: true,
                smartSpeed: 1000,
                dots: false,
                loop: true,
                nav: true,
                navText: [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
            });


            // Service-carousel
            $(".service-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 2000,
                center: false,
                dots: false,
                loop: true,
                margin: 25,
                nav: true,
                navText: [
                    '<i class="bi bi-arrow-left"></i>',
                    '<i class="bi bi-arrow-right"></i>'
                ],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 2
                    },
                    992: {
                        items: 2
                    },
                    1200: {
                        items: 2
                    }
                }
            });


            // testimonial carousel
            $(".testimonial-carousel").owlCarousel({
                autoplay: true,
                smartSpeed: 1500,
                center: false,
                dots: true,
                loop: true,
                margin: 25,
                nav: false,
                navText: [
                    '<i class="fa fa-angle-right"></i>',
                    '<i class="fa fa-angle-left"></i>'
                ],
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 1
                    },
                    768: {
                        items: 1
                    },
                    992: {
                        items: 1
                    },
                    1200: {
                        items: 2
                    }
                }
            });


            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').fadeIn('slow');
                } else {
                    $('.back-to-top').fadeOut('slow');
                }
            });
            $('.back-to-top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 1500, 'easeInOutExpo');
                return false;
            });


        })(jQuery);
    </script>
@endsection
