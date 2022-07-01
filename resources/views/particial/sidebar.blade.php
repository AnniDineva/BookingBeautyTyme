    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    @guest
                    <li>
                        <a href="{{route('login')}}">Login</a>
                    </li> 
                    @endguest
                    
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="service.html">Service</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>

                    <li>
                        <a href="barbers.html">Our Barbers</a>

                    </li>

                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    @auth
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link">
                                Logout
                            </button>
                        </form>
                    </li>
                    @endauth
                </ul>

            </nav>
        </div>

        @include('auth.login')
       