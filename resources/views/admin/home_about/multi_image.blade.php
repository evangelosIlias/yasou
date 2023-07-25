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
            
                        <h4 class="card-title">Add Multi Image </h4>
            
                        <form method="post" action="{{ route('store.multi.image') }}" enctype="multipart/form-data">
                            @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ url('upload/no_image.svg') }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Multi Image </label>
                            <div class="col-sm-10">
                                <input name="mutli_image[]" class="form-control" type="file"  id="mutli_image" multiple="">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Multi Image">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Js --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#mutli_image').change(function(e) {
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