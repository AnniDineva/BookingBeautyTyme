@include('particial.sidebar')

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="{{route('home')}} "><img src="{{asset('images/logo_beauty.png')}}" alt="#" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li class="dinone">
                                            <i class="fa fa-volume-control-phone icon" aria-hidden="true"></i>

                                            <a href="#">987-654-3210</a>
                                        </li>
                                        <li class="dinone">
                                            <i class="fa fa-envelope icon" aria-hidden="true"></i>
                                            <a href="#">demo@gmail.com</a>
                                        </li>

                                        <li class="dinone">
                                            <i class="fa fa-search icon" aria-hidden="true"></i>
                                        </li>
                                        <li class="button_user"> <a class="btn mainColorBackground" href="#">Book now</a></li>

                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <a href="#">MENU</a>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error_message')))
                <div class="alert alert-danger text-center">
                    {{ session('error_message') }}
                </div>
            @endif
<!-- body -->

<body class="main-layout">