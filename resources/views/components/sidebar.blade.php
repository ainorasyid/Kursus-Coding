<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('assets/dashboard/images/logo/Codenova_full_hitam.svg') }}" alt="Logo">
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block">
                        <i class="bi bi-x bi-middle"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                @foreach ($menus as $menu)
                    @if (isset($menu['submenu']))
                        @php
                            $isActive = request()->routeIs($menu['active'] ?? '');
                        @endphp

                        <li class="sidebar-item has-sub {{ $isActive ? 'active' : '' }}">
                            <a href="#" class="sidebar-link">
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>

                            <ul class="submenu {{ $isActive ? 'active' : '' }}">
                                @foreach ($menu['submenu'] as $submenu)
                                    <li class="submenu-item {{ request()->routeIs($submenu['active'] ?? '') ? 'active' : '' }}">
                                        <a href="{{ $submenu['url'] }}">
                                            {{ $submenu['title'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li class="sidebar-item {{ request()->routeIs($menu['active'] ?? '') ? 'active' : '' }}">
                            <a href="{{ route($menu['route']) }}" class="sidebar-link">
                                <i class="{{ $menu['icon'] }}"></i>
                                <span>{{ $menu['title'] }}</span>
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>