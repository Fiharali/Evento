<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">

    <!-- Swiper CSS -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="about-us" style="background-image: url('assets/images/about-us-background.jpg')">
<header class="site-header">
    <div class="header-bar" style="height:70vh;background-image: url('assets/images/about-us-header-background.jpg')">
        @include('Home.partials.navbar')
    </div><!-- header-bar -->
</header><!-- .site-header -->

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="entry-header">
                    <h2 class="entry-title">About us</h2>

                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li>About us</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- .entry-header -->
            </div><!-- .col-12 -->
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- .page-header -->

<div class="main-content">
    <div class="container">
        <div class="entry-header">
            <div class="entry-title">
                <p>JUST THE BEST</p>
                <h2>A few words about us</h2>
            </div><!-- -->
        </div><!-- -->

        <div class="entry-content">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="entry-header">
                        <h3>We love our public</h3>
                    </div><!-- -->

                    <div class="entry-description">
                        <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus.
                            Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                            Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.
                            Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac.
                            Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales.</p>
                    </div><!-- entry-description -->
                </div><!-- col-6 -->

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="entry-header">
                        <h3>10 year mission</h3>
                    </div><!-- -->

                    <div class="entry-description">
                        <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus.
                            Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam.
                            Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus.
                            Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac.
                            Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales.</p>
                    </div><!-- entry-description -->
                </div><!-- col-6 -->
            </div><!-- row -->
        </div><!-- entry-content -->

        <figure class="featured-image">
            <img src="assets/images/about-us-content-image.jpg" alt="party people">
        </figure>
    </div><!-- container -->
</div><!-- main-content -->

<div class="container">
    <div class="milestones">
        <div class="row flex flex-wrap justify-content-between">
            <div class="d-col-n mt-5 mt-lg-0">
                <div class="counter-box">
                    <div class="flex justify-content-center">
                        <div class="start-counter" data-to="390" data-speed="2000"></div>
                    </div>

                    <h3 class="entry-title">Hours of Music</h3><!-- entry-title -->
                </div><!-- counter-box -->
            </div><!-- d-col-n -->

            <div class="d-col-n mt-5 mt-lg-0">
                <div class="counter-box">
                    <div class="flex justify-content-center">
                        <div class="start-counter" data-to="68" data-speed="2000"></div>
                    </div>

                    <h3 class="entry-title">DJ's Playing</h3><!-- entry-title -->
                </div><!-- counter-box -->
            </div><!-- d-col-n -->

            <div class="d-col-n mt-5 mt-lg-0">
                <div class="counter-box">
                    <div class="flex justify-content-center">
                        <div class="start-counter" data-to="120" data-speed="2000"></div>
                        <div class="counter-k">K</div>
                    </div>

                    <h3 class="entry-title">Visitors</h3><!-- entry-title -->
                </div><!-- counter-box -->
            </div><!-- d-col-n -->

            <div class="d-col-n mt-5 mt-lg-0">
                <div class="counter-box">
                    <div class="flex justify-content-center">
                        <div class="start-counter" data-to="8" data-speed="2000"></div>
                    </div>

                    <h3 class="entry-title">Stages</h3><!-- entry-title -->
                </div><!-- counter-box -->
            </div><!-- d-col-n -->

            <div class="d-col-n mt-5 mt-lg-0">
                <div class="counter-box">
                    <div class="flex justify-content-center">
                        <div class="start-counter" data-to="325" data-speed="2000"></div>
                        <div class="counter-k">K</div>
                    </div>

                    <h3 class="entry-title">Followers</h3><!-- entry-title -->
                </div><!-- counter-box -->
            </div><!-- d-col-n -->
        </div>
    </div>
</div>


@include('Home.partials.footer')
