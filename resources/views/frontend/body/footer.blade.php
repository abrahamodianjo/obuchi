@php

$allfooter = App\Models\Footer::find(1);

@endphp

<footer class="footer">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Contact us</h5>
                                
                            </div>
                            <div class="footer__widget__text">
                                <p>{{ $allfooter->short_description }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">my address</h5>
                               
                            </div>
                            <div class="footer__widget__address">
                                <p class="mail">{{ $allfooter->address }}</p>
                                <p class="mail">{{$allfooter->number}}</p>
                                <a href="mailto:{{ $allfooter->email }}" class="mail">{{ $allfooter->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="footer__widget">
                            <div class="fw-title">
                                <h5 class="sub-title">Follow us</h5>
                             
                            </div>
                            <div class="footer__widget__social">
                                
                                <ul class="footer__social__list">
                                    <li><a href="{{ $allfooter->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ $allfooter->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{ $allfooter->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright__wrap">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright__text text-center">
                                <p>{{ $allfooter->copyright }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>