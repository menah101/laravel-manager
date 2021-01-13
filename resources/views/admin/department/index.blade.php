<!-- DataTables -->
<link href="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

@extends('admin.layouts.main')
@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title mb-0 ">Department</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Departments</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                @if(isset(auth()->user()->role->permission['name']['department']['can-add']))
                                <a href="{{route('departments.create')}}" class="btn btn-primary btn-rounded">
                                    <i class="ti-settings mr-1"></i> Add News
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-12">
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    {{Session::get('message')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">List Department</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($departments)>0)
                                @foreach($departments as $key=>$department)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$department->name}}</td>
                                    <td>{{$department->description}}</td>
                                    <td>
                                        <div class=" button-items">
                                            @if(isset(auth()->user()->role->permission['name']['department']['can-edit']))
                                            <a href="{{route('departments.edit',[$department->id])}}" class="btn btn-secondary waves-effect">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            @endif
                                            @if(isset(auth()->user()->role->permission['name']['department']['can-delete']))
                                            <button href="#" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal{{$department->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            @endif
                                            <div id="myModal{{$department->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="{{route('departments.destroy', [$department->id])}}" method="post">
                                                        @csrf
                                                        {{method_field('DELETE')}}
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myModalLabel">Delete Confirm</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Do you want to delete?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Delete</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </form>
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <td>No Data to display</td>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->

</div>

@endsection

<!-- Required datatable js -->
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/buttons.colVis.min.js')}}"></script>
<!-- Responsive examples -->
<script src="{{asset('backend/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

<!-- Datatable init js -->
<script src="{{asset('backend/assets/pages/datatables.init.js')}}"></script>
