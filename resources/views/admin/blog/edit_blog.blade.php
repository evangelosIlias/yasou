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
                        <h4 class="card-title">Add Blog Page </h4>
                        
                        {{-- Form Section Starts Here --}}
                        <form method="post" action="{{ route('update.blog', $editBlog->id )}}" enctype="multipart/form-data">
                            @csrf
                        
                        {{-- Show the Image on the Top Page--}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ (!empty($editBlog->blog_image)) ? url($editBlog->blog_image) : url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                        </div>
                        {{-- {{ (!empty($portfolio->portfolio_image)) ? url($portfolio->portfolio_image) : --}}
                        <!-- end row --> 

                        {{-- Show the Blog Category Name--}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Category Name</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="blog_category_id" aria-label="Default select example">
                                    <option selected="">Select Category</option>
                                    @foreach($categories as $cat)
                                        <option value="{{ $cat->id }}" 
                                            {{ $cat->id == $editBlog->blog_category_id ? 'selected' : ''}}>{{ $cat->blog_category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Title --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Title</label>
                            <div class="col-sm-10">
                                <input name="blog_title" class="form-control" value="{{ $editBlog->blog_title }}" type="text" id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Tag --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Tags</label>
                            <div class="col-sm-10">
                                <input name="blog_tags" type="text" value="{{ $editBlog->blog_tags }}" data-role="tagsinput">
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Description --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Description</label>
                            <div class="col-sm-10">
                                <textarea name="blog_description" class="form-control" rows="7">{{ $editBlog->blog_description }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Show the Blog Image --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Blog Image</label>
                            <div class="col-sm-10">
                                <input name="blog_image" class="form-control" value="{{ asset($editBlog->blog_image) }}" type="file" id="blog_image">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Blog Data">
                        </form>
                    </div>
                </div>
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


