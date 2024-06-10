<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                {{--<div class="nav-item theme-logo">
                    <a href="{{ route('admin.index') }}">
                        <img src="{{ asset('assets/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                    </a>
                </div>--}}
                <div class="nav-item theme-text">
                    <a href="{{ route('admin.index') }}" class="nav-link"> PORTFOLİO </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <div class="profile-info">
            <div class="user-info">
                <div class="profile-img">
                    <img src="{{ asset('assets/src/assets/img/profile-30.png') }}" alt="avatar">
                </div>
                <div class="profile-content">
                    <h6 class="">Orxan Ismayilov</h6>
                    <p class="">Admin</p>
                </div>
            </div>
        </div>

        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">

            <li class="menu">
                <a href="{{ route('admin.index') }}" aria-expanded="{{ Route::is('admin.index') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    <span>APP</span>
                </div>
            </li>

            <li class="menu">
                <a href="{{ route('admin.about.index') }}" aria-expanded="{{ Route::is('admin.about.index') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="book-open"></i>
                        <span>Haqqımda</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#service" data-bs-toggle="collapse" aria-expanded="{{ Route::is('admin.service.index', 'admin.service.create') ? 'true' : 'false' }}" class="dropdown-toggle active">
                    <div class="">
                        <i data-feather="server"></i>
                        <span>Servislər</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('admin.service.index', 'admin.service.create') ? 'show' : '' }}" id="service" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.service.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.index') }}"> Servislər </a>
                    </li>
                    <li class="{{ Route::is('admin.service.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.service.create') }}">Yeni Servis Yarat</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#experience" data-bs-toggle="collapse" aria-expanded="{{ Route::is('admin.experience.index', 'admin.experience.create') ? 'true' : 'false' }}" class="dropdown-toggle active">
                    <div class="">
                        <i data-feather="briefcase"></i>
                        <span>İş - Təcrübə</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('admin.experience.index', 'admin.experience.create') ? 'show' : '' }}" id="experience" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.experience.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.experience.index') }}"> Təcrübələr</a>
                    </li>
                    <li class="{{ Route::is('admin.experience.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.experience.create') }}">Yeni İş - Təcrübə Yarat</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#education" data-bs-toggle="collapse" aria-expanded="{{ Route::is('admin.education.index', 'admin.education.create') ? 'true' : 'false' }}" class="dropdown-toggle active">
                    <div class="">
                        <i data-feather="award"></i>
                        <span>Təhsil</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('admin.education.index', 'admin.education.create') ? 'show' : '' }}" id="education" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.education.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.education.index') }}"> Təhsil</a>
                    </li>
                    <li class="{{ Route::is('admin.education.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.education.create') }}">Yeni Təhsil Yarat</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#skill" data-bs-toggle="collapse" aria-expanded="{{ Route::is('admin.skill.index', 'admin.skill.create') ? 'true' : 'false' }}" class="dropdown-toggle active">
                    <div class="">
                        <i data-feather="code"></i>
                        <span>Bacarıqlar</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('admin.skill.index', 'admin.skill.create') ? 'show' : '' }}" id="skill" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.skill.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.skill.index') }}"> Bacarıqlar</a>
                    </li>
                    <li class="{{ Route::is('admin.skill.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.skill.create') }}">Yeni Bacarıq Yarat</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#company" data-bs-toggle="collapse" aria-expanded="{{ Route::is('admin.company.index', 'admin.company.create') ? 'true' : 'false' }}" class="dropdown-toggle active">
                    <div class="">
                        <i data-feather="life-buoy"></i>
                        <span>Şirkətlər</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled {{ Route::is('admin.company.index', 'admin.company.create') ? 'show' : '' }}" id="company" data-bs-parent="#accordionExample">
                    <li class="{{ Route::is('admin.company.index') ? 'active' : '' }}">
                        <a href="{{ route('admin.company.index') }}"> Şirkətlər</a>
                    </li>
                    <li class="{{ Route::is('admin.company.create') ? 'active' : '' }}">
                        <a href="{{ route('admin.company.create') }}">Yeni Şirkət Yarat</a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="{{ route('admin.contact.index') }}" aria-expanded="{{ Route::is('admin.contact.index') ? 'true' : 'false' }}" class="dropdown-toggle">
                    <div class="">
                        <i data-feather="message-square"></i>
                        <span>Mesajlar</span>
                    </div>
                </a>
            </li>
        </ul>

    </nav>

</div>
