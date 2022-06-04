    <!--Header Section Start-->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-12">
                    <div class="infos">
                        <ul>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>{{ $email->content }}</span>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>{{ $phone->content }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-12">
                    <div class="social-icons">
                        <ul>
                            <li>
                                <div class="social-nav">
                                    <ul>
                                        @foreach($social_setting as $social)
                                        <li><a href="{{ $social->url }}" target="blank"><i class="{{ $social->icon}}"></i></a></li>
                                       @endforeach 
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Header Section End-->