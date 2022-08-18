@extends('landing.landing')
@section('content')
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
                <div class="topic-text">Message Us</div>
                <p>Having any inquiries ? Don't hesitate to contact us.</p>
                <form action="#">
                    <div class="input-box">
                        <input type="text" placeholder="Name" required>
                    </div>
                    <div class="input-box">
                        <input type="tel" placeholder="Phone Number" required>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email Address" required>
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
