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
                        <h4 class="card-title">Add   Blog Page </h4>
                        
                        {{-- Form Section Starts Here --}}
                        <form method="post" action="{{ route('store.portfolio')}}" enctype="multipart/form-data">
                            @csrf
                        
                        {{-- Show the Image on the Top Page--}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                        </div>
                        {{-- {{ (!empty($portfolio->portfolio_image)) ? url($portfolio->portfolio_image) : --}}
                        <!-- end row --> 

                        {{-- Show the Blog Category ID--}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Catercory Name</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="blog_category_id" aria-label="Default select example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    </select>
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Title --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                            <div class="col-sm-10">
                                <input name="blog_title" class="form-control" type="text" id="example-text-input">
                                @error('blog_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Tag --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                            <div class="col-sm-10">
                                <input name="blog_tags" value="close this tag and add your custom tag" type="text"  data-role="tagsinput">
                                @error('blog_tags')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Description --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description</label>
                            <div class="col-sm-10">
                                <textarea name="blog_description" class="form-control" rows="7"></textarea>
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Image --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                            <div class="col-sm-10">
                                <input name="blog_image" class="form-control" type="file" id="blog_image">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Blog Data">
                        </form>
                    </div>
                </div>
        </div>
</div>

{{-- Adding Style for tags input --}}
<style type="text/css">
    .bootstrap-tagsinput .tag{
        margin-right: 2px;
        color: #FF0077;
        font-weight: 700px;
    } 
</style>

{{-- Add Image reload --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#blog_image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            };
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

{{-- End section --}}
@endsection


