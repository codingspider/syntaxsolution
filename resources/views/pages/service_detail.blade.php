@extends('partials.master')
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
        @if($service)
            <h1>{{ $service->title }}</h1>
        @endif
        </div>
    </div>
</div>
<div class="single-service-area pt_30 pb_50">
    <div class="container">
        <div class="row">
            @if($service)
            <div class="col-lg-8">
                <div class="service-info">
                <div class="single-blog">
                    <img src="{{ asset($service->image) }}" alt="Post Image">
                    <h3>{{ $service->title }}</h3>
                    <p class="post-text"></p>
                    {!! $service->long_description !!}
                    <p></p>
                </div>
                </div>
            </div>
            @endif
            <div class="col-lg-4">
                <div class="service-sidebar">
                    <div class="service-sidebar-item headstyle">
                        <h4>Other Services</h4>
                        <ul>
                            @foreach($services as $ser)
                                @if($ser->id != $service->id)
                                <li><a href="{{ url('service/detail/'.$ser->id) }}">{{ $ser->title }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection