<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="title" content="O'Buchi Multimedia" />
        <meta name="author" content="Abraham Odianjo" />
        <meta name="keywords" content="Abuja, grahpics design, web development, website developmenent, photography, videography, content creation, social media, " />
        <meta name="description" content="This is O'Buchi Multimedia website. This site is used and runned by the odianjo family, we offer the services as seen below on the website. So feel free to reach us for further businesses." />
    
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />

		<link rel="shortcut icon" type="image/x-icon" href="  {{asset('frontend/assets/img/favicon.png')}}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/slick.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/default.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="  {{asset('frontend/assets/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
       
       
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
    @include('frontend.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
            @yield('main')

        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
      @include('frontend.body.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->
		
		 <script src="//code.tidio.co/0hyx55lmhcfnsebg6lbwpaqutbe9tv2a.js" async></script>
        <script src=" {{asset('frontend/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/element-in-view.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/slick.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/ajax-form.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/wow.min.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/plugins.js')}}"></script>
        <script src=" {{asset('frontend/assets/js/main.js')}}"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type','info') }}"
                switch(type){
                    case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                    case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                    case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                    case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break; 
            }
            @endif 
        </script>
            <!--tinymce js-->
    </body>
</html>
