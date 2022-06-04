@extends('partials.master')
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>Our Services</h1>
        </div>
    </div>
</div>
<div class="service-page pt_40 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12 pt_10">
                <div class="headline">
                    <h4>DISCOVER WHAT WE PROVIDE</h4>
                    <hr class="line">
                </div>
            </div>
            @foreach($services as $ser)
            <div class="col-lg-6 col-sm-12">
                <div class="services-item effect-item">
                    <a href="{{ url('service/detail/'.$ser->id) }}">
                        <div class="services-photo"
                            style="background-image: url({{$ser->image }})">
                        </div>
                    </a>
                    <div class="services-text">
                        <h3><a href="{{ url('service/detail/'.$ser->id) }}">{{ $ser->title }}</a></h3>
                        <p>{{ $ser->short_description }}</p>
                        <div class="services-button">
                            <a class="text-white btn btn-project" href="{{ url('service/detail/'.$ser->id) }}">Read More <i
                                    class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection