<!--Blog Start-->
<div class="blog-area pt_50 pb_50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2>Our Blog</h2>
                    <hr class="line">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel owl-carousel">
                    @foreach($blogs as $blog)
                    <div class="blog-item">
                        <a href="{{ url('blog/detail/'.$blog->id) }}">
                            <div class="blog-image"
                                style="background-image: url({{ $blog->image }})">
                            </div>
                        </a>
                        <div class="blog-text">
                            <h3><a href="{{ url('blog/detail/'.$blog->id) }}">{{ $blog->title }}</a></h3>
                            <p style="text-transform: lowercase;">
                            <p>{{ \Str::words($blog->short_description, 20, '...') }}</p>
                        </div>
                        <div class="blog-author">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{ $blog->created_at }}</li>
                                <li class="blog-button"><a href="{{ url('blog/detail/'.$blog->id) }}">Read more <i
                                            class="fa fa-chevron-circle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>