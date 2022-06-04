@extends('partials.master')
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>Projects </h1>
        </div>
    </div>
</div>
<div class="container" style="margin-bottom: 50px;">
    <div class="row">
        <div class="col-12">
            <div class="portfolio-menu">
                <ul id="filtrnav">
                    <li class="filtr filtr-active" data-filter="all">All</li>
                    @foreach($categories as $cat)
                    <li class="filtr" data-filter="{{ $cat->id }}">{{ $cat->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row filtr-container">
        @foreach($projects as $proj)
        <div class="col-lg-4 col-md-6 filtr-item" data-category="{{ $proj->category_id}}" data-sort="Menu">
            <div class="portfolio-group">
                <div class="portfolio-photo" style="background-image: url({{$proj->image }})">
                </div>
                <div class="portfolio-text">
                    <h3>{{ $proj->title }}</h3>
                    <p>{{ \Str::words($proj->short_description, 10, '...') }}</p>
                    <a class="btn btn-primary btn-project" href="{{ url('project/detail/'.$proj->id ) }}">Learn More <i
                            class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection