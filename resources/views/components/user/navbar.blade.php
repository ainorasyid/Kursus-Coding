<header class="pc-header">
    <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow"><!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
                    <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
                        <i data-feather="menu"></i>
                    </a>
                </li>
                <li class="pc-h-item pc-sidebar-popup lg:hidden">
                    <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
                        <i data-feather="menu"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <i data-feather="sun"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
                            <i data-feather="moon"></i>
                            <span>Dark</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
                            <i data-feather="sun"></i>
                            <span>Light</span>
                        </a>
                        <a href="#!" class="dropdown-item" onclick="layout_change_default()">
                            <i data-feather="settings"></i>
                            <span>Default</span>
                        </a>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
                        <i data-feather="user"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
                        <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
                            <div class="flex mb-1 items-center">
                                <div class="shrink-0">
                                    <img src="{{ asset('assets/dashboard/images/user/avatar-2.jpg')}}" alt="user-image"
                                        class="w-10 rounded-full" />
                                </div>
                                <div class="grow ms-3">
                                    <h6 class="mb-1 text-white">{{ auth()->user()?->pengguna?->fullname }}</h6>
                                    <span class="text-white">{{ auth()->user()?->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-body py-4 px-5">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <form action="{{ route('logout') }}" method="POST">
                                    <div class="grid my-3">
                                        @csrf
                                        <button type="submit" class="btn btn-primary flex items-center justify-center">
                                            <svg class="pc-icon me-2 w-[22px] h-[22px]">
                                                <use xlink:href="#custom-logout-1-outline"></use>
                                            </svg>
                                            Logout
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>