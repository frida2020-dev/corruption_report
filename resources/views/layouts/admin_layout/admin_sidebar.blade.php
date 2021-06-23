<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Actions</div>
            <a class="nav-link " href="{{url('/search/index')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-search"></i></div>
                Search case
                {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
            </a>

            <a class="nav-link collapsed" href="{{url('/unattended')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-box-checked"></i></div>
                Unattended cases
                {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
            </a>

            <a class="nav-link" href="{{url('/inprogress')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-spinner "></i></div>
                In Progress
                {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
            </a>

            <a class="nav-link collapsed" href="{{ url('/completed')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-check-square"></i></div>
                Complete/Resolved
                {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
            </a>

            <a class="nav-link collapsed" href="{{url('/walk_in_case')}}" >
                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                Log a Case.
                {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
            </a>
    
            <div class="sb-sidenav-menu-heading">Administraion</div>
            <a class="nav-link" href="{{url('/admins')}}"><div class="sb-nav-link-icon"><i class="fas fa-user"></i></div> Add Staff</a>
            <div class="sb-sidenav-menu-heading">Action</div>
            <a class="nav-link" href="logout.php"><div class="sb-nav-link-icon"><i class="fas fa-power-off"></i></div> Sign Out</a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Start Bootstrap
    </div>
</nav>