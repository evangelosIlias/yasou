@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Contact Message</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Message</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Contact name</th>
                                <th>Contact Email</th>
                                <th>Contact Subject</th>
                                <th>Contact Number</th>
                                <th>Contact Message</th>
                                <th>Contact Day</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($contactMessage as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $item->contact_name }}</td>
                                <td>{{ $item->contact_email }}</td>
                                <td>{{ $item->contact_subject }}</td>
                                <td>{{ $item->contact_number }}</td>
                                <td>
                                    <!-- The button to trigger the pop-up -->
                                    <button type="button" class="btn btn-warning" id="showMessageButton">
                                        {{ $item->contact_message }}
                                    </button>

                                <td>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('delete.contact.message', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id='delete'><i class="fas fa-trash"></i></a>    
                                </td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> 
            <!-- end col -->
        </div> 
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->

<!-- End Section-->
@endsection


 

