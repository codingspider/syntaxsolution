<!--Team Start-->
<section id="team" class="pt_50 pb_40">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2>Our Team</h2>
                    <hr class="line">
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($teams as $team)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="single-team">
                    <img src="{{ asset($team->image) }}" alt="Team Member">
                    <div class="team-details">
                        <div class="overlay"></div>
                        <div class="team-inner">
                            <h4 class="team-title">{{$team->name }}</h4>
                            <p>{{ $team->designation }}</p>
                            <ul class="social-list">
                                <li class="facebook"><a target="_blank" href="{{ $team->facebook }}"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="{{ $team->twitter }}"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li class="google-plus"><a target="_blank" href="{{ $team->instagram}}"><i
                                            class="fa fa-instagram"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="{{ $team->linkedin}}"><i
                                            class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>