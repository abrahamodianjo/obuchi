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