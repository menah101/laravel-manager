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
                                <li class="breadcrumb-item"><a href="{{route('permissions.index')}}">Permissions</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Permission</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{route('permissions.store')}}" method="post">
            @csrf
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                {{Session::get('message')}}
            </div>
            @endif
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Select Role</h4>
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                    <option value="">Select Role</option>
                                    @foreach(App\Role::all() as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Select Permission</h4>
                            <table class="table table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th>Permission</th>
                                        <th>Can add</th>
                                        <th>Can edit</th>
                                        <th>Can view</th>
                                        <th>Can delete</th>
                                        <th>Can list</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Department</td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-add]" value="1" id="department1" switch="success" />
                                            <label for="department1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-edit]" value="1" id="department2" switch="success" />
                                            <label for="department2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-view]" value="1" id="department3" switch="success" />
                                            <label for="department3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-delete]" value="1" id="department4" switch="success" />
                                            <label for="department4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-list]" value="1" id="department5" switch="success" />
                                            <label for="department5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-add]" value="1" id="role1" switch="success" />
                                            <label for="role1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-edit]" value="1" id="role2" switch="success" />
                                            <label for="role2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-view]" value="1" id="role3" switch="success" />
                                            <label for="role3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-delete]" value="1" id="role4" switch="success" />
                                            <label for="role4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-list]" value="1" id="role5" switch="success" />
                                            <label for="role5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Permission</td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-add]" value="1" id="permission1" switch="success" />
                                            <label for="permission1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-edit]" value="1" id="permission2" switch="success" />
                                            <label for="permission2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-view]" value="1" id="permission3" switch="success" />
                                            <label for="permission3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-delete]" value="1" id="permission4" switch="success" />
                                            <label for="permission4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-list]" value="1" id="permission5" switch="success" />
                                            <label for="permission5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-add]" value="1" id="user1" switch="success" />
                                            <label for="user1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-edit]" value="1" id="user2" switch="success" />
                                            <label for="user2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-view]" value="1" id="user3" switch="success" />
                                            <label for="user3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-delete]" value="1" id="user4" switch="success" />
                                            <label for="user4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-list]" value="1" id="user5" switch="success" />
                                            <label for="user5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group mt-3 mb-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </form>

    </div> <!-- container-fluid -->

</div>

@endsection
<script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
