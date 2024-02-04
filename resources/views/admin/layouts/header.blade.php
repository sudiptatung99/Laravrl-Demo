<div class="nk-header-wrap">
    <div class="nk-menu-trigger d-xl-none ms-n1 me-3"><a href="#" class="nk-nav-toggle nk-quick-nav-icon"
            data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a></div>
    <div class="nk-header-brand d-xl-none">
        <a href="{{route('admin.dashboard')}}" class="logo-link"> Admin
            {{-- <img class="logo-light logo-img" src="images/logo.png"
                srcset="/demo9/images/logo2x.png 2x" alt="logo">
            <img class="logo-dark logo-img" src="images/logo-dark.png"
                srcset="/demo9/images/logo-dark2x.png 2x" alt="logo-dark"> --}}
        </a>
    </div>
    <div class="nk-header-menu is-light">
        <div class="nk-header-menu-inner">
            <ul class="nk-menu nk-menu-main">
                <li class="nk-menu-item has-sub"><a href="#"><span class="nk-menu-text">Dashboards</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="nk-header-tools">
        <ul class="nk-quick-nav">
            {{-- @include('admin.layouts.chats')
            @include('admin.layouts.notification') --}}
            <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                    <div class="user-toggle">
                        <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                        <div class="user-card">
                            <div class="user-avatar sm"><em class="icon ni ni-user-alt"></em></div>
                            <div class="user-info"><span class="lead-text">{{Auth::guard('admin')->user()->name}}</span>
                                <span class="sub-text">{{Auth::guard('admin')->user()->email}}</span></div>
                        </div>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            {{-- <li><a href="user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View
                                        Profile</span></a></li> --}}
                            <li><a href="{{route('admin.profile')}}"><i class="icon fas fa-user-edit" style="font-size: 1rem"></i><span>Update
                                        Profile</span></a></li>
                            <li><a href="{{route('admin.change-password')}}"><i class="icon far fa-edit" style="font-size: 1rem"></i><span>Change
                                        Password</span></a></li>
                        </ul>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li>
                                <form method="POST" action="{{ route('admin.logout') }}">
                                    @csrf
                                    <a href="route('admin.logout')"
                                        onclick="event.preventDefault();
                                       this.closest('form').submit();"><em
                                            class="icon ni ni-signout"></em><span>Sign
                                            out</span></a>
                                </form>

                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
