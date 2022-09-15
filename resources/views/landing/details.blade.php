@extends('landing.landing')
@section('content')
    @push('styles')
        @vite(['resources/css/services.css'])
    @endpush
    <section id="services" class="services section-bg">
        <div class="container-fluid">
            <div class="section_title text-center">
                <h2>{{ $property->bedrooms }} Bedroom Apartment</h2>
                <div class="brand_border">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <i class="fas fa-handshake"></i>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row row-sm">
                <div class="col-md-12 _boxzoom">
                    <div class="zoom-thumb">
                        <ul class="piclist">
                            @foreach($property->images as $image)
                            <li><img src={{ asset($image->url) }} alt=""></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="_product-images">
                        <div class="picZoomer">
                            <img class="my_img" src={{ asset($property->images[0]->url) }} alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="_product-detail-content">
                <p class="_p-name"> Maslah Suites - {{$property->property_name}} </p>
                <div class="_p-price-box">


                    <div class="container-overview">
                        <h6>Overview</h6><hr>
                        <div class="row">
                            <div class="p-list">
                                <strong>Price : <span class="text-success">$ {{ $property->price }} </span></strong>
                            </div>
                            <div class="p-list">
                                <strong>Size :</strong> <span class="text-seecondary">{{ $property->size }} square ft.</span>
                            </div>
                            <div class="p-list">
                                <strong>Bedrooms :</strong> <span class="text-seecondary">{{ $property->bedrooms }}</span>
                            </div>
                            <div class="p-list">
                                <strong>Floor :</strong> <span class="text-seecondary">{{ $property->floor }}</span>
                            </div>
                            <div class="p-list">
                                <strong>Discount :</strong> <span class="text-seecondary">{{ $property->discount }}%.</span>
                            </div>
                        </div>
                    </div>

                    <div class="container-overview mt-3">
                        <h6><strong>Description</strong></h6><hr>
                        <p>
                         {{$property->description}}
                        </p><br>
                        <p><strong>Amenities</strong></p><br>
                        @foreach(explode('.',$property->amenities) as $amenity)
                        <ul class="ml-4">
                            <li>{{ $amenity }}</li>
                        </ul>
                        @endforeach
                    </div>
                </div>
                <a href="https://wa.me/254725498684?text=I'm%20interested%20in%20two%20bedroom%20unit%20for%20sale"> <button class="btn-theme btn mt-2" style="background-color: #06273a" tabindex="0">
                        <i class="fa-brands fa-whatsapp text-light mr-2"></i> <span class="text-light">Enquire</span>
                    </button></a>
            </div>
        </div>
        </div>
    </section>
@endsection
