@extends("_layouts.home")

@section('content')

<div class="fh5co-slider">
    <div class="owl-carousel owl-carousel-fullwidth">
        @foreach($slides as $slide)
            <div class="item" style="background-image:url({{$slide->thumb}})">
                <div class="fh5co-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="fh5co-owl-text-wrap">
                                <div class="fh5co-owl-text text-center to-animate">
                                    <h2 class="fh5co-sub-lead">{{$slide->desc}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div id="fh5co-main">
    <!-- Features -->

    <div id="fh5co-features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="fh5co-section-lead">Key Words</h2>
                    <h3 class="fh5co-section-sub-lead">{{ Inspiring::quote() }}</h3>
                </div>
                <div class="fh5co-spacer fh5co-spacer-md"></div>
            </div>
            <div class="row text-left">
                <div class="col-md-8" style="border-left: 3px solid #FBB040">
                    <h2 class="fh5co-section-lead" style="font-weight: bold">最新资讯</h2>
                </div>
                <div class="fh5co-spacer fh5co-spacer-md"></div>
            </div>
            <div class="row">
                @foreach($pages as $page)
                    <div class="col-md-12 col-sm-12 fh5co-feature-border">
                        <div class="fh5co-feature border">
                            <div class="fh5co-feature-icon to-animate">
                                <i class="icon-list"></i>
                            </div>
                            <div class="fh5co-feature-text">
                                <h3>{{$page->title}}</h3>
                                <p>{{$page->body}}</p>
                                <p><a href="{{ URL('pages/'.$page->id) }}">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features -->


    <div class="fh5co-spacer fh5co-spacer-lg"></div>
    <!-- Products -->
    <div class="container" id="fh5co-products">
        <div class="row text-left">
            <div class="col-md-8" style="border-left: 3px solid #FBB040">
                <h2 class="fh5co-section-lead" style="font-weight: bold">专辑首发</h2>
            </div>
            <div class="fh5co-spacer fh5co-spacer-md"></div>
        </div>
        <div class="row">
            @foreach($categories as $category)
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
                    <div class="fh5co-product">
                        <img src="{{$category->thumb}}" style="width:200px;height: 250px;" class="img-responsive img-rounded to-animate">
                        <h4>{{$category->name}}</h4>
                        <p>{{$category->desc}}</p>
                        <p><a href="#">Read more</a></p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <!-- Products -->
    <div class="fh5co-spacer fh5co-spacer-lg"></div>

    <div id="fh5co-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img
                            src="images/client_1.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template"
                            class="img-responsive"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img
                            src="images/client_2.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template"
                            class="img-responsive"></div>
                <div class="visible-sm-block visible-xs-block clearfix"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img
                            src="images/client_3.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template"
                            class="img-responsive"></div>
                <div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img
                            src="images/client_4.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template"
                            class="img-responsive"></div>
            </div>
        </div>
    </div>

    <div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
        <div class="fh5co-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="fh5co-hero-wrap">
                        <div class="fh5co-hero-intro text-center">
                            <h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Design is not just what it looks like
                                and feels like. Design is how it works. <span class="quo">&rdquo;</span></h1>
                            <p class="author">&mdash; <cite>Steve Jobs</cite></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection