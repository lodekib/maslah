@extends('layouts.app')
@section('content')

    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                @foreach($properties as $property )
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src={{ asset($property->images[0]->url) }}></div>
                    <div class="col-md-6 mt-1">
                        <h5>{{ $property->property_name }}</h5>
                        <div class="d-flex flex-row">
                            <div class="ratings mr-2"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="ms-1">5</span>
                            <span class="ms-3"><small><strong>{{ $property->bedrooms }} Bedrooms</strong></small></span> <span class="ms-3"><small><strong>{{ $property->floor }}</strong></small></span>
                        </div>
                        @foreach(explode(".",$property->amenities) as $amenity)
                        <div class="mt-1 mb-1 spec-1 amenities"><span>{{ $amenity }}</span><span class="dot"></div>
                        @endforeach
                        <p class="text-justify text-truncate para mb-0">{{ $property->description }}<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h5 class="mr-1 text-success">Ksh {{ $property->price }}M</h5>
                        </div>
                        <h6 class="text-success"><strong>{{ $property->discount }}% discount</strong></h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-primary btn-sm" type="button">Details</button>
                            <form method="POST" action={{ route('remove.property',$property->id) }}>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm mt-2" type="submit">Delete Property</button>
                            </form>
                        </div>

                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
