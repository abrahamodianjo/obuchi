<!-- <section class="testimonial testimonial__style__two">
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
             
            </section> -->





<section class=" testimonial testimonial__style__two" >
                <div class="container">
                    <div class="testimonial__wrap">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-xl-5 col-lg-6 col-md-8">
                                <div class="section__title">
                                <span class="sub-title"> Top Clients</span>
                                    <h2 class="title">Our Partners</h2>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-4">
                                <div class="services__arrow-2"></div>
                            </div>
                        </div>
                    </div>

                    @php
                    $clients = App\Models\Clients::latest()->get();
                    @endphp

                    <div class="row gx-0 services__active-2">
                    @foreach($clients as $item)
                        <div class="col-xl-3" >
                            <div class="services__item">
                                <div class="services__thumb"><br<<br>
                                <img src="{{ asset($item->clients_image) }}" alt="" style="width: 150px;  height:100px;">
                                </div>
                                <!-- <h5 class="title">{{$item->clients_title}}</h5> -->
                                    <!-- <p>{{$item->clients_title}}</p> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>