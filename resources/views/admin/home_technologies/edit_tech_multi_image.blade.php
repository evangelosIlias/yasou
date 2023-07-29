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
            
                        <h4 class="card-title">Update Tech Multi Image </h4>
            
                        <form method="post" action="{{ route('update.tech.multi.image') }}" enctype="multipart/form-data">
                            @csrf

                        <input type="hidden" name="id" value="{{ $editTechMultiImage->id}}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded-circle avatar-lg" src="{{ asset($editTechMultiImage->tech_multi_image) }}" alt="Card image cap" style="width: 200px; height: 200px; border: 5px solid rgba(138, 60, 221, 0.729);">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tech Multi Image </label>
                            <div class="col-sm-10">
                                <input name="tech_multi_image" class="form-control" type="file"  id="image">
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Tech Multi Image">
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
        $('#image').change(function(e) {
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