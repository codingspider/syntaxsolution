<!--Slider Start-->
<div class="slider">
    <div class="slide-carousel slider-one owl-carousel">
        @foreach($slider as $item)
        <div class="slider-item flex" style="background-image:url({{ $item->image }});">
            <div class="bg-slider"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="slider-text">
                            <div class="text-animated">
                                <h1>{{ $item->title }}</h1>
                            </div>
                            <div class="text-animated">
                                <p>{{ $item->sub_title }}</p>
                            </div>
                            <div class="text-animated">
                                <ul>
                                    <li><a class="contact-button" href="{{ url('contact-us') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!--Slider End-->