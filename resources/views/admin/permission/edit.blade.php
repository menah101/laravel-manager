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
                                <li class="breadcrumb-item active" aria-current="page">Permission Update</li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- end row -->

        <form action="{{route('permissions.update', [$permission->id])}}" method="post">
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">{{$permission->role->name}}</h4>
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
                                            <input type="checkbox" name="name[department][can-add]" @if(isset($permission['name']['department']['can-add'])) checked @endif value="1" id="department1" switch="success" />
                                            <label for="department1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-edit]" @if(isset($permission['name']['department']['can-edit'])) checked @endif value="1" id="department2" switch="success" />
                                            <label for="department2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-view]" @if(isset($permission['name']['department']['can-view'])) checked @endif value="1" id="department3" switch="success" />
                                            <label for="department3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-delete]" @if(isset($permission['name']['department']['can-delete'])) checked @endif value="1" id="department4" switch="success" />
                                            <label for="department4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[department][can-list]" @if(isset($permission['name']['department']['can-list'])) checked @endif value="1" id="department5" switch="success" />
                                            <label for="department5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-add]" @if(isset($permission['name']['role']['can-add'])) checked @endif value="1" id="role1" switch="success" />
                                            <label for="role1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-edit]" @if(isset($permission['name']['role']['can-edit'])) checked @endif value="1" id="role2" switch="success" />
                                            <label for="role2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-view]" @if(isset($permission['name']['role']['can-view'])) checked @endif value="1" id="role3" switch="success" />
                                            <label for="role3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-delete]" @if(isset($permission['name']['role']['can-delete'])) checked @endif value="1" id="role4" switch="success" />
                                            <label for="role4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[role][can-list]" @if(isset($permission['name']['role']['can-list'])) checked @endif value="1" id="role5" switch="success" />
                                            <label for="role5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Permission</td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-add]" @if(isset($permission['name']['permission']['can-add'])) checked @endif value="1" id="permission1" switch="success" />
                                            <label for="permission1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-edit]" @if(isset($permission['name']['permission']['can-edit'])) checked @endif value="1" id="permission2" switch="success" />
                                            <label for="permission2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-view]" @if(isset($permission['name']['permission']['can-view'])) checked @endif value="1" id="permission3" switch="success" />
                                            <label for="permission3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-delete]" @if(isset($permission['name']['permission']['can-delete'])) checked @endif value="1" id="permission4" switch="success" />
                                            <label for="permission4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[permission][can-list]" @if(isset($permission['name']['permission']['can-list'])) checked @endif value="1" id="permission5" switch="success" />
                                            <label for="permission5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>User</td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-add]" @if(isset($permission['name']['user']['can-add'])) checked @endif value="1" id="user1" switch="success" />
                                            <label for="user1" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-edit]" @if(isset($permission['name']['user']['can-edit'])) checked @endif value="1" id="user2" switch="success" />
                                            <label for="user2" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-view]" @if(isset($permission['name']['user']['can-view'])) checked @endif value="1" id="user3" switch="success" />
                                            <label for="user3" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-delete]" @if(isset($permission['name']['user']['can-delete'])) checked @endif value="1" id="user4" switch="success" />
                                            <label for="user4" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                        <td>
                                            <input type="checkbox" name="name[user][can-list]" @if(isset($permission['name']['user']['can-list'])) checked @endif value="1" id="user5" switch="success" />
                                            <label for="user5" data-on-label="Yes" data-off-label="No"></label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-group mt-3 mb-0">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Update
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
