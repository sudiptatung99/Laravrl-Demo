<div class="nk-sidebar is-light nk-sidebar-fixed " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('admin.dashboard') }}" class="logo-link nk-sidebar-logo">
                <h2>Admin</h2>
                {{-- <img class="logo-light logo-img" src="images/logo.png" srcset="/demo9/images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="images/logo-dark.png" srcset="/demo9/images/logo-dark2x.png 2x"alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="images/logo-small.png" srcset="/demo9/images/logo-small2x.png 2x" alt="logo-small"> --}}
            </a>
        </div>

        <div class="nk-menu-trigger me-n2"><a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
                data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a></div>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>
                    <li class="nk-menu-item"><a href="{{ route('admin.dashboard') }}" class="nk-menu-link"><span
                                class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span><span
                                class="nk-menu-text">
                                Dashboard</span></a></li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Pages</h6>
                    </li>
                    <li class="nk-menu-item"><a href="{{ route('admin.users') }}" class="nk-menu-link"><span
                                class="nk-menu-icon"><i class="fas fa-user"></i></span><span class="nk-menu-text">User
                                List</span></a></li>

                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span><span
                                class="nk-menu-text">Project</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('admin.dummy') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Project List</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('admin.dummy.create') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">New Project
                                    </span></a></li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub"><a href="#" class="nk-menu-link nk-menu-toggle"><span
                                class="nk-menu-icon">   <i class="fas fa-users"></i></span><span
                                class="nk-menu-text">Roles Management</span></a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item"><a href="{{ route('admin.role.create') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">Add Role</span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('admin.role.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Role List
                                    </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('admin.user.role.create') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">Add User Role
                                    </span></a></li>
                            <li class="nk-menu-item"><a href="{{ route('admin.user.role.index') }}"
                                    class="nk-menu-link"><span class="nk-menu-text">User Role List
                                    </span></a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
