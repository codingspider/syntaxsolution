@extends("partials.master")
@section('content')
<div class="about-area pt_60 pb_60">
    <div class="container">
        <div class="row">
            @if($mission)
            <div class="col-lg-6 mt_30">
                <div class="about-content">
                    <div class="headline-left">
                        <center>
                            <h2><span></span>  {{ $mission->title }}</h2>
                        </center>
                        <hr class="line">
                    </div>
                    <p>{{ $mission->body }}</p>
                </div>
            </div>
            @endif 
            @if($vission)
            <div class="col-lg-6 mt_30">
                <div class="headline-left">
                    <center>
                        <h2><span></span> {{ $vission->title }}</h2>
                    </center>
                    <hr class="line">
                </div>
                <p>{{ $vission->body }}</p>
            </div>
            @endif 
        </div>
        <div class="row">
            @if($history)
            <div class="col-lg-6 mt_30">
                <div class="about-content">
                    <div class="headline-left">
                        <center>
                            <h2><span></span> {{ $history->title }}</h2>
                        </center>
                        <hr class="line">
                    </div>
                    <p>{{ $history->body }}</p>
                </div>
            </div>
            @endif 

            <div class="col-lg-6 mt_30">
                <div class="headline-left">
                    <center>
                        <h2><span></span> Our SKILLS</h2>
                    </center>
                    <hr class="line">
                </div>
                <div class="progress-gallery main-prog">
                    @foreach($skills as $skill)
                    <div class="bar-container">
                        <p>{{ $skill->title }}</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar"
                                aria-valuenow="{{ $skill->value }}" aria-valuemin="0"
                                aria-valuemax="{{ $skill->value }}" style="width: {{ $skill->value }}%;">
                            </div>
                        </div>
                        <div class="percentage-show">{{ $skill->value }} %</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--Counter Start-->
    <div class="counterup-area pt_60 pb_90">
        <div class="bg-counterup"></div>
        <div class="container">
            <div class="row">
                @foreach($counters as $counter)
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item flex">
                        <h2 class="counter">{{ $counter->value }}</h2>
                        <h4>{{ $counter->title }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection