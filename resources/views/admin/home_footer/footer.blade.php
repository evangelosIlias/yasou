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
            
                        <h4 class="card-title">Home Footer Page </h4><br><br>
            
                        <form method="post" action="{{ route('update.footer') }}">
                            @csrf

                        <input type="hidden" name='id' value="{{ $homeFooter->id }}">

                        {{-- Footer Number --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Number</label>
                            <div class="col-sm-10">
                                <input name="footer_number" class="form-control" type="text" value="{{ $homeFooter->footer_number }}"  id="example-text-input">
                            </div>
                        </div>
                        <!-- end row -->

                        {{-- Footer Address --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Address</label>
                            <div class="col-sm-10">
                                <input name="footer_address" class="form-control" type="text" value="{{ $homeFooter->footer_address }}"  id="example-text-input">
                            </div>
                        </div>

                        {{-- Footer Email --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Email</label>
                            <div class="col-sm-10">
                                <input name="footer_email" class="form-control" type="text" value="{{ $homeFooter->footer_email }}"  id="example-text-input">
                            </div>
                        </div>

                        {{-- Footer Linkedin --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Linkedin</label>
                            <div class="col-sm-10">
                                <input name="footer_linkedin" class="form-control" type="text" value="{{ $homeFooter->footer_linkedin }}"  id="example-text-input">
                            </div>
                        </div>

                        {{-- Footer Copyright --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Copyright</label>
                            <div class="col-sm-10">
                                <input name="footer_copyright" class="form-control" type="text" value="{{ $homeFooter->footer_copyright }}"  id="example-text-input">
                            </div>
                        </div>

                        {{-- Footer Short Descritpion --}}
                        {{-- id="elm1" --}}
                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Footer Short Description</label>
                            <div class="col-sm-10">
                                <textarea name="footer_short_description" class="form-control" rows="7">{{ $homeFooter->footer_short_description }}</textarea>
                            </div>
                        </div>
                        <!-- end row -->
            
                        <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Footer">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Section -->
@endsection


