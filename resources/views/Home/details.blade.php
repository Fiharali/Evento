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
<body class="tickets-page" >
<header class="site-header bg-dark"  >
    <div class="header-bar  "  style=" height:70vh ;background-image: url('{{ asset('assets/images/tickets-page-header-background.jpg') }}')">
        @include('Home.partials.navbar')
    </div><!-- header-bar -->
</header><!-- .site-header -->

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="entry-header">
                    <h2 class="entry-title">Buy tickets</h2>

                    <ul class="breadcrumbs flex align-items-center">
                        <li><a href="#">Home</a></li>
                        <li>Buy tickets</li>
                    </ul><!-- .breadcrumbs -->
                </div><!-- entry-header -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- page-header -->

<div class="main-content">
    <div class="container">
        <div class="entry-header">
            <div class="entry-title">
                <p>JUST THE BEST</p>
                <h2>{{$event->title}}</h2>
            </div><!-- entry-title -->
        </div><!-- entry-header -->

        <div class="row">
            <div class="col-12">
                <div class="tabs">
                    <ul class="tabs-nav flex">
                        <li class="tab-nav flex justify-content-center align-items-center active" data-target="#tab_details">Details</li>
                  </ul>

                    <div class="tabs-container">
                        <div id="tab_details" class="tab-content">
                            <div class="flex flex-wrap justify-content-between">
                                <div class="single-event-details">
                                    <div class="single-event-details-row">
                                        <label>Start:</label>
                                        <p>{{ \Carbon\Carbon::parse($event->date)->format('D-M') }}</p>

                                    </div>

                                    <div class="single-event-details-row">
                                        <label>places left:</label>
                                        <p>{{$event->places_number}} </p>
                                    </div>

                                    <div class="single-event-details-row">
                                        <label>Price:</label>
                                        <p class="sold-out">{{$event->price}} £ <span>Sold Out</span></p>
                                    </div>

                                    <div class="single-event-details-row">
                                        <label>Categories:</label>
                                        <p>{{$event->category->name}}</p>
                                    </div>
                                    <div class="single-event-details-row">
                                        <label>Place:</label>
                                        <p>{{$event->place}}</p>
                                    </div>
                                    <div class="single-event-details-row">
                                        <label>Organisator:</label>
                                        <p>{{$event->organisator->name}}</p>
                                    </div>

                                    <div class="single-event-details-row">
                                        <label>description:</label>
                                        <p>{{$event->description}}</p>
                                    </div>
                                </div>

                                <div class="single-event-map">
                                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <img src="{{ $event->getFirstMediaUrl('images') }}" alt="Event Image">
                                </div>

                            </div>
                        </div><!-- .tab-content -->

                    </div><!-- .tabs-container -->
                </div><!-- .tabs -->
            </div><!-- .col-12 -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12">
                <div class="event-tickets">

                    <div class="ticket-row flex flex-column flex-lg-row justify-content-lg-between align-items-lg-center">
                        <div class="ticket-type flex flex-column flex-lg-row align-items-lg-center">
                            <h3 class="entry-title"> Gold Ticket</h3>
                            <span class="mt-2 mt-lg-0"> Vip Entry</span>
                            <div class="ticket-price mt-3 mt-lg-0">
                                {{$event->price}}$
                            </div><!-- ticket-price -->
                        </div><!-- ticket-type -->

                        <form class="flex align-items-center">
                            <div class="number-of-tickets flex justify-content-between align-items-center">
                                <span class="decrease-ticket">-</span>
                                <input type="number" name="number" disabled value="1" class="ticket-count ">
                                <span class="increase-ticket">+</span>
                            </div><!-- number-of-tickets -->

                            <div class="clear-ticket-count">Clear</div>
                        </form><!-- flex -->
                        <input type="submit" name="" value="Buy" class="btn mt-2 mb-2 mt-lg-0 mb-lg-0"><!-- btn -->
                    </div><!-- ticket-row -->

              </div><!-- event-tickets -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- main-content -->
@include('Home.partials.footer')
