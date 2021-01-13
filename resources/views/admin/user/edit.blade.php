@extends('admin.layouts.main')
@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="page-title mb-0 ">User</h4>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit user</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->
        <form action="{{route('users.update', [$user->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{Session::get('message')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">General Information</h4>
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror" />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" value="{{$user->address}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Mobile number</label>
                                <input type="text" name="mobile_number" value="{{$user->mobile_number}}" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Department</label>
                                <select class="form-control @error('department_id') is-invalid @enderror" name="department_id">
                                    <option value="">Select Department</option>
                                    @foreach(App\Department::all() as $department)
                                    <option value="{{$department->id}}" @if($user->department_id==$department->id) selected @endif>{{$department->name}}</option>
                                    @endforeach
                                </select>
                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Designation</label>
                                <input type="text" name="designation" value="{{$user->designation}}" class="form-control @error('designation') is-invalid @enderror" />
                                @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Strat Date</label>
                                <input class="form-control" name="start_from" value="{{$user->start_from}}" type="date" />
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" accept="images/*" class="filestyle" data-buttonname="btn-secondary" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Login Information</h4>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$user->email}}" class="form-control @error('email') is-invalid @enderror" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                                    <option value="">Select Role</option>
                                    @foreach(App\Role::all() as $role)
                                    <option value="{{$role->id}}" @if($user->role_id==$role->id) selected @endif>{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end row -->

    </div> <!-- container-fluid -->

</div>
@endsection
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
