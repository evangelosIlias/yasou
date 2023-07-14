@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="card"><br><br>
                    <div class="text-center">
                        <img id="showImage" class="rounded-circle avatar-lg" src="{{ (!empty($adminData->profile_image)) ? url('upload/admin_images/'.$adminData->profile_image) : url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Name: {{ $adminData->name }}</h4>
                        <hr>
                        <h4 class="card-title">User Email: {{ $adminData->email }}</h4>
                        <hr>
                        <h4 class="card-title">User Name: {{ $adminData->username }}</h4>
                        <hr>
                        <a href="{{ route('edit.profile')}}"class="btn btn-info waves-effect waves-light">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection