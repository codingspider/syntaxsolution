@extends("partials.master")
@section('content')
<div class="banner-slider">
    <div class="bg"></div>
    <div class="banner-table">
        <div class="banner-text">
            <h1>Contact US</h1>
        </div>
    </div>
</div>
<div class="contact-area">
    <div class="container">
        <!-- Session Alert Start -->
        <!-- Session Alert End -->
        <div class="col-12 pb_20 pt_40">
            <div class="headline">
                <h4>Send us a Message</h4>
                <hr class="line">
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
            <form action="{{ url('sent-contact-mail') }}" method="post">
                @csrf 
                <div class="form-row row">
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Name" name="name" required="">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" class="form-control" placeholder="Email Address" name="email" required="">
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" placeholder="Subject" name="subject" required="">
                    </div>
                    <div class="form-group col-12">
                        <textarea class="form-control" rows="8" placeholder="Message" name="message"
                            required=""></textarea>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn-block btn-lg btn btn-contact btn-common">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 pb_20 pt_40">
            <div class="headline">
                <h4>Keep in touch</h4>
                <hr class="line">
            </div>
        </div>
        <!--Contact Start-->
        <div class="contact-area">
            <div class="container">
                <div class="row  pb_60">
                    @if($address)
                    <div class="col-xl-3 col-md-6">
                        <div class="contact-item flex">
                            <div class="contact-icon">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <p>{{ $address->content }}</p>
                            </div>
                        </div>
                    </div>
                    @endif 

                    @if($phone)
                    <div class="col-xl-3 col-md-6">
                        <div class="contact-item flex">
                            <div class="contact-icon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Phone Number</h4>
                                <p>{{ $phone->content }}</p>
                            </div>
                        </div>
                    </div>
                    @endif 

                    @if($email)
                    <div class="col-xl-3 col-md-6">
                        <div class="contact-item flex">
                            <div class="contact-icon">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Email Address</h4>
                                <p>{{ $email->content }}</p>
                            </div>
                        </div>
                    </div>
                    @endif 
                    @if(count($social_setting) > 0)
                    <div class="col-xl-3 col-md-6">
                        <div class="contact-item flex">
                            <div class="contact-icon">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                            <div class="contact-text">
                                <h4>Social Media</h4>
                                <p></p>
                                <div class="social-nav-contact">
                                    <ul>
                                        @foreach($social_setting as $ssetting)
                                        <li><a href="{{ $ssetting->url }}" target="blank"><i
                                                    class="{{ $ssetting->icon }}"></i></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    @endif 
                </div>
            </div>
        </div>
        <!--Contact End-->
    </div>
</div>
@endsection