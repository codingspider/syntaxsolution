@extends("partials.master")
@section('content')

<div class="choose-area pb_60">
    <div class="container">
        <div class="row">
            <div class="col-12 pt_40">
                <div class="headline">
                    <h4>A CHOICE THAT MAKES THE DIFFERENCE</h4>
                    <hr class="line">
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($features as $feat)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="choose-item flex">
                    <div class="choose-icon">
                        <i class="{{ $feat->icon }}" aria-hidden="true"></i>
                    </div>
                    <div class="choose-text">
                        <h4>{{ $feat->title }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection