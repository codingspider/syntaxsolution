<!-- Services Section Start -->
<div id="services" class="pb_50 pt_50">
    <div class="container">
        <div class="row pb_30">
            <div class="col-12">
                <div class="headline">
                    <h2>Our Services</h2>
                    <hr class="line">
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($service as $serv)
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="item-boxes">
                    <div class="icon">
                        <i class="{{ $serv->icon }}" aria-hidden="true"></i>
                    </div>
                    <h4><a href="#">{{ $serv->title }}</a></h4>
                    <p>{{ $serv->short_description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services Section End -->