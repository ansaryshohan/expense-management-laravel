<div>
    <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="./index.html" class="text-nowrap logo-img">
            <img src="/assets/images/logos/logo-light.svg" alt="" />
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
        </div>
    </div>
    <!-- Sidebar navigation-->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url("/") }}" aria-expanded="false">
                    <span>
                        <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                    </span>
                    <span class="hide-menu">Dashboard</span>
                </a>

            </li>
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
                <span class="hide-menu">Clients</span>
                
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url("/clients") }}" aria-expanded="false">
                    <span>
                        <iconify-icon icon="solar:layers-minimalistic-bold-duotone"
                            class="fs-6"></iconify-icon>
                    </span>
                    <span class="hide-menu">All Clients</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url("/client/add") }}" aria-expanded="false">
                    <span>
                        <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                    </span>
                    <span class="hide-menu">Add Clients</span>
                </a>
            </li>
            {{-- <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6"
                    class="fs-6"></iconify-icon>
                <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route("login") }}" aria-expanded="false">
                    <span>
                        <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                    </span>
                    <span class="hide-menu">Login</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route("register") }}" aria-expanded="false">
                    <span>
                        <iconify-icon icon="solar:user-plus-rounded-bold-duotone"
                            class="fs-6"></iconify-icon>
                    </span>
                    <span class="hide-menu">Register</span>
                </a>
            </li> --}}
        </ul>
    </nav>
    <!-- End Sidebar navigation -->
</div>