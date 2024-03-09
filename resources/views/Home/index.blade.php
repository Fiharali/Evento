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

<body>
<header class="site-header">
    <div class="header-bar">
       @include('Home.partials.navbar')
    </div><!-- header-bar -->
</header><!-- .site-header -->

<div class="hero-content  "  style="background-image: url('{{ asset('assets/images/cover.jpg') }}')">
    <div class="container">

        <div class="row ">
            <div class="col-12 offset-lg-2 col-lg-10">
                <div class="entry-header pt-5">
                    <h2>Hello world!</h2>

                    <div class="entry-meta-date">

                    </div><!-- .entry-meta-date -->
                </div><!-- .entry-header -->

                <div class="countdown flex flex-wrap justify-content-between" data-date="2018/06/06">
                    <div class="countdown-holder">
                        <div class="dday"></div>
                        <label>Days</label>
                    </div><!-- .countdown-holder -->

                    <div class="countdown-holder">
                        <div class="dhour"></div>
                        <label>Hours</label>
                    </div><!-- .countdown-holder -->

                    <div class="countdown-holder">
                        <div class="dmin"></div>
                        <label>Minutes</label>
                    </div><!-- .countdown-holder -->

                    <div class="countdown-holder">
                        <div class="dsec"></div>
                        <label>Seconds</label>
                    </div><!-- .countdown-holder -->
                </div><!-- .countdown -->
            </div><!-- .col-12 -->
        </div><!-- row -->

        <div class="row">
            <div class="col-12 ">
                <div class="entry-footer">
                    <a href="#" class="btn">Buy Tickets</a>
                    <a href="#" class="btn current">See Lineup</a>
                </div>
            </div>
        </div>
    </div><!-- .container -->
</div><!-- .hero-content -->

<div class="content-section" style="background: url('assets/images/middle-cover.jpg')">
    <div class="container">
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="lineup-artists-headline">--}}
{{--                    <div class="entry-title">--}}
{{--                        <p>JUST THE BEST</p>--}}
{{--                        <h2>The Lineup Artists-Headliners</h2>--}}
{{--                    </div><!-- entry-title -->--}}

{{--                    <div class="lineup-artists">--}}
{{--                        <div class="lineup-artists-wrap flex flex-wrap">--}}
{{--                            <figure class="featured-image">--}}
{{--                                <a href="#"> <img src="{{asset('assets/images/black-chick.jpg')}}" alt=""> </a>--}}
{{--                            </figure><!-- featured-image -->--}}

{{--                            <div class="lineup-artists-description">--}}
{{--                                <div class="lineup-artists-description-container">--}}
{{--                                    <div class="entry-title">--}}
{{--                                        Jamila Williams--}}
{{--                                    </div><!-- entry-title -->--}}

{{--                                    <div class="entry-content">--}}
{{--                                        <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>--}}
{{--                                    </div><!-- entry-content -->--}}

{{--                                    <div class="box-link">--}}
{{--                                        <a href=""><img src="{{asset('assets/images/box.jpg')}}" alt=""></a>--}}
{{--                                    </div><!-- box-link -->--}}
{{--                                </div><!-- lineup-artists-description-container -->--}}
{{--                            </div><!-- lineup-artists-description -->--}}
{{--                        </div><!-- lineup-artists-wrap -->--}}

{{--                        <div class="lineup-artists-wrap flex flex-wrap">--}}
{{--                            <div class="lineup-artists-description">--}}
{{--                                <figure class="featured-image d-md-none">--}}
{{--                                    <a href="#"> <img src="{{asset('assets/images/mathew-kane.jpg')}}" alt=""> </a>--}}
{{--                                </figure><!-- featured-image -->--}}

{{--                                <div class="lineup-artists-description-container">--}}
{{--                                    <div class="entry-title">--}}
{{--                                        Sandra Superstar--}}
{{--                                    </div><!-- entry-title -->--}}

{{--                                    <div class="entry-content">--}}
{{--                                        <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>--}}
{{--                                    </div><!-- entry-content -->--}}

{{--                                    <div class="box-link">--}}
{{--                                        <a href="#"><img src="{{asset('assets/images/box.jpg')}}" alt=""></a>--}}
{{--                                    </div><!-- box-link -->--}}
{{--                                </div><!-- lineup-artists-description-container -->--}}
{{--                            </div><!-- lineup-artists-description -->--}}

{{--                            <figure class="featured-image d-none d-md-block">--}}
{{--                                <a href="#"> <img src="{{asset('assets/images/mathew-kane.jpg')}}" alt=""> </a>--}}
{{--                            </figure><!-- featured-image -->--}}
{{--                        </div><!-- lineup-artists-wrap -->--}}

{{--                        <div class="lineup-artists-wrap flex flex-wrap">--}}
{{--                            <figure class="featured-image">--}}
{{--                                <a href="#"> <img src="{{asset('assets/images/eric-ward.jpg')}}" alt=""> </a>--}}
{{--                            </figure><!-- featured-image -->--}}

{{--                            <div class="lineup-artists-description">--}}
{{--                                <div class="lineup-artists-description-container">--}}
{{--                                    <div class="entry-title">--}}
{{--                                        DJ Crazyhead--}}
{{--                                    </div><!-- entry-title -->--}}

{{--                                    <div class="entry-content">--}}
{{--                                        <p>Quisque at erat eu libero consequat tempus. Quisque mole stie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. </p>--}}
{{--                                    </div><!-- entry-content -->--}}

{{--                                    <div class="box-link">--}}
{{--                                        <a href="#"> <img src="{{asset('assets/images/box.jpg')}}" alt=""></a>--}}
{{--                                    </div><!-- box-link -->--}}
{{--                                </div><!-- lineup-artists-description-container -->--}}
{{--                            </div><!-- lineup-artists-description -->--}}
{{--                        </div><!-- lineup-artists-wrap -->--}}
{{--                    </div><!-- lineup-artists -->--}}
{{--                </div><!-- lineup-artists-headline -->--}}
{{--            </div><!-- col-12 -->--}}
{{--        </div><!-- row -->--}}

        <div class="row">
            <div class="col-12">
                <div class="the-complete-lineup">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>The Complete Lineup</h2>
                    </div><!-- entry-title -->

                    <div class="row the-complete-lineup-artists">
                        @foreach($users as $user)
                            <div class="col-6 col-md-4 col-lg-3 artist-single">
                                <figure class="featured-image">
                                    <a href="#"> <img src="{{$user->getFirstMediaUrl('profile')}}" alt=""> </a>
                                    <a href="#" class="box-link"> <img src="{{ asset('assets/images/box.jpg') }}" alt=""> </a>
                                </figure><!-- featured-image -->

                                <h2>{{ $user->name }}</h2>
                            </div><!-- artist-single -->
                        @endforeach
                    </div><!-- the-complete-lineup-artists -->

                    <div class="row justify-content-center">
                        <div class="see-complete-lineup">
                            <div class="entry-footer">
                                <a href="#" class="btn">See all lineup</a>
                            </div>
                        </div>
                    </div>
                </div><!-- the-complete-lineup -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->

    <div class="homepage-next-events">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="entry-title">
                        <p>JUST THE BEST</p>
                        <h2>Our Next Events </h2>
                    </div><!-- entry-title -->
                </div><!-- col-12 -->
            </div><!-- row -->
        </div><!-- container -->

        <div class="next-event-slider-wrap">
            <div class="swiper-container next-event-slider container">
               <div class="d-flex align-items-start ">
                   <select class="form-select form-select-lg mb-3 py-2 px-5  " id="select-cat" aria-label=".form-select-lg example">
                       <option selected value="0">All Categories</option>
                       @foreach($categories as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                       @endforeach
                   </select>
                   <input type="text" placeholder="search by title or lieu" id="search-input" class=" py-2 mx-1 px-lg-5  "/>
{{--                   <input type="date" id="search-from" class=" py-2 mx-1  px-5"/>--}}
{{--                   <input type="date"  id="search-to" class=" py-2 mx-1  px-5"/>--}}
               </div>
                <div class="row " id="events-container">
                 @foreach($events as $event)
                    <div class="swiper-slide col-lg-4 col-md-6 col-sm-12 mt-2">
                        <div class="next-event-content">
                            <figure class="featured-image">
                                <img src="{{ $event->getFirstMediaUrl('images') }}" alt="evebt" class="img-fluid d-block" style="height: 200px;">
                                <a href="{{route('event.details',$event->id)}}" class="entry-content flex flex-column justify-content-center align-items-center">
                                    <h3>{{$event->title}}</h3>
                                    <p>{{$event->place}}</p>
                                </a>
                            </figure><!-- featured-image -->
                        </div><!-- next-event-content -->
                    </div>
                  @endforeach
                </div>
            </div>


        </div><!-- .next-event-slider-wrap -->
    </div><!-- homepage-next-events -->

    <div class="home-page-last-news">
        <div class="container">
            <div class="header">
                <div class="entry-title">
                    <p>JUST THE BEST</p>
                    <h2>Our Last News</h2>
                </div><!-- entry-title -->
            </div><!-- header -->

            <div class="home-page-last-news-wrap">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <figure class="featured-image">
                            <a href="#"> <img src="assets/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                        </figure><!-- featured-image -->

                        <div class="box-link-date">
                            <a href="#">03.12.18</a>
                        </div>

                        <div class="content-wrapper">
                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2><a href="#">10 Festival Tips</a></h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><a href="#"> By James Williams</a></span>
                                    <span class="space">|</span>
                                    <span class="comments-count"><a href="#">3 comments</a></span>
                                </div><!-- entry-meta -->

                                <div class="entry-description">
                                    <p>Quisque at erat eu libero consequat tempus.
                                        Quisque mole stie convallis tempus.
                                        Ut semper purus metus, a euismod sapien sodales ac.
                                        Duis viverra eleifend fermentum.</p>
                                </div><!-- entry-description -->
                            </div><!-- entry-content -->
                        </div><!-- content-wrapper -->
                    </div><!-- .col-6 -->

                    <div class="col-12 col-md-6">
                        <figure class="featured-image">
                            <a href="#"> <img src="assets/images/news-image-1.jpg" alt="fesival+celebration"> </a>
                        </figure><!-- featured-image -->

                        <div class="box-link-date">
                            <a href="">03.12.18</a>
                        </div>

                        <div class="content-wrapper">
                            <div class="entry-content">
                                <div class="entry-header">
                                    <h2><a href="#">New event calendar for this year</a></h2>
                                </div><!-- entry-header -->

                                <div class="entry-meta">
                                    <span class="author-name"><a href="#">By James Williams</a></span>
                                    <span class="space">|</span>
                                    <span class="comments-count"><a href="#">3 comments</a></span>
                                </div><!-- entry-meta -->

                                <div class="entry-description">
                                    <p>Quisque at erat eu libero consequat tempus.
                                        Quisque mole stie convallis tempus.
                                        Ut semper purus metus, a euismod sapien sodales ac.
                                        Duis viverra eleifend fermentum.</p>
                                </div><!-- entry-description -->
                            </div><!-- entry-content -->
                        </div><!-- .content-wrapper -->
                    </div><!-- col-6 -->
                </div><!-- row -->
            </div><!-- home-page-last-news-wrap -->
        </div><!-- container -->
    </div><!-- home-page-last-news -->
</div>
<script>
    const searchInput = document.querySelector('#search-input');
    const selectCat = document.querySelector('#select-cat');
    //const searchFrom = document.querySelector('#search-from');
    //const searchTo = document.querySelector('#search-to');
    const eventsContainer = document.querySelector('#events-container');

    searchInput.addEventListener('keyup', fetchData);
    selectCat.addEventListener('change', fetchData);
  //  selectCat.addEventListener('input', fetchData);
  //  searchTo.addEventListener('input', fetchData);

    function fetchData() {
        const selectedOption = selectCat.value;
        const query = searchInput.value;
       // console.log(searchFrom.value,searchTo.value)

        fetch(`/search?query=${query}&category=${selectedOption}`)
            .then(response => response.json())
            .then(data => {
                eventsContainer.innerHTML = '';
                data.forEach(event => {
                    const eventHtml = `
                    <div class="swiper-slide col-lg-4 col-md-6 col-sm-12 mt-2">
                        <div class="next-event-content">
                            <figure class="featured-image">
                                <img src="${event.imageUrl}" alt="{{ $event->title }}" class="img-fluid d-block" style="height: 260px;">
                                <a href="/events/${event.id}" class="entry-content flex flex-column justify-content-center align-items-center">
                                    <h3>${event.title}</h3>
                                    <p>${event.place}</p>
                                </a>
                            </figure><!-- featured-image -->
                        </div><!-- next-event-content -->
                    </div>
                `;
                    eventsContainer.innerHTML += eventHtml;
                });
            })
            .catch(error => console.error('Error:', error));
    }

</script>



@include('Home.partials.footer')

