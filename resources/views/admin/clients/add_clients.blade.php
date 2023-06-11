@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add New Client Page </h4>
            
            <form method="post" action="{{ route('store.clients') }}" enctype="multipart/form-data">
                @csrf


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Client Title</label>
                <div class="col-sm-10">
                    <input name="clients_title" class="form-control" type="text"   id="example-text-input">
                    @error('clients_title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Clients Image </label>
                <div class="col-sm-10">
                    <input name="clients_image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

         

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->
        <input type="submit" class="btn btn-danger waves-effect waves-light" value="Insert Client Data">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 
