@extends('landing.landing')
@section('content')
    @push('styles')
        @vite(['resources/css/services.css'])
    @endpush
    <div class="section_title text-center mt-5">
        <h2>Development</h2>
        <div class="brand_border">
            <i class="fa fa-minus" aria-hidden="true"></i>
            <i class="fas fa-handshake"></i>
            <i class="fa fa-minus" aria-hidden="true"></i>
        </div>
    </div>
    <p class="services-paragraphs">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed porttitor eros.
        Sed rutrum mauris vel elit gravida, ut tempor lacus ullamcorper.
        Pellentesque tincidunt commodo diam at gravida. Maecenas aliquet, orci non hendrerit blandit, neque dolor pharetra ex, at dapibus neque mauris eu felis. Proin pharetra quam ornare, blandit tellus sit amet, luctus risus.
        Donec at purus fringilla felis tristique maximus eget et eros.
        Vivamus vel est venenatis, posuere est id, tristique ipsum.
    </p>
@endsection
