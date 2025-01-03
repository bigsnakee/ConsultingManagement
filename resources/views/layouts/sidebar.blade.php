<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/" class="text-nowrap logo-img">
                <img src="images/logos/logo.png" width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Trang chủ</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/" aria-expanded="false">
                        <span>
                            <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Bảng điều khiển</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Quản lý</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/interacts" aria-expanded="false">
                        <span>
                            <i class="ti ti-article"></i>
                        </span>
                        <span class="hide-menu">Tương tác</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Tư vấn</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-cards"></i>
                        </span>
                        <span class="hide-menu">Biểu đồ</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="#" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-description"></i>
                        </span>
                        <span class="hide-menu">Báo cáo</span>
                    </a>
                </li>

                @if (auth()->check() && auth()->user()->hasRole('Admin'))
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/users" aria-expanded="false">
                            <span>
                                <i class="ti ti-user-plus"></i>
                            </span>
                            <span class="hide-menu">Tài khoản</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">Phân quyền</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/roles" aria-expanded="false">
                            <span>
                                <i class="ti ti-login"></i>
                            </span>
                            <span class="hide-menu">Vai trò</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" aria-expanded="false">
                            <span>
                                <i class="ti ti-user-plus"></i>
                            </span>
                            <span class="hide-menu">###</span>
                        </a>
                    </li>
                    <li class="nav-small-cap">
                        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                        <span class="hide-menu">EXTRA</span>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" aria-expanded="false">
                            <span>
                                <i class="ti ti-mood-happy"></i>
                            </span>
                            <span class="hide-menu">###</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="#" aria-expanded="false">
                            <span>
                                <i class="ti ti-aperture"></i>
                            </span>
                            <span class="hide-menu">###</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
