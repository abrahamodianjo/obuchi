@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
    <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit Profile Page</h4>

                        <form>
                         <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" class="form-control" type="text" value="{{$editData->name}}" id="example-text-input">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Email</label>
                            <div class="col-sm-10">
                                <input name="email" class="form-control" type="email" value="{{$editData->email}}" id="example-text-input">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input name="username" class="form-control" type="username" value="{{$editData->username}}" id="example-text-input">
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Profile image</label>
                            <div class="col-sm-10">
                                <input name="profile_image" class="form-control" type="file"  id="example-text-input">
                            </div>
                        </div>

                        <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                            <img class="rounded avatar-lg" src="{{asset('backend/assets/images/users/avatar-1.png')}}" alt="Card image cap">
                            </div>
                        </div>
                        <!--end form-->

                        <input type="submit" class="btn btn-danger  waves-effect waves-light" value="Update Profile">
                        </form>
                    
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>


@endsection