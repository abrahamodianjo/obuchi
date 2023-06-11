@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h2 class="mb-sm-0">Dashboard</h2>

                    

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('home.slide')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/1.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('all.blog')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/2.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->

            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('all.portfolio')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/3.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('all.services')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/4.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            
        </div><!-- end row/Top side --> 

    
        <div class="row">
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('about.page')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/5.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('all.clients')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/6.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->

            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{ route('contact.message') }}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/7.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            <div class="col-md-6 col-xl-3">
                
                <!-- Simple card -->
                <div class="card">
                <a href="{{route('footer.setup')}}"> 
                    <img class="card-img-top img-fluid" 
                            src="{{asset('backend/assets/images/dashboard/8.png')}}" 
                                    alt="Card image cap">
                </a>                          
                </div>

            </div>
            <!-- end col -->
            
        </div><!-- end row -->
    </div>

</div>
    @endsection(admin)