@extends('layouts.index')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Services
                </h1>
                <p class="text-white link-nav"><a href={{ route("home") }}>Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href={{ route("services") }}> Services</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
<!-- Start service Area -->
<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-50 header-text text-center">
                <h1 class="mb-10">What we offer to our clients</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Interior Design</h4></a>
                    <p>
                        Sony laptops are among the most well known laptops on today’s market. Sony is a name that over time has established itself as creating a solid product.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Architecture Design</h4></a>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing capabilities and the appearances of the graphical.
                    </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-service">
                    <a href="#"><h4>Concept Design</h4></a>
                    <p>
                        Can you imagine what we will be downloading in another twenty years? I mean who would have ever thought that you could record sound.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service Area -->
<!-- Start feature Area -->
<section class="feature-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10 text-white">Some Features that Made us Unique</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-user"></span>
                        <h4>Expert Technicians</h4>
                    </a>
                    <p>
                        Computer users and programmers have become so accustomed to using Windows, even for the changing.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-license"></span>
                        <h4>Professional Service</h4>
                    </a>
                    <p>
                        Finding the perfect learning tool for Flash is a daunting task to any novice web developer. One can find help.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-phone"></span>
                        <h4>Great Support</h4>
                    </a>
                    <p>
                        While most people enjoy casino ambling, sports betting, lottery and bingo playing for the fun and excitement.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-rocket"></span>
                        <h4>Technical Skills</h4>
                    </a>
                    <p>
                        “The moment you think of buying a Web Hosting Plan, you know one thing – So many choices, which one to choose.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-diamond"></span>
                        <h4>Highly Recomended</h4>
                    </a>
                    <p>
                        Many conventional colleges and universities are now offering online DVD repair courses, which are the exact same.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <a href="#" class="title d-flex flex-row align-items-center">
                        <span class="lnr lnr-bubble"></span>
                        <h4>Positive Reviews</h4>
                    </a>
                    <p>
                        So you have your new digital camera and clicking away to glory anything and everything in sight. Now you want.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- End feature Area -->	
@endsection
