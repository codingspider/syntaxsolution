@extends('partials.master')
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
        @if($blog)
            <h1>{{ $blog->title }}</h1>
        @endif
        </div>
    </div>
</div>
<div class="blog-one-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            @if($blog)
            <div class="col-lg-8">
                <div class="single-blog">
                    <img src="{{ asset($blog->image) }}" alt="Post Image">
                    <h3>{{ $blog->title }}</h3>
                    <ul>
                        <li>
                            <i class="fa fa-calendar-o"></i> {{ $blog->created_at }}
                        </li>
                    </ul>
                    <p class="post-text"></p>
                    {!! $blog->long_description !!}
                    <p></p>
                </div>
            </div>
            @endif
            <!--Sidebar Start-->
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-item">
                        <h3>Recent Posts</h3>
                        @foreach($recents as $rec)
                        <div class="sidebar-recent-item">
                            <div class="recent-photo">
                                <a href="#">
                                    <img src="{{ asset($rec->image) }}"
                                        alt="Blog Photo">
                                </a>
                            </div>
                            <div class="recent-text">
                                <a href="{{ url('blog/detail/'.$rec->id) }}">{{ $rec->title }}</a>
                                <div class="rpwwt-post-date">
                                {{ $rec->created_at }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
           
            </div>
            <!--Sidebar End-->
        </div>
    </div>
</div>
@endsection