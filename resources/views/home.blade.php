@extends('layouts.app')

@section('content')
    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $two }}</h3>
                                        <span>2 Bedrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-rocket danger font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $three }}</h3>
                                        <span>3 Bedrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-support primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $four }}</h3>
                                        <span>4 Bedrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pie-chart warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $total }}</h3>
                                        <span>Total Uploads</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="mt-5">Notifications</h6>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col"><small></small></th>
                    <th scope="col"><small>Sender Email</small></th>
                    <th scope="col"><small>Sender Phone</small></th>
                    <th scope="col"><small>Message</small></th>
                </tr>
                </thead>
                <tbody>
            @foreach(Auth::user()->unreadNotifications as $notification)
                <tr>
                    <td><small><i class="fas fa-circle-notch text-success"></i></small></td>
                    <td><small>{{ $notification->data['email'] }}</small></td>
                    <td><small>{{ $notification->data['phone'] }}</small></td>
                    <td><small>{{ $notification->data['message'] }}</small></td>
                </tr>
            @endforeach

                </tbody>
            </table>


{{--                @foreach(Auth::user()->unreadNotifications as $notification)--}}
{{--                    <div class="bg-danger d-flex">{{ $notification->data['sender_message'] }}</div>--}}
{{--                @endforeach--}}
        </section>
    </div>


@endsection
