<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle"
                         src="{{ asset('backend/images/theme/profile_small.jpg') }}"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Admin Name</span>
                        <span class="text-muted text-xs block">Quản lý <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="javascript:void(0)">Thông tin cá nhân</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="{{ backendRouter('dashboard')  }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Trang chủ</span>
                </a>
            </li>
            <li>
                <a href="{{ backendRouter('admin.list') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Admin</span>
                </a>
            </li>
            <li>
                <a href="{{ backendRouter('post.list') }}">
                    <i class="fa fa-desktop"></i>
                    <span class="nav-label">Bài viết</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
