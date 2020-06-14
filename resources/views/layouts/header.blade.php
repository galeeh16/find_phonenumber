    <nav class="main-header navbar navbar-expand navbar-dark navbar-purple">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
            </button>
            </div>
        </div>
        </form>

        @auth
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto mr-4">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-user fa-sm"></i>
                    {{ auth()->user()->name }}
                    <i class="fa fa-angle-down fa-sm" style="font-size: 9pt;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>
            </li>
        </ul>
        @endauth

    </nav>