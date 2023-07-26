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
            
                        <h4 class="card-title">Portfolio Edit Page </h4>
            
                        <form method="post" action="{{ route('update.portfolio')}}" enctype="multipart/form-data">
                            @csrf

                        <input type="hidden" name="id" value="{{ $editPortfolio->id}}">   

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ (!empty($editPortfolio->portfolio_image)) ? url($editPortfolio->portfolio_image) : url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                            </div>
                            <!-- end row -->     
                               
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Name</label>
                            <div class="col-sm-10">
                                <input name="portfolio_name" class="form-control" type="text" value="{{ $editPortfolio->portfolio_name }}" id="example-text-input">
                                @error('portfolio_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Title</label>
                            <div class="col-sm-10">
                                <input name="portfolio_title" class="form-control" type="text" value="{{ $editPortfolio->portfolio_title }}" id="example-text-input">
                                @error('portfolio_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Description</label>
                            <div class="col-sm-10">
                                <textarea name="portfolio_description" class="form-control" rows="7">{{ $editPortfolio->portfolio_description }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Portfolio Image </label>
                            <div class="col-sm-10">
                                <input name="portfolio_image" class="form-control" type="file" id="portfolio_image">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Portfolio Data">
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
        $('#portfolio_image').change(function(e) {
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


