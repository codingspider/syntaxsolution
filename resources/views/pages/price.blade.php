@extends("partials.master")
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>Price</h1>
        </div>
    </div>
</div>
<div style="background:white !important;" class="price-area bg-area pt_50 pb_50">
    <div class="container">
        <div class="row pricing-tables">
            <div class="col-12 pt_10">
                <div class="headline">
                    <h4>THE MOST COMPETITIVE PRICES</h4>
                    <hr class="line">
                </div>
            </div>
            @foreach($prices as $price)
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pricing-table table-left">
                    <div class="icon">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="pricing-details">
                        <h2>{{ $price->name }}</h2>
                        <span>{{ $price->price }}$</span>
                        <ul>
                            {!! $price->detail !!}
                        </ul>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection