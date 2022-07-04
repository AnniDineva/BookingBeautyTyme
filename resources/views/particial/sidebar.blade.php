    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="" /></div>
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
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    @guest
                    <li>
                        <a href="{{route('login')}}">Login</a>
                    </li> 
                    @endguest
                    
                    <li>
                        <a href="{{route('staticPage', ['page'=>'about'])}}">About</a>
                    </li>
                    <li>
                        <a href="{{route('staticPage', ['page'=>'service'])}}">Service</a>
                    </li>
                    <li>
                        <a href="{{route('staticPage', ['page'=>'pricing'])}}">Pricing</a>
                    </li>

                    <li>
                        <a href="{{route('staticPage', ['page'=>'barbers'])}}">Our Barbers</a>

                    </li>

                    <li>
                        <a href="{{route('staticPage', ['page'=>'contact'])}}">Contact Us</a>
                    </li>
                    @auth
                    <li>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link linkMenu">
                                Logout
                            </button>
                        </form>
                    </li>
                    @endauth
                </ul>

            </nav>
        </div>

