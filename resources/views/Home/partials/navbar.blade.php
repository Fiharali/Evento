<div class="container-fluid">
    <div class="row align-items-center ">
        <div class="col-10 col-lg-4">
            <h1 class="site-branding flex">
                <a href="#"><img src="assets/images/logo-white-removebg-preview.png"  class="w-25" alt="" srcset=""></a>
            </h1>
        </div>

        <div class="col-2 col-lg-8">
            <nav class="site-navigation">
                <div class="hamburger-menu d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- .hamburger-menu -->

                <ul>
                    <li><a  href="/">HOME</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="/user-reservations">My Reservations</a></li>
                    @auth

                       @can('isAdmin')
                        <li><a href="/admin-events">Dashboard</a></li>
                        @endcan
                        @can('isOrganisator')
                        <li><a href="/my-events">My Event</a></li>
                        @endcan

                           <li>
                               <form action="{{ route('logout') }}" method="POST">
                                   @csrf
                                   <button type="submit" class="bg-transparent text-white border-0 mx-5 " >LogOut</button>
                               </form>
                           </li>

                    @else
                        <li><a href="/login">Login</a></li>
                        <li><a href="/register" class="">Get Started</a></li>

                    @endauth

                    <li><a href="#"><i class="fas fa-search"></i></a></li>
                </ul><!-- flex -->
            </nav><!-- .site-navigation -->
        </div><!-- .col-12 -->
    </div><!-- .row -->
</div><!-- container-fluid -->
