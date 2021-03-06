 <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">                    

                        <li class="nav-item{{(request()->is('dashboard')) ? ' active open':''}}">
                        <a href="{{route('dashboard.index')}}" class="nav-link nav-toggle"><i class="icon-home"></i> <span class="title">Dashboard</span></a></li> 

                        <li class="heading">
                            <h3 class="uppercase">RBAC System</h3>
                        </li>
                        <li class="nav-item {{(request()->is(['user/add','users','user/edit'])) ? ' active open':''}}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-user"></i>
                                <span class="title">Users</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item{{(request()->is('users')) ? ' active open':''}}">
                                    <a href="{{route('users.index')}}" class="nav-link ">
                                        <span class="title">List Users</span>
                                    </a>
                                </li>

                                 <li class="nav-item{{(request()->is('roles')) ? ' active open':''}}">
                                    <a href="{{route('roles.index')}}" class="nav-link ">
                                        <span class="title">Roles</span>
                                    </a>
                                </li>

                                <li class="nav-item{{(request()->is('permissions')) ? ' active open':''}}">
                                    <a href="{{route('permissions.index')}}" class="nav-link ">
                                        <span class="title">Permissions</span>
                                    </a>
                                </li>                                
                            </ul>
                        </li>
                        
                        <li class="nav-item{{(request()->is('mydivisions')) ? ' active open':''}}">
                        <a href="{{route('my.divisions')}}" class="nav-link nav-toggle"><i class="icon-home"></i> <span class="title">My Divisions</span></a></li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->