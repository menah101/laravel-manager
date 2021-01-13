<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="{{url('/dashboard')}}" class="waves-effect">
                        <i class="dripicons-meter"></i><span class="badge badge-info badge-pill float-right">2</span>
                        <span> Dashboard </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-department"></i><span> Department
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="{{route('departments.index')}}">Department List</a></li>
                    </ul>
                </li>

                @if(isset(auth()->user()->role->permission['name']['role']['can-list']))
                <li>
                    <a href="{{route('roles.index')}}" class="waves-effect"><i class="dripicons-user"></i><span> Role
                        </span></a>
                </li>
                @endif

                @if(isset(auth()->user()->role->permission['name']['user']['can-list']))
                <li>
                    <a href="{{route('users.index')}}" class="waves-effect"><i class="dripicons-user"></i><span> User Maneger
                        </span></a>
                </li>
                @endif

                @if(isset(auth()->user()->role->permission['name']['permission']['can-list']))
                <li>
                    <a href="{{route('permissions.index')}}" class="waves-effect"><i class="dripicons-permission"></i><span> Permission
                        </span></a>
                </li>
                @endif

                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span> Configs
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris.html">Socials</a></li>
                        <li><a href="charts-chartist.html">Footer</a></li>
                        <li><a href="charts-chartjs.html">Logo</a></li>
                        <li><a href="charts-flot.html">Mail</a></li>
                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
