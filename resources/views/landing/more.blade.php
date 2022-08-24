@extends('landing.landing')
@section('content')
    <div class="heading_container">
        <h2 style="margin-top: 60px">
           All Units
        </h2>
    </div>
        <div class="sale_container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            @foreach($data as $datum)
                                    <div class="card">
                                        <a href={{ route('details',$datum->id) }}>
                                            <div class="card__header">
                                                <img src={{ asset($datum->images[0]->url) }}
                                                    alt="card__image" class="card__image" width="500" height="300">
                                            </div>
                                        </a>
                                        <div class="card__body">
                                            <div class="row ml-1 justify-content-between">
                                                <span class="tag tag-blue">{{ $datum->bedrooms }} Bedrooms</span>
                                                <span class="text-success mr-1"><strong>$ {{ number_format($datum->price) }} </strong></span>

                                            </div>
                                            <p>{{ $datum->description }}</p>
                                            <p> <i class="fa-solid fa-text-width mr-3 "></i> {{ $datum->size }} square ft.</p>
                                            <p> <i class="fa-solid fa-location-dot mr-3 "></i> {{ $datum->floor }},Maslah Suites
                                            </p>
                                            <p><i class="fa-solid fa-tags mr-3"></i>{{$datum->discount}}% Discount</p>
                                        </div>
                                        <div class="ml-2 mb-2 explore">
                                            <a href={{ route('details',$datum->id) }}> <button class="btn">Explore
                                                    More</button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>

                </div>

            </div>
            {{ $data->links() }}
        </div>
@endsection
