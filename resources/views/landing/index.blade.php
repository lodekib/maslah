@extends('landing.landing')
@section('content')
    @push('styles')
      @vite(['resources/css/services.css'])
        @endpush
    <!-- find section -->
    <section class="find_section ">
        <div class="container">
            <form action={{ route('search') }} method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-5">
                        <select type="text" class="form-control" name="search_bedroom" placeholder="--number of bedrooms-- " required>
                            <option value="">--Select type--</option>
                            <option value="4">4 Bedroom</option>
                            <option value="3">3 Bedroom</option>
                            <option value="2">2 Bedroom</option>
                        </select>
                    </div>
                    <div class="col-md-5">
                        <select type="text" class="form-control" name="search_price" placeholder="--price range--" required>
                            <option value="">--Select price range--</option>
                            <option value="0-50000">{{ number_format(0) }} - $ {{ number_format(50000) }}</option>
                            <option value="51000-100000">$ {{ number_format(51000) }} - $ {{ number_format(100000) }}</option>
                            <option value="100001">Above  $ {{ number_format(100000) }}</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="">
                            search
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </section>

    <!-- end find section -->


    <!-- about section -->

    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-box">
                        <div class="section_title text-center">
                            <h2>About Us</h2>
                            <div class="brand_border">
                                <i class="fa fa-minus" aria-hidden="true"></i>
                                <i class="fas fa-handshake"></i>
                                <i class="fa fa-minus" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>
                            Maecenas ac leo eu dui tincidunt tincidunt. Aliquam dignissim
                            est non quam ultricies ultrices. Sed a fringilla lacus. Quisque rutrum faucibus
                            ex nec porttitor. Nulla a pretium nibh. Ut tempor risus ac scelerisque faucibus.
                            Nulla posuere enim luctus porttitor condimentum. Morbi rhoncus metus aliquam
                            condimentum tempus.
                            fringilla cursus. Integer luctus mi cursus erat mollis, vel ornare odio mattis.
                        </p>
                        <a href={{ route('about') }}>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- features sections -->
    <section class="features_section">
        <div class="section_title text-center">
            <h2>Features</h2>
            <div class="brand_border">
                <i class="fa fa-minus" aria-hidden="true"></i>
                <i class="fas fa-handshake"></i>
                <i class="fa fa-minus" aria-hidden="true"></i>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm feature_div">
                    <div class="card">

                        <div class="card-body">
                      <ul class="m-2">
                          <li>Spacious Lounge</li>
                          <li>Bedrooms with inbuilt wardrobe.</li>
                          <li>Kitchen fitted with granite</li>
                          <li>Backup power supply.</li>
                      </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm feature_div">
                    <div class="card">
                        <div class="card-body">
                          <ul class="m-2">
                              <li>Two high speed elevators.</li>
                              <li>Ample paarking lots.</li>
                              <li>Garden and kids playground.</li>
                              <li>Water flow throughout</li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm feature_div">
                    <div class="card">
                        <div class="card-body">
                          <ul class="m-2">
                             <li>24-hours CCTV security surveillance.</li>
                              <li>Walk in closet.</li>
                              <li>Air Conditioners.</li>
                              <li>Shops are also available.</li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- services -->
    <section id="service" class="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_title text-center">
                        <h2>Our Services</h2>
                        <div class="brand_border">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            <i class="fas fa-handshake"></i>
                            <i class="fa fa-minus" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. <br>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Development</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing   elit. Aenean commodo ligula.</p>
      <a href="{{ route('development') }}">
          <button class="btn btn-outline-dark">View Service</button>
      </a>
                        </div>
                    </div>
                </div><!--/END SINGLE SERVICE AREA-->
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fas fa-quidditch"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Buy and Sell</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                            <a href="{{ route('buy.sell') }}">
                                <button class="btn btn-outline-dark">View Service</button>
                            </a>
                        </div>
                    </div>
                </div><!--/END SINGLE SERVICE AREA-->
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fas fa-newspaper"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Managing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscin     elit. Aenean commodo ligula.</p>
                            <a href="{{ route('management') }}">
                                <button class="btn btn-outline-dark">View Service</button>
                            </a>
                        </div>
                    </div>
                </div><!--/END SINGLE SERVICE AREA-->
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fas fa-smile"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Joint Venture</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing   elit. Aenean commodo ligula.</p>
                            <a href="{{ route('joint.venture') }}">
                                <button class="btn btn-outline-dark">View Service</button>
                            </a>
                        </div>
                    </div>
                </div><!--/END SINGLE SERVICE AREA-->
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fa fa-crop"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Valuation</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula.</p>
                            <a href="{{ route('valuation') }}">
                                <button class="btn btn-outline-dark">View Service</button>
                            </a>
                        </div>
                    </div>
                </div><!--/END SINGLE SERVICE AREA-->
                <!--START SINGLE SERVICE AREA-->
                <div class="col-md-6 col-lg-4 col-sm-12">
                    <div class="single_service hvr-curl-top-right">
                        <div class="single_service-left">
                            <div class="icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                        </div>
                        <div class="single_service-body">
                            <h4 class="single_service-heading">Tenancy</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing     elit. Aenean commodo ligula.</p>
                            <a href="{{ route('tenancy') }}">
                                <button class="btn btn-outline-dark">View Service</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--/END SINGLE SERVICE AREA-->
            </div>
        </div>
    </section>

    <!--/END SERVICE AREA-->



    <!-- sale section -->

    <section class="sale_section layout_padding-bottom">
        <div class="container-fluid">
            <div class="section_title text-center">
                <h2>Trending Units</h2>
                <div class="brand_border">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <i class="fas fa-handshake"></i>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
            </div>

            <div class="col-12 text-right">
                        <a class="btn  mb-3 mr-1 indicators" href="#carouselExampleControls" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn  mb-3  indicators" href="#carouselExampleControls" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
            @if(count($properties) > 0)
            <div class="sale_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                @if(count($properties) <= 3 && count($properties) > 0)
                                    @foreach($properties as $property)
                                <div class="card">
                                   <a href={{ route('details',$property->id) }}>
                                       <div class="card__header">
                                           <img src={{ asset($property->images[0]->url) }}
                                               alt="card__image" class="card__image" width="500" height="300">
                                       </div>
                                   </a>
                                    <div class="card__body">
                                        <div class="row ml-1 justify-content-between">
                                            <span class="tag tag-blue">{{ $property->bedrooms }} Bedrooms</span>
                                            <span class="text-success mr-1"><strong>$ {{ number_format($property->price )}} </strong></span>

                                        </div>
                                        <p>{{ $property->description }}</p>
                                        <p> <i class="fa-solid fa-text-width mr-3 "></i> {{ $property->size }} square ft.</p>
                                        <p> <i class="fa-solid fa-location-dot mr-3 "></i> {{ $property->floor }},Maslah Suites
                                        </p>
                                        <p><i class="fa-solid fa-tags mr-3"></i>{{$property->discount}}% Discount</p>
                                    </div>
                                    <div class="ml-2 mb-2 explore">
                                        <a href={{ route('details',$property->id) }}> <button class="btn">Explore
                                                More</button>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                @elseif(count($properties) > 3 && count($properties) <= 6)
                                        @foreach($properties->slice(0,3) as $property)
                                            <div class="card">
                                                <a href={{ route('details',$property->id) }}>
                                                    <div class="card__header">
                                                        <img src={{ asset($property->images[0]->url) }}
                                                            alt="card__image" class="card__image" width="500" height="300">
                                                    </div>
                                                </a>
                                                <div class="card__body">
                                                    <div class="row ml-1 justify-content-between">
                                                        <span class="tag tag-blue">{{ $property->bedrooms }} Bedrooms</span>
                                                        <span class="text-success mr-1"><strong> $ {{ number_format($property->price )}} </strong></span>

                                                    </div>
                                                    <p>{{ $property->description }}</p>
                                                    <p> <i class="fa-solid fa-text-width mr-3 "></i> {{ $property->size }} square ft.</p>
                                                    <p> <i class="fa-solid fa-location-dot mr-3 "></i> {{ $property->floor }},Maslah Suites
                                                    </p>
                                                    <p><i class="fa-solid fa-tags mr-3"></i>{{$property->discount}}% Discount</p>
                                                </div>
                                                <div class="ml-2 mb-2 explore">
                                                    <a href={{ route('details',$property->id) }}> <button class="btn">Explore
                                                            More</button>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                @foreach($properties->slice(3,count($properties)) as $prop)
                                <div class="card">
                                    <a href={{ route('details',$prop->id) }}>
                                        <div class="card__header">
                                            <img src={{ asset($prop->images[0]->url) }}
                                                alt="card__image" class="card__image" width="500" height="300">
                                        </div>
                                    </a>
                                    <div class="card__body">
                                        <div class="row ml-1 justify-content-between">
                                            <span class="tag tag-blue">{{ $prop->bedrooms }} Bedrooms</span>
                                            <span class="text-success mr-1"><strong>$ {{ number_format($prop->price )}} </strong></span>

                                        </div>
                                        <p>{{ $prop->description }}</p>
                                        <p> <i class="fa-solid fa-text-width mr-3 "></i> {{ $prop->size }} square ft.</p>
                                        <p> <i class="fa-solid fa-location-dot mr-3 "></i> {{ $prop->floor }},Maslah Suites
                                        </p>
                                        <p><i class="fa-solid fa-tags mr-3"></i>{{$prop->discount}}% Discount</p>
                                    </div>
                                    <div class="ml-2 mb-2 explore">
                                        <a href={{ route('details',$prop->id) }}> <button class="btn">Explore
                                                More</button>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        @endif
                    </div>
                </div>

            </div>
            <div class="btn-box">
                <a href={{ route('more') }}>
                    Find More
                </a>
            </div>
            @else
                <div class="alert alert-info">
                    No units at the moment...
                </div>
            @endif
        </div>
    </section>

    <!-- end sale section -->


    <!-- client secction -->

    <section class="client_section layout_padding">
        <div class="container-fluid">
            <div class="section_title text-center">
                <h2>Testionials</h2>
                <div class="brand_border">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <i class="fas fa-handshake"></i>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
            </div>
            <div class="client_container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <span>Client 1</span>
                                        <hr>
                                    </h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered
                                        alteration
                                        in some form, by injected humour, or randomised words which don't look even slightly
                                        believable.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <span>Client 2</span>
                                        <hr>
                                    </h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered
                                        alteration
                                        in some form, by injected humour, or randomised words which don't look even slightly
                                        believable.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/client.jpg" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        <span>Client 3</span>
                                        <hr>
                                    </h5>
                                    <p>
                                        There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered
                                        alteration
                                        in some form, by injected humour, or randomised words which don't look even slightly
                                        believable.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- end client section -->


    <!-- us section -->
    <section class="us_section layout_padding2">

        <div>
            <div class="heading_container">
                <h2 id="why_heading">
                    Why Choose Us
                </h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/u-1.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3 class="price">
                                10+
                            </h3>
                            <h5>
                                Years of Housing
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/u-2.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                100+
                            </h3>
                            <h5>
                                Projects Delivered
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/u-3.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                2000+
                            </h3>
                            <h5>
                                Satisfied Customers
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="images/u-4.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h3>
                                %
                            </h3>
                            <h5>
                                Great Discounts
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->



    <!-- contact section -->

    <section>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8235003861523!2d36.84796481423299!3d-1.279506035978427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f114b3361a21b%3A0xe0b7b7c892ed3aea!2sMadina%20Mall!5e0!3m2!1sen!2ske!4v1659634811203!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- end contact section -->
@endsection
