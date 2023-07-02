@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        {{-- Form start --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
            
                        <h4 class="card-title">Change Password Page </h4><br>
                        
                        @if (count($errors))
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible fade show">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form method="post" action="{{ route('update.password') }}">
                            @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Old Password </label>
                            <div class="col-sm-10">
                                <input name="oldpassword" class="form-control" type="password" id="oldpassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> New Password </label>
                            <div class="col-sm-10">
                                <input name="newpassword" class="form-control" type="password" id="newpassword">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> Confirm Password </label>
                            <div class="col-sm-10">
                                <input name="confirmpassword" class="form-control" type="password" id="confirmpassword">
                            </div>
                        </div>
                         <!-- end row -->     
        
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Password">
                        </form>
                    </div>
                </div>

    </div>
</div>


@endsection