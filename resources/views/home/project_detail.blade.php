@extends('partials.master')
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>@if($projects) {{ $projects->title }} @endif </h1>
        </div>
    </div>
</div>
<div class="portfolio-details pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div>
                    <img src="{{ asset($projects->image) }}" alt="Project Image">
                </div>
                <div class="portfolio-details-text">
                    <h3>Project Overview</h3>
                    <p>@if($projects) {!! $projects->long_description !!} @endif </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-sidebar">
                    <div class="portfolio-details headstyle">
                        <h4>PROJECT DETAILS</h4>
                        @if($projects)
                        <ul>
                            <li><span>Client Name:</span><br>{{ $projects->client_name }}</li>
                            <li><span>Project Start Date:<br></span>{{ $projects->start_date }}</li>
                            <li><span>Project End Date:<br></span>{{ $projects->end_date }}</li>
                            <li><span>Client Feedback:<br></span>{{ $projects->feedback }}</li>
                        </ul>
                        @endif 
                    </div>
                </div>
            <br>
            </div>
        </div>
    </div>
</div>
@endsection 