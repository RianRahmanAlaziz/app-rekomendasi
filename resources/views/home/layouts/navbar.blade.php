<header class="nav-type-1">

    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="form-control main-search-input" placeholder="Search for" />
                        <i class="ui-close search-close" id="search-close"></i>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->



    <nav class="navbar navbar-static-top">
        <div class="navigation" id="sticky-nav">
            <div class="container relative">
                <div class="row flex-parent">
                    <div class="navbar-header flex-child">
                        <!-- Logo -->
                        <div class="logo-container">
                            <div class="logo-wrap">
                                <a href="/">
                                    <img class="logo-dark" src="/assets/img/logo.png" alt="logo" />
                                </a>
                            </div>
                        </div>
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <!-- end navbar-header -->

                    <div class="nav-wrap flex-child">
                        <div class="collapse navbar-collapse text-center" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="/">Home</a>
                                    <i class="fa fa-angle-down dropdown-trigger"></i>
                                </li>


                                <li class="dropdown">
                                    <a href="/tanaman">Tanaman</a>
                                    <i class="fa fa-angle-down dropdown-trigger"></i>
                                </li>
                                <li class="dropdown">
                                    <a href="/pupuk">Pupuk</a>
                                    <i class="fa fa-angle-down dropdown-trigger"></i>
                                </li>
                                <!-- end elements -->


                                <!-- Mobile search -->
                                <li id="mobile-search" class="hidden-lg hidden-md">
                                    <form method="get" class="mobile-search">
                                        <input type="search" class="form-control" placeholder="Search..." />
                                        <button type="submit" class="search-button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                            <!-- end menu -->
                        </div>
                        <!-- end collapse -->
                    </div>
                    <!-- end col -->

                    <div class="flex-child flex-right nav-right hidden-sm hidden-xs">
                        <ul>
                            @auth
                                <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class=" btn-link p-0" style="background: none; border: none;"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="#000000" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                                <path fill-rule="evenodd"
                                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                            </svg>
                                        </button>
                                    </form>
                                </li>
                            @else
                                <li class="nav-login">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal">Login</a>
                                </li>
                            @endauth

                            <li class="nav-search-wrap style-2 hidden-sm hidden-xs">
                                <a href="#" class="nav-search search-trigger">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end navigation -->
    </nav>
    <!-- end navbar -->
</header>
