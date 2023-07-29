@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Mutli Image All</h4>

                    {{-- <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Data Tables</li>
                        </ol>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Tech Mutli Image All</h4>
                        {{-- <p class="card-title-desc">DataTables has most features enabled by
                            default, so all you need to do to use it with your own tables is to call
                            the construction function:
                            {{-- <code>$().DataTable();</code>
                        </p> --}}

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tech image all</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php($i = 1)
                                @foreach ($allTechMultiImage as $item)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><img src="{{ asset($item->tech_multi_image) }}" style="width: 60px; height: 60px;"></td>
                                <td>
                                <a href="{{ route('edit.tech.multi.image', $item->id) }}" class="btn btn-info sm" title="Edit Data"><i class="fas fa-edit"></i></a> 
                                <a href="{{ route('delete.tech.multi.image', $item->id) }}" class="btn btn-danger sm" title="Delete Data" id='delete'><i class="fas fa-trash"></i></a>    
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