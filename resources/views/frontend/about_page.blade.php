@extends('frontend.main_master')
@section('main')

@php

$allfooter = App\Models\Footer::find(1);
$services = App\Models\Services::latest()->get();
                
@endphp

@section('title')
About | O'buchi Multimedia

@endsection

<main>

<!-- breadcrumb-area -->
<section class="breadcrumb__wrap">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10">
                <div class="breadcrumb__wrap__content">
                    <h2 class="title">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Me</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
<section class="about about__style__two">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about__image">
                    <img src="{{ $aboutpage->about_image }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        
                        <h2 class="title">{{ $aboutpage->title }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png')}}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p><span>{{ $aboutpage->short_title }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $aboutpage->short_description }}</p>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about__info__wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                                role="tab" aria-controls="about" aria-selected="true">Who We Are & What We Stand For</button>
                        </li>
                     
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                            <p class="desc">
                                {!! $aboutpage->long_description !!}
                            </p>
                           
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->

<!-- services-area -->
<section class="services__style__two">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section__title text-center">
                    <span class="sub-title"> Our Services</span>
                    <h2 class="title">Provide awesome service</h2>
                </div>
            </div>
        </div>
    
       
                   
        <div class="services__style__two__wrap">
      
            <div class="row gx-0">
            @foreach($services as $item)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="services__style__two__item">
                        <div class="services__thumb">
                        <a href="#"><img src="{{ asset($item->services_image) }}" alt=""></a>
                        </div>
                        <div class="services__style__two__content">
                            <h3 class="title">{{($item->services_title) }}</h3>
                            <p>{!! $item->services_description !!}</p>
                              </div>
                    </div>
                </div>
                @endforeach
            </div>
      
        </div>
    </div>
    </div>
</section>
<!-- services-area-end -->

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
                                <p>this company's Media Services & Branding offerings, Project Management expertise, CSR initiatives, and Website & Design capabilities make them a highly reliable and valuable partner for businesses seeking effective communication strategies, successful project execution, and impactful social contributions.</p>
                                <div class="testimonial__avatar">
                                    <span> Baceni Leather World </span>
                                    <div class="testi__avatar__img">
                                        <img src="{{asset('frontend/assets/img/images/testi_avatar01.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="testimonial__icon">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="testimonial__content">
                                <p>O'buchi multimedia's Website & Design services are exceptional. They offer professional website design for company profiles, enabling businesses to establish a strong online presence. By creating visually appealing and user-friendly websites, they effectively drive traffic and increase visibility for their clients.</p>
                                <div class="testimonial__avatar">
                                    <span>Dians Digital</span>
                                    <div class="testi__avatar__img">
                                        <img src="{{asset('frontend/assets/img/images/testi_avatar02.png')}}" alt="">
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

 <!-- blog-area -->
 @include('frontend.home_all.home_blog')
 <!-- blog-area-end -->

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
                        <p> Feel free to contact us for further information or clarification.We are here to assist you and address any inquiries you may have.</p>
                        <h2 class="mail"><a href="mailto:Info@webmail.com">{{ $allfooter->email }}</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                    <form method="post" action="{{route('store.message')}}" >
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

</main>

@endsection