@extends('frontend.main_master')
@section('main')

    @php

        $allfooter = App\Models\Footer::find(1);

    @endphp

@section('title')
    Home | O'buchi Multimedia
@endsection
<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->
<!-- partner-area -->
@include('frontend.home_all.clients')
<!-- partner-area-end -->
<!-- about-area -->
<!--@include('frontend.home_all.home_about')-->
<!-- about-area-end -->


<!-- services-area -->
@include('frontend.home_all.services')
<!-- services-area-end -->

<!-- work-process-area -->
<section class="work__process">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section__title text-center">
                    <span class="sub-title">Working Process</span>
                    <h2 class="title">A clear product design process is the basis of success</h2>
                </div>
            </div>
        </div>
        <div class="row work__process__wrap">
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 01</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon01.png') }}"
                            alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon01.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Discover</h4>
                        <p>Initial ideas or inspiration & Establishment of user needs.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 02</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon02.png') }}"
                            alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon02.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Define</h4>
                        <p>Interpretation & Alignment of findings to project objectives.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 03</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon03.png') }}"
                            alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon03.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Develop</h4>
                        <p>Design-Led concept and Proposals hearted & assessed</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="work__process__item">
                    <span class="work__process_step">Step - 04</span>
                    <div class="work__process__icon">
                        <img class="light" src="{{ asset('frontend/assets/img/icons/wp_light_icon04.png') }}"
                            alt="">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/wp_icon04.png') }}" alt="">
                    </div>
                    <div class="work__process__content">
                        <h4 class="title">Deliver</h4>
                        <p>Process outcomes finalised & Implemented</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- work-process-area-end -->

<!-- portfolio-area -->

@include('frontend.home_all.portfolio')

<!-- portfolio-area-end -->

<!-- blog-area -->
@include('frontend.home_all.home_blog')
<!-- blog-area-end -->


<!-- testimonial-area -->
<section class="testimonial testimonial__style__two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-11">
                <div class="testimonial__wrap">
                    <div class="section__title text-center">
                        <span class="sub-title"> Client Feedback</span>
                        <h2 class="title">Some happy clients feedback</h2>
                    </div>
                    <div class="testimonial__two__active">
                        <div class="testimonial__item">
                            <div class="testimonial__icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial__content">
                                <p>this company's Media Services & Branding offerings, Project Management expertise, CSR
                                    initiatives, and Website & Design capabilities make them a highly reliable and
                                    valuable partner for businesses seeking effective communication strategies,
                                    successful project execution, and impactful social contributions.</p>
                                <div class="testimonial__avatar">
                                    <span> Baceni Leather World </span>
                                    <div class="testi__avatar__img">
                                        <img src="{{ asset('frontend/assets/img/images/testi_avatar01.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="testimonial__icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial__content">
                                <p>O'buchi multimedia's Website & Design services are exceptional. They offer
                                    professional website design for company profiles, enabling businesses to establish a
                                    strong online presence. By creating visually appealing and user-friendly websites,
                                    they effectively drive traffic and increase visibility for their clients.</p>
                                <div class="testimonial__avatar">
                                    <span>Dians Digital</span>
                                    <div class="testi__avatar__img">
                                        <img src="{{ asset('frontend/assets/img/images/testi_avatar02.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial__arrow"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__two__icons">
        <ul>
            <li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
            <li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
            <li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
            <li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
            <li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
            <li><img src="assets/img/icons/testi_shape06.png" alt=""></li>
        </ul>
    </div>
</section>
<!-- testimonial-area-end -->



<br>
<br>
<br>
<br>


<br>
<br>
<br>
<br>

<br>
<br>




<!-- contact-area -->
<section class="homeContact">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">

                        <h2 class="title">Any questions?</h2>
                    </div>
                    <div class="homeContact__content">
                        <p> Feel free to contact us for further information or clarification.We are here to assist you
                            and address any inquiries you may have.</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">{{ $allfooter->email }}</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form method="post" action="{{ route('store.message') }}">
                            @csrf
                            <input type="text" placeholder="Enter name*">
                            <input type="email" placeholder="Enter mail*">
                            <input type="number" placeholder="Enter number*">
                            <textarea name="message" placeholder="Enter Massage*"></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
