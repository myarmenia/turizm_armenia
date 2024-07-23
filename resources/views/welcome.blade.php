@extends('layouts.app-important')

@section('content')
    <div class="wrapper">
        <div class="page-header section-dark" style="background-image: url({{asset('assets/img/baner1-1.png') }})">
            <div class="content-center">
                <div class="container">
                    <div class="title-brand">
                        <h1 class="presentation-title">{{__('baner.h1')}}</h1>
                    </div>
                    <h2 class="presentation-subtitle text-center mt-2">{{__('baner.text')}}</h2>
                </div>
            </div>
            <div class="content-center-ticket">
                <div class="container">
                    <div class="buy-ticket-cont d-flex justify-content-around p-3 m-auto w-75">
                        <div>
                            <div class="text-left fw-600 cl-5">{{__("ticket.choose_ticket.time_of_use_text")}} </div>
                            <div class="light-text text-left fts-12">{{__("ticket.choose_ticket.time_of_use")}} </div>
                        </div>
                        <div class="text-left center-div">
                            <label class="mb-0 pl-3 fw-600 cl-5">{{__("ticket.choose_ticket.passenger")}}</label>
                            <input type="" min="0" oninput="validity.valid||(value='');" class="min-height-inp form-control py-0 pl-3 fts-12" placeholder="{{__('ticket.choose_ticket.add_quantity')}}" id="viewQuantity">
                        </div>
                        <div class="text-left">
                            <label class="light-text text-left mb-0 fw-600 cl-5">{{__("ticket.choose_ticket.route")}}</label>
                            <div class="buy-ticket-dropdown dropdown">
                                <a class="fts-12 dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false" id="checkedRoute">{{__('ticket.choose_ticket.choose_route')}}  </a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger fts-12">
                                    @foreach (App\Helpers\Main::busRoutes() as $value)
                                        <li class="dropdown-item check-route fts-12" data-id="{{$value->id}}" >{{__("bus_routes.routes.$value->key")}}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div>
                            <a  class="btn btn-danger btn-block btn-round m-auto px-5 text-white buy-ticket-a" href="#buyTicketCont">{{__('ticket.form.button_text')}}</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="fadeInAnim">
        <div class="section section-content section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="image-container">
                            <img class="img" src="{{ asset('assets/img/presentation-page/kaskad.png') }}" alt="{{__('images.kaskad')}}" title="{{__('images.kaskad')}}" />
                            <img class="area-img add-animation" src="{{ asset('assets/img/yeraz-park.png') }}" alt="{{__('images.yeraz-park')}}" title="{{__('images.yeraz-park')}}" />
                            <img class="info-img add-animation" src="{{ asset('assets/img/yerevan-railway-station.png') }}"  alt="{{__('images.yerevan-railway-station')}}" title="{{__('images.yerevan-railway-station')}}" />
                        </div>
                    </div>
                    <div class="col-md-5 ">
                        <div class="section-description">
                            <h3 class="title"> {{ __ ('discover_yerevan.title') }}</h3>
                            <h6 class="category">{{ __ ('discover_yerevan.h6') }}</h6>
                            <h5 class="description">{{ __ ('discover_yerevan.text') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-components section-dark">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="image-container">
                    <img class="components-macbook" src="{{ asset('assets/img/presentation-page/map-left.png') }}" alt="{{__('images.map')}}" title="{{__('images.map')}}" id="map"  />
                    <img class="share-btn-img" src="{{ asset('assets/img/presentation-page/republic-square.jpg') }}" alt="{{__('images.republic-square')}}" title="{{__('images.republic-square')}}" />
                    <img class="pin-btn-img" src="{{ asset('assets/img/presentation-page/yerevan-bus.png') }}" alt="{{__('images.yerevan-bus')}}" title="{{__('images.yerevan-bus')}}" />
                    <img class="coloured-card-img" src="{{ asset('assets/img/presentation-page/opera.png') }}" alt="{{__('images.opera')}}" title="{{__('images.opera')}}" />
                </div>
            </div>
            <div class="col-md-10 col-lg-4 ml-auto mr-auto pb-5">
                <div class="container basic-container pb-5">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="arrow-a" data-type="left" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                <img src="{{ asset('assets/img/arrow-left_active.png')}}" class="arrow-img mt-2">
                                <span class="arrow-left-span arrow-span arraw-span-active">{{__('bus_routes.routes.route_1')}}</span>
                            </a>
                        </li>
                         <li class="nav-item" role="presentation">
                            <img src="{{ asset('assets/img/1.png')}}">
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="arrow-a" data-type="right" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                <img src="{{ asset('assets/img/arrow-right.png')}}" class="arrow-img">
                                <span class="arrow-right-span arrow-span">{{__('bus_routes.routes.route_2')}}</span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            @foreach (__('bus_routes.route_1') as $key => $route)
                                @if ($key < 6)
                                    <div class="routes-cont">
                                        <div class="mt-3">
                                            <h6 class="mb-0">{{__('bus_routes.stop')}} {{$key}}</h6>
                                        </div>
                                        <div>
                                            <div class=" text-uppercase">{{$route['name']}}</div>
                                            {{$route['text']}}
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <div class="collapse" id="collapseRoute">
                                @foreach (__('bus_routes.route_1') as $key => $route)
                                    @if ($key >= 6)
                                        <div class="routes-cont">
                                            <div class="mt-3">
                                                <h6 class="mb-0">{{__('bus_routes.stop')}} {{$key}}</h6>
                                            </div>
                                            <div>
                                                <div class=" text-uppercase">{{$route['name']}}</div>
                                                {{$route['text']}}
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class=" d-flex justify-content-end">
                                <div class="arrow-route-div" data-rotate="0">
                                    <a  data-toggle="collapse" href="#collapseRoute" role="button" aria-expanded="false" aria-controls="collapseRoute" class="collapseRouteToggle">
                                        <i class="bi bi-arrow-down-circle arrow-route"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            @foreach (__('bus_routes.route_2') as $key => $route)
                                @if ($key < 6)
                                    <div class="routes-cont">
                                        <div class="mt-3">
                                            <h6 class="mb-0">{{__('bus_routes.stop')}} {{$key}}</h6>
                                        </div>
                                        <div>
                                            <div class=" text-uppercase">{{$route['name']}}</div>
                                            {{$route['text']}}
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <div class="collapse" id="collapseRoute">
                                @foreach (__('bus_routes.route_2') as $key => $route)
                                    @if ($key >= 6)
                                        <div class="routes-cont">
                                            <div class="mt-3">
                                                <h6 class="mb-0">{{__('bus_routes.stop')}} {{$key}}</h6>
                                            </div>
                                            <div>
                                                <div class=" text-uppercase">{{$route['name']}}</div>
                                                {{$route['text']}}
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class=" d-flex justify-content-end">
                                <div class="arrow-route-div" data-rotate="0">
                                    <a  data-toggle="collapse" href="#collapseRoute" role="button" aria-expanded="false" aria-controls="collapseRoute" class="collapseRouteToggle">
                                        <i class="bi bi-arrow-down-circle arrow-route"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section section-cards section-gold">
        <div class="codrops-header">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="section-description">
                        <h3 class="title">{{__('yerevan_city_tour.h3')}}</h3>
                        <h6 class="category"> {{__('yerevan_city_tour.h6')}}</h6>
                        <h5 class="description">{!! __('yerevan_city_tour.text') !!} </h5>
                    </div>
                </div>
            </div>
        </div>
        <section class="section-intro ">
            <div class="isolayer isolayer--deco1 isolayer--shadow js">
                <ul class="grid">
                    <li class="grid__item first-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/purple-card.png') }}" alt="01" />
                        </a>
                    </li>
                    <li class="grid__item second-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/twitter-card.png') }}" alt="02" />
                        </a>
                    </li>
                    <li class="grid__item third-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/facebook-card.png') }}" alt="03" />
                        </a>
                    </li>
                    <li class="grid__item fourth-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/pricing-card.png') }}" alt="04" />
                        </a>
                    </li>
                    <li class="grid__item fifth-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/blog-card.png') }}" alt="05" />
                        </a>
                    </li>
                    <li class="grid__item sixth-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/capture.png') }}" alt="06" />
                        </a>
                    </li>
                    <li class="grid__item seventh-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/team-card.png') }}" alt="07" />
                        </a>
                    </li>
                    <li class="grid__item eight-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/testimonal-card.png') }}" alt="07" />
                        </a>
                    </li>
                    <li class="grid__item ninth-card">
                        <a class="grid__link" href="index.html#cards">
                            <img class="grid__img layer" src="{{ asset('assets/img/presentation-page/try/pricing-card-icon.png') }}" alt="07" />
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </div>

    <div class="section section-dark section-summary">
        <div class="container my-5">
            <h3 class="title text-center">{{__("services.our_services")}}</h3>

            <div class="row">
                  @foreach (App\Helpers\Main::services() as $service)
                    <div class="col-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <img src='{{asset("assets/img/icons/$service.png")}}'>
                            </div>
                            <div class="description">
                                <p>{{__("services.$service")}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="section section-icons">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="icons-nucleo">

                        <i class="first-left-icon nc-icon bi bi-sign-turn-slight-right add-animation bi bi-signpost"></i>
                        <i class="second-left-icon nc-icon bi bi-sign-stop-lights add-animation"></i>
                        <i class="third-left-icon nc-icon bi bi-signpost add-animation"></i>
                        <i class="fourth-left-icon nc-icon bi bi-broadcast-pin add-animation" style="font-size: 50px"></i>
                        <i class="fifth-left-icon nc-icon bi bi-bus-front add-animation"></i>
                        <i class="sixth-left-icon nc-icon bi bi-calendar2-day add-animation"></i>
                        <i class="seventh-left-icon nc-icon bi bi-globe add-animation"></i>
                        <i class="eighth-left-icon nc-icon bi bi-clock-history add-animation"></i>
                        <i class="ninth-left-icon nc-icon bi bi-person-walking add-animation"></i>
                        <i class="tenth-left-icon nc-icon bi bi-earbuds add-animation"></i>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <h3 class="title revealOnScroll mb-2 text-left ml-5">{{__('tour_packages.h2')}}</h3>
                    <h5 class="description mt-5 text-left fw-400 ml-5"> {!! __('tour_packages.text') !!} </h5>
                </div>
                <div class="col-md-3">
                    <div class="icons-nucleo">
                        <i class="first-right-icon nc-icon bi bi-qr-code add-animation"></i>
                        <i class="second-right-icon nc-icon  bi bi-signpost-split add-animation" style="font-size: 50px"></i>
                        <i class="third-right-icon nc-icon bi bi-recycle add-animation"></i>
                        <i class="fourth-right-icon nc-icon bi bi-calendar-check add-animation" style="font-size: 50px"></i>
                        <i class="fifth-right-icon nc-icon bi bi-buildings add-animation"></i>
                        <i class="sixth-right-icon nc-icon bi bi-wifi add-animation"></i>
                        <i class="seventh-right-icon nc-icon bi bi-ticket-perforated add-animation" style="font-size: 50px"></i>
                        <i class="eighth-right-icon nc-icon bi bi-sign-turn-left  add-animation"></i>
                        <i class="ninth-right-icon nc-icon bi bi-wifi add-animation"></i>
                        <i class="tenth-right-icon nc-icon bi bi-globe add-animation"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-free-demo section-dark" style="display: none">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="icon-github">
                        <i class="fa fa-github"></i>
                    </div>
                    <div class="section-description">
                        <h3 class="title">Free Demo</h3>
                        <h5 class="description">Do you want to test and see the benefits of this kit before purchasing it? You can give the demo version a try. It features enough basic components for you to get a feel of the design and also test the quality of the code. Get
                            it free on GitHub!</h5>
                        <div class="row space-top">
                            <div class="col-md-6">
                                <a href="https://github.com/creativetimofficial/paper-kit/tree/bootstrap4-development" target="_blank" class="btn btn-round btn-neutral">View Demo on Github</a>
                            </div>
                            <div class="col-md-6">
                                <a class="github-button" href="https://github.com/creativetimofficial/paper-kit" data-show-count="true" data-size="large" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                                <a class="github-button" href="https://github.com/creativetimofficial/paper-kit" data-icon="octicon-repo-forked" data-size="large" aria-label="Fork ntkme/github-buttons on GitHub">Fork</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-pricing">
                                <div class="card-body">
                                    <h3 class="card-title">Free Demo</h3>
                                    <ul>
                                        <li><b>60</b> Components*</li>
                                        <li><b>3</b> Example Pages</li>
                                        <li><b>0</b> Customised Plugins</li>
                                        <li><i class="fa fa-times text-danger"></i> Customised Icons </li>
                                        <li><i class="fa fa-times text-danger"></i> Beautiful Cards</li>
                                        <li><i class="fa fa-times text-danger"></i> Sections</li>
                                        <li><i class="fa fa-times text-danger"></i> Premium Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-pricing">
                                <div class="card-body">
                                    <h3 class="card-title">PRO Version</h3>
                                    <ul>
                                        <li> <b>1000+</b> Components*</li>
                                        <li> <b>15</b> Example Pages</li>
                                        <li> <b>8</b> Customised Plugins</li>
                                        <li><i class="fa fa-check text-success"></i> Customised Icons </li>
                                        <li><i class="fa fa-check text-success"></i> Beautiful Cards</li>
                                        <li><i class="fa fa-check text-success"></i> Sections</li>
                                        <li><i class="fa fa-check text-success"></i> Premium Support</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <br>
                            <p class="description">*Components: buttons, social buttons, navbars, dropdowns, tabs, tables, cards, select, tags, sliders etc. and their customisation by classes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-responsive section-gold" id="buyTicketCont">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="phone-container">
                        <img src="{{ asset('assets/img/presentation-page/responsive.png') }}" />
                    </div>
                </div>
                <div class="col-lg-3 col-md-auto col-sm-4">
                    <div class="form-cont">
                        <p class="mb-4">{{__('ticket.form.title')}}</p>
                        <form class="" method="post" action="" id="buyTicket">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('ticket.form.name')}}" name="name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('ticket.form.surname')}}" name="surname">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('ticket.form.phone')}}" name="phone">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="{{__('ticket.form.email')}} *" name="email">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="contry_id">
                                    <option selected disabled>{{__('ticket.form.country')}}</option>
                                    @foreach (__('country.countries') as $c_code => $country)
                                        <option value="{{$c_code}}">{{$country}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="number" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="{{__('ticket.form.quantity')}}" name="quantity">
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="contry_id" id="selectRoute">
                                    <option selected disabled>{{__('ticket.form.route')}}</option>
                                    @foreach (App\Helpers\Main::busRoutes() as $value)

                                        <option value="{{$value->id}}">{{__("bus_routes.routes.$value->key")}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="{{__('ticket.form.time')}}"  disabled>
                            </div>

                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-danger btn-block btn-round  w-75 m-auto ">{{__('ticket.form.button_text')}}</button>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-tablet-2"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> Fully Responsive Layout </h4>
                            <p> The kit is designed to be mobile first. Every components looks great on any screen size.</p>
                        </div>
                    </div>
                    <div class="info info-horizontal">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-html5"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title"> HTML5 Powered by Bootstrap 4 </h4>
                            <p>Paper Kit 2 Pro is built on top of Bootstrap 4. Get the benefits of the most powerful framework and the perks of amazing design.</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="section section-testimonials">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{ __('section-testimonials.comments')}}</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 ml-auto">
                    <div class="testimonials-people">
                        <img class="left-first-person add-animation" src="{{ asset('assets/img/persons/7.png') }}" alt />
                        <img class="left-second-person add-animation" src="{{ asset('assets/img/persons/8.png') }}" alt />
                        <img class="left-third-person add-animation" src="{{ asset('assets/img/persons/9.png') }}" alt />
                        <img class="left-fourth-person add-animation" src="{{ asset('assets/img/persons/0.png') }}" alt />
                        <img class="left-fifth-person add-animation" src="{{ asset('assets/img/persons/10.png') }}" alt />
                        <img class="left-sixth-person add-animation" src="{{ asset('assets/img/persons/11.png') }}" alt />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="page-carousel">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                @foreach ( __('section-testimonials.testimonials') as $k => $item)
                                    <div class="carousel-item  {{ $k == 0 ? 'active' : ''}}">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img" src='{{ asset("assets/img/persons/$k.png") }}' />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description fw-400">
                                                    {!! $item['text'] !!}
                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title fw-400">{{ $item['name']}}</h4>
                                                    <h6 class="card-category">{{ $item['city']}}</h6>
                                                    <div class="card-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="carousel-item active">
                                    <div class="card card-testimonial card-plain">
                                        <div class="card-avatar">
                                            <img class="img" src="https://s3.amazonaws.com/uifaces/faces/twitter/mlane/128.jpg') }}" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-description">
                                                "I'm newer to the front-end... With my creative side lacking in experience this really put me in the right spot to speed through the fast lane. I love this Design kit so much!"
                                            </h5>
                                            <div class="card-footer">
                                                <h4 class="card-title">Chase Jackson</h4>
                                                <h6 class="card-category">Web Developer</h6>
                                                <div class="card-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card card-testimonial card-plain">
                                        <div class="card-avatar">
                                            <img class="img" src="https://s3.amazonaws.com/creativetim_bucket/photos/134607/thumb.?1487680276" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-description">
                                                "Love the shapes and color palette on this one! Perfect for one of my pet projects!"
                                            </h5>
                                            <div class="card-footer">
                                                <h4 class="card-title">Robin Leysen</h4>
                                                <h6 class="card-category">Web Developer</h6>
                                                <div class="card-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card card-testimonial card-plain">
                                        <div class="card-avatar">
                                            <img class="img" src="https://s3.amazonaws.com/creativetim_bucket/photos/125268/thumb.jpeg?1497799215" />
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-description">
                                                "Love it. Use it for prototypes and along with Paper Dashboard."
                                            </h5>
                                            <div class="card-footer">
                                                <h4 class="card-title">Cristi Jora</h4>
                                                <h6 class="card-category">Web Developer</h6>
                                                <div class="card-stars">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <span class="fa fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <span class="fa fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mr-auto">
                    <div class="testimonials-people">
                        <img class="right-first-person add-animation" src="{{ asset('assets/img/persons/1.png') }}" alt />
                        <img class="right-second-person add-animation" src="{{ asset('assets/img/persons/2.png') }}" alt />
                        <img class="right-third-person add-animation" src="{{ asset('assets/img/persons/3.png') }}" alt />
                        <img class="right-fourth-person add-animation" src="{{ asset('assets/img/persons/4.png') }}" alt />
                        <img class="right-fifth-person add-animation" src="{{ asset('assets/img/persons/5.png') }}" alt />
                        <img class="right-sixth-person add-animation" src="{{ asset('assets/img/persons/6.png') }}" alt />
                    </div>
                </div>
            </div>
        </div>


    </div>

    @section('script')
        <script src="{{ asset('assets/js-dev/buy-ticket.js') }}" type="text/javascript"> </script>

    @endsection
@endsection
