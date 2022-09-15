@extends('landing.landing')
@section('content')
    @push('styles')
        @vite(['resources/css/services.css'])
    @endpush

    @if(session()->has('success'))
        <div class="alert alert-success col-4 mt-3">{{ session('success') }}</div>
        @endif
    @if(session()->has('error'))
        <div class="alert alert-danger col-4 mt-3">{{ session('error') }}</div>
    @endif
    <div class="contact_container">
        <div class="content">
            <div class="left-side">
                <div class="address details">
                    <i class="fas fa-map-marker-alt contact_color"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Madina Mall , Easteigh</div>
                    <div class="text-two">46372T , Valley Way</div>
                </div>
                <div class="phone details">
                    <i class="fas fa-phone-alt contact_color"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+254 7893 5647</div>
                    <div class="text-two">+254 7000 5678</div>
                </div>
                <div class="email details">
                    <i class="fas fa-envelope contact_color"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">maslahexecutives@gmail.com</div>
                    <div class="text-two">info@maslah.com</div>
                </div>
            </div>
            <div class="right-side">
                <div class="section_title text-center">
                    <h2>Message Us</h2>
                    <div class="brand_border">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        <i class="fas fa-handshake"></i>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                    </div>
                </div>
                <form action={{ route('notification') }} method='POST'>
                    @csrf
                    <div class="input-box">
                        <input type="text" placeholder="Name" name="name" required>
                    </div>
                    <div class="input-box">
                        <input type="tel" placeholder="Phone Number" name="phone" required>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email Address" name="email" required>
                    </div>
                    <div class="input-box message-box">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message..." required></textarea>
                    </div>
                    <div class="button ">
                        <input type="submit" value="Send Now" >
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
