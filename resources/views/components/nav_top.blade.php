<nav class="navbar navbar-default navbar-cls-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Chuyển đổi điều hướng</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Quản trị viên Binary</a>
    </div>
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
        <a href="#" class="btn btn-danger square-btn-adjust">Đăng xuất</a>
    </div>
</nav>
<!-- /. NAV TRÊN CÙNG -->
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="{{ asset('admin/assets/img/find_user.png') }}" class="user-image img-responsive" />
            </li>
            <li>
                <h5 style="color: white;" class="text-center">The Amateur (Quản trị viên)</h5>
            </li>

            <li>
                <a class="{{ $active === 'dashboard_user' ? 'active-menu' : '' }}" href="{{ route('dashboard_user') }}">
                    <i class="fa fa-users fa-2x"></i> Người dùng</a>
            </li>
            <li>
                <a href="{{ route('dashboard_car') }}"><i class="fa-solid fa-car fa-2x" style="color: #ffffff;"></i>
                    Dữ liệu Xe<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a class="{{ $active === 'dashboard_car' ? 'active-menu' : '' }}" href="{{ route('dashboard_car') }}">
                            Danh sách Xe</a>
                    </li>
                    <li>
                        <a class="{{ $active === 'create_car' ? 'active-menu' : '' }}" href="{{ route('create_car') }}">
                            Thêm Xe</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="" href="{{ route('dashboard_order') }}">
                    <i class="fa fa-users fa-2x"></i>Thanh toán</a>
            </li>
            <li>
                <a class="" href="{{ route('dashboard_return') }}">
                    <i class="fa fa-users fa-2x"></i>Trả Xe</a>
            </li>
        </ul>
    </div>
</nav>
