<!--Navbar Start-->
<div id="strickymenu" class="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="logo flex">
                    <a href="{{ url('/') }}" class="navbar-logo">
                        <img style="height: 70px" src="{{ asset($logo->content) }}"
                            alt="{{ asset($logo->content) }}" srcset="">
                    </a>
                </div>
            </div>
            <div class="col-lg-9 col-12 main-menu">
                <div class="main-menu-item">
                    <ul class="nav-menu">
                        <li>
                            <a class="@if($title == 'Home Page') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('/') }}">Home</a>
                        </li>
                        <li>
                            <a class="@if($title == 'About US') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('about-us') }}">About</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Features') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('features') }}">Features</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Service') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('services') }}">Services</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Projects') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('projects') }}">Projects</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Our Team') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('teams') }}">Team</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Price') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('prices') }}">Prices</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Testimonial') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('testimonial') }}">Testimonials</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Blog') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('blogs') }}">Blog</a>
                        </li>
                        <li>
                            <a class="@if($title == 'FAQ') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('faq') }}">FAQ&#039;S</a>
                        </li>
                        <li>
                            <a class="@if($title == 'Contact US') {{ 'active-navbar-link' }} @endif "
                                href="{{ url('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Navbar End-->