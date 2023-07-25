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
                        <h4 class="card-title">Home Resume Page </h4>
                        <form method="post" action="{{ route('store.resume') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $homeResume->id }}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                <div class="col-sm-10">
                                    <iframe id="pdfPreview" src="{{ (!empty($homeResume->about_resume)) ? url($homeResume->about_resume) : '' }}" style="width: 100%; height: 600px; border: 1px solid #ccc;"></iframe>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Home Resume </label>
                                <div class="col-sm-10">
                                    <input name="about_resume" class="form-control" type="file" id="about_resume">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Insert Resume">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JS --}}
<script type="text/javascript">
    $(document).ready(function () {
        $('#about_resume').change(function (e) {
            var fileURL = URL.createObjectURL(e.target.files[0]);
            $('#pdfPreview').attr('src', fileURL);
        });
    });
</script>

<!-- End Section -->
@endsection
