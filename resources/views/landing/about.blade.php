@extends('landing.landing')
@section('content')
    @push('styles')
        @vite(['resources/css/services.css'])
    @endpush
    <section class="about_section">

        <div class="container">
            <div class="section_title text-center mt-15">
                <h2>Know us </h2>
                <div class="brand_border">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                    <i class="fas fa-handshake"></i>
                    <i class="fa fa-minus" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <div class="detail-box">

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipi
                            scing elit. Nulla consequat erat dui, a blandit augue co
                            nsectetur sit amet. Nullam luctus, eros ac pharetra interdum, leo
                            tellus rutrum purus, quis ultrices purus nulla quis lorem. Integer pharet
                            ra non nunc a commodo. Pellentesque habitant morbi tristique senec

                            a accumsan, magna tortor rhoncus odio, at tristique diam magna nec dui.
                        </p>

                    </div>
                </div>
            </div>


        </div>
    </section>


    <div class="section_title text-center">
        <h2>What we do</h2>
        <div class="brand_border">
            <i class="fa fa-minus" aria-hidden="true"></i>
            <i class="fas fa-handshake"></i>
            <i class="fa fa-minus" aria-hidden="true"></i>
        </div>
    </div>

    <div class="row1-container">
        <div class="service-box box-down cyan">
            <h5><small>Buying & Selling</small></h5>
            <p>We sell variety of housing property ranging from commercial to residential.</p>
        </div>

        <div class="service-box red">
            <h5><small>Management</small> </h5>
            <p>We manage property with value-creation mindset.</p>
        </div>

        <div class="service-box box-down blue">
            <h5><small>Tenancy</small></h5>
            <p>We provide credible opinions that adhere to IVS.</p>
        </div>

    </div>
    <div class="row2-container">
        <div class="service-box orange">
            <h5><small>Joint Venture</small></h5>
            <p>Regularly evaluates our talent to ensure quality</p>
        </div>

    </div>

    <div class="section_title text-center">
        <h2>Management team</h2>
        <div class="brand_border">
            <i class="fa fa-minus" aria-hidden="true"></i>
            <i class="fas fa-handshake"></i>
            <i class="fa fa-minus" aria-hidden="true"></i>
        </div>
    </div>


    <section class="our-team-section">
        <div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Director</h3>
                            <span class="post">Gulleid Kunow Mursal</span>
                            <span>+254710455296</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href=""> <i class="fa-brands fa-square-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Assistant Director</h3>
                            <span class="post">Najma Gulleid Kunow</span>
                            <span>+254715054422</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href=""> <i class="fa-brands fa-square-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Sales Manager</h3>
                            <span class="post">Abdullahi M Yusuf </span>
                            <span>+254725498684</span>
                        </div>
                        <ul class="social">
                            <li>
                                <a href=""> <i class="fa-brands fa-square-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>

    </section>
@endsection
