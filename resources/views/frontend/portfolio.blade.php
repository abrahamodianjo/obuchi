@extends('frontend.main_master')
@section('main')


    @php

        $allfooter = App\Models\Footer::find(1);

    @endphp

@section('title')
    Portfolio | O'buchi Multimedia
@endsection

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">Welcome to our Portfolio Page</h2>
                        <p>Here you can find the latest projects we have done in the past</p>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-area -->
    <section class="portfolio__inner">
        <div class="container">

            <div class="portfolio__inner__active">

                @foreach ($portfolio as $item)
                    <div class="portfolio__inner__item grid-item cat-two cat-three">
                        <div class="row gx-0 align-items-center">
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__thumb">
                                    <a href="{{ route('portfolio.details', $item->id) }}">
                                        <img src="{{ asset($item->portfolio_image) }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-10">
                                <div class="portfolio__inner__content">
                                    <h2 class="title"><a
                                            href="{{ route('portfolio.details', $item->id) }}">{{ $item->portfolio_title }}</a>
                                    </h2>
                                    <p>{!! Str::limit($item->portfolio_description, 200) !!} </p>
                                    <a href="{{ route('portfolio.details', $item->id) }}" class="link">View Case
                                        Study</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
        
    </section>

    <section class="homeContact">
        <div class="container">
            <style>
                .pagination-wrap {
        
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            </style>
            <div class="pagination-wrap">
                {{ $portfolio->links('vendor.pagination.custom') }}
            </div>
        </div>
    </section>
    
    
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
                            <p> Feel free to contact us for further information or clarification.We are here to assist
                                you and address any inquiries you may have.</p>
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

</main>


@endsection
