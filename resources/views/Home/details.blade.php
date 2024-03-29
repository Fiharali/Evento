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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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

@session('success')
<div class="alert alert-success w-50 mx-auto position-sticky top-50 start-50 translate-middle bg-white p-4" role="alert" style="z-index: 100;">
    <button type="button" class="btn-close position-absolute top-0 end-0" data-bs-dismiss="alert" aria-label="Close"></button>

    <h4 class="alert-heading">Well done!</h4>
    <p>{{$value}}</p>
    <hr>
    <p class="mb-0"></p>
</div>
@endsession
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
                                    <img src="{{ $event->getFirstMediaUrl('images') }}"  class="w-75 mx-auto mt-5" alt="Event Image" style="">
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

                        <form class="flex align-items-center" id="reservation-form" method="post" action="{{route('reservations.store')}}">
                            @csrf
                            <div class="number-of-tickets flex justify-content-between align-items-center">
                                <span class="decrease-ticket">-</span>
                                <input type="number" name="number_ticket"  value="1" class="ticket-count ">
                                <input type="hidden" name="event_id"   value="{{$event->id}}" >
                                <input type="hidden" name="user_id"    value="{{Auth::id()}}" >
                                <input type="hidden" name="status"    value="{{$event->acceptation}}" >
                                <span class="increase-ticket">+</span>
                            </div><!-- number-of-tickets -->
                            <div class="clear-ticket-count">Clear</div>
                            <input type="submit"  value="Buy" class="btn mt-2 mb-2 mt-lg-0 mb-lg-0 " @disabled($event->places_number <= 0 || $event->date < now())><!-- btn -->
                        </form><!-- flex -->
                    </div><!-- ticket-row -->

              </div><!-- event-tickets -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- main-content -->
<script>
    document.getElementById('reservation-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission

        // Display a SweetAlert confirmation dialog
        Swal.fire({
            title: 'Confirm Reservation',
            text: 'Are you sure you want to make this reservation?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, make reservation',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            // If user confirms, submit the form
            if (result.isConfirmed) {
                this.submit(); // Submit the form
            }
        });
    });


    const successMessage = {{ json_encode(session('success')) }};
    if (successMessage) {
        // Display success message using SweetAlert
        Swal.fire({
            title: 'Success!',
            text: 'Your reservation was successful.',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }

</script>
@include('Home.partials.footer')
