@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Contact Message From {{ $contacts->name }}</h4>
            
            <form method="get" action="{{ route('delete.message', $contacts->id) }}" >
                @csrf

                <input type="hidden" name="id" value="{{ $contacts->id }}">

               
                 <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Subject </label>
                <div class="col-sm-10">
                    <input name="subject" class="form-control" type="text" value="{{ $contacts->subject }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Email </label>
                <div class="col-sm-10">
                    <input name="email" class="form-control" type="text" value="{{ $contacts->email }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->
           
                <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10">
                    <input name="phone" class="form-control" type="text" value="{{ $contacts->phone }}"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">message </label>
                <div class="col-sm-10">
                <textarea required="" name="email" class="form-control" rows="5">{{ $contacts->message }}</textarea>
                </div>
            </div>
            <!-- end row -->

           
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
