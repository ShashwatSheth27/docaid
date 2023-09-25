<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('home')}}" class="logo d-flex align-items-center">
            <img src="{{ asset('assets/img/logo.png')}}" alt="">
            <span class="d-none d-lg-block">DocAid</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                    <li class="dropdown-header">
                        <h6>Admin</h6>
                        <span>Manager</span>
                        <p>{{ Auth::guard('admin')->user()->email}}</p>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('admin.logout') }}">
                            @csrf
                            
                            <x-responsive-nav-link :href="route('admin.logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();" type="button" class="dropdown-item d-flex align-items-center" id="logout">
                                    <i class="bi bi-box-arrow-right"></i>
                                    {{ __('Sign Out') }}
                            </x-responsive-nav-link>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
