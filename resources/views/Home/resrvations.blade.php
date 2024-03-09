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
<body class="blog-page" style="background-image: url('assets/images/blog-page-background.jpg')">
<header class="site-header" >
    <div class="header-bar" style=" height:70vh; background-image: url('assets/images/blog-header-background.jpg')">
        @include('Home.partials.navbar')
    </div><!-- header-bar -->
</header><!-- .site-header -->

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="entry-header">
                    <h2 class="entry-title">Blog</h2>

                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- entry-header -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- page-header -->

<div class="main-content">
    <div class="container">
        <div class="last-news">
            <div class="entry-header">
                <div class="entry-title">
                    <p>JUST THE BEST</p>
                    <h2>Our last news</h2>
                </div><!-- entry-title -->
            </div>

            <div class="row blog-list-page">
                @foreach($reservations as $reservation)
                <div class="col-12 col-md-6 single-blog-content">
                    <div class="blog-content">
                        <figure class="featured-image">
                            <a href="#"> <img src="{{$reservation->event->getFirstMediaUrl('images')}}" class="w-100" style="max-height: 380px;" alt="fesival+celebration"> </a>
                        </figure><!-- featured-image -->

                        <div class="box-link-date">
                            <a href="">{{$reservation->created_at->format('d-m-Y')}}</a>
                        </div><!-- box-link-date -->

                        <div class="entry-content">
                            <div class="entry-header">
                                <h2>{{$reservation->event->title}}</h2>
                            </div><!-- entry-header -->

                            <div class="entry-meta">
                                <span class="author-name"><a href="#">By James Williams</a></span>
                                <span class="space">|</span>
                                <span class="comments-count"><a href="#">{{$reservation->number_ticket}} Tickets</a></span>
                            </div><!-- entry-meta -->

                            <div class="entry-description">
                                @if($reservation->status)
                                    <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge text-dark bg-info">Accepted</span>
                                     <form method="post" action="{{route('user.ticket',$reservation->event->id)}}" >
                                         @csrf
                                        <input type="submit" class=" btn btn-success" value="Get your ticket">
                                    </form>
                                    </div>

                                @else
                                    <span class="badge text-white bg-danger">Pending</span>
                                @endif
                            </div><!-- entry-description -->
                        </div><!-- entry-content -->
                    </div>
                </div><!-- col-6 -->
              @endforeach




                <div class="col-12 load-more flex justify-content-center">
                    <input type="submit" name="" value="Load More" class="btn">
                </div>
            </div><!-- blog-list-page -->
        </div><!-- last-news -->
    </div><!-- container -->
</div><!-- main-content -->


@include('Home.partials.footer')
