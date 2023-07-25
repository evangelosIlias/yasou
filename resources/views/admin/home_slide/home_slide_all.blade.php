@extends('admin.admin_master')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">
        {{-- Form start --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
            
                        <h4 class="card-title">Home Slide Page </h4>
            
                        <form method="post" action="{{ route('update.slide') }}" enctype="multipart/form-data">
                            @csrf

                        <input type="hidden" name='id' value="{{ $homeslide->id }}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ (!empty($homeslide->home_image)) ? url($homeslide->home_image) : url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                        </div>
                            <!-- end row -->     
                               
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" class="form-control" type="text" value="{{ $homeslide->title }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                            <div class="col-sm-10">
                                <input name="short_title" class="form-control" type="text" value="{{ $homeslide->short_title }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                            <div class="col-sm-10">
                                <input name="video_url" class="form-control" type="text" value="{{ $homeslide->video_url }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Home Image </label>
                            <div class="col-sm-10">
                                <input name="home_image" class="form-control" type="file"  id="home_image">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Slide">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#home_image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

 <!-- End Section -->   
@endsection