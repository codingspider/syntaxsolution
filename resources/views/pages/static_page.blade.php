@extends("partials.master")
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>{{ $name }}</h1>
        </div>
    </div>
</div>
<div class="about-area pt_40">
    <div class="pb_40">
        <div class="container">
            <div class="row">
                @if($page_content)
                <div class="col-10 offset-1 text-center">
                    {!! $page_content->content !!}
                </div>
                @endif 
            </div>
        </div>
    </div>
</div>
@endsection