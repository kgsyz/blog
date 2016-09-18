@extends('frontend.layout')

@section('title')
    <title>{{ $tag->title or config('blog.title') }}</title>
@stop

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/github-gist.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/github-gist.min.css">

@endsection
<header class="header  push-down-45">
    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" title="Start..." class="navbar-brand" href="/de/">
                    <!-- <div class="mainpage-whoop-logo"></div> -->
                    <img src="https://vuejsfeed.com/img/vuejsfeed-medium.png" srcset="/images/logos/whoop-logo-72.png 1x, /images/logos/whoop-logo-144.png 2x" alt="Whoop! Logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="/de/features/">Features</a>
                    </li>

                    <li class="">
                        <a href="/de/preise/">Preise</a>
                    </li>
                    <li class="">
                        <a href="/de/kunden/">Kunden</a>
                    </li>
                    <li class="">
                        <a href="http://blog.whoopapp.com/">Blog</a>
                    </li>
                    <li class="">
                        <a href="/de/events/">Events</a>
                    </li>
                    <li class="">
                        <a href="/de/faq/">FAQ</a>
                    </li>
                </ul>


                <ul class="nav navbar-nav navbar-right">


                    <li class="phone-number"><a href="tel:+4373299700252" data-event-category="Telephone" data-event-action="tel" data-event-label="Telephone link / Header">+43 732 997002-52</a></li>


                    <li class="nav-signup-cta ">
                        <a href="/de/signup/" data-event-category="Referral to Signup" data-event-action="click" data-event-label="Signup Menu button / Header">Signup</a>
                    </li>
                    <li class="">
                        <a href="http://start.whoopapp.com/" target="_blank">Login</a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
</header>
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8">
                @foreach ($posts as $post)

                    <div class="boxed  push-down-45">
                        <!-- Featured image and meta start -->
                        <div class="meta-index">
                            <img class="wp-post-image"
                                 src="https://d2jq2hx2dbkw6t.cloudfront.net/83/data-1590455_1280.jpg"
                                 alt="Blog image" width="748" height="324">
                            <div class="meta__container">
                                <div class="row">
                                    <div class="col-xs-12  col-sm-4">
                                        <div class="meta__comments">
                                            <a href="https://vuejsfeed.com/blog/vuexfire-firebase-synchronization-with-vuex-store#disqus_thread"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Featured image and meta end -->

                        <!-- Start of the blogpost -->

                        <div class="row">
                            <div class="col-xs-10  col-xs-offset-1">
                                <!-- Start of the content -->
                                <div class="post-content--front-page">
                                    <h2 class="front-page-title">
                                        <a href="https://vuejsfeed.com/blog/vuexfire-firebase-synchronization-with-vuex-store">{{ $post->title }}</a>
                                    </h2>
                                    <h3>{{ $post->subtitle }}</h3>
                                </div>

                                <!-- End of the content -->
                                <a href="{{ $post->url($tag) }}">
                                    <div class="read-more">
                                        阅读全部
                                        <div class="read-more__arrow">
                                            <span class="glyphicon glyphicon-calendar">一天前</span><span
                                                    class="glyphicon glyphicon-comment">&nbsp;39</span> <span
                                                    class="glyphicon glyphicon-chevron-right"></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4">
                <div class="sidebar  boxed  push-down-30">
                    <div class="col-xs-10  col-xs-offset-1">

                        <!-- Widget featured post -->
                        <div class="widget-featured-post  push-down-30">
                            <h6>Featured post</h6>
                            <a href="https://vuejsfeed.com/blog/announcing-vuedo">
                                <img src="https://d2jq2hx2dbkw6t.cloudfront.net/17/vuedo post.png"
                                     alt="Featured post"
                                     width="293" height="127">
                                <h4>
                                    Announcing Vuedo
                                </h4>
                                <p>Vuedo is a live example of how everything works together. The back-end is built
                                    with
                                    Laravel and the front with Vue. A lot of libraries have been combined to develop
                                    Vuedo,
                                    an open source blog platform.</p>
                            </a>
                        </div>

                        <!-- Widget categories -->


                        <div class="widget-categories push-down-30">
                            <h6>Categories</h6>
                            <ul>
                                <li>
                                    <a href="https://vuejsfeed.com/category/news">News &nbsp; <span
                                                class="widget-categories__text">(15)</span> </a>
                                </li>
                                <li>
                                    <a href="https://vuejsfeed.com/category/plugins">Plugins &nbsp; <span
                                                class="widget-categories__text">(18)</span> </a>
                                </li>
                                <li>
                                    <a href="https://vuejsfeed.com/category/tutorials">Tutorials &nbsp; <span
                                                class="widget-categories__text">(10)</span> </a>
                                </li>
                                <li>
                                    <a href="https://vuejsfeed.com/category/meetups">Meetups &nbsp; <span
                                                class="widget-categories__text">(1)</span> </a>
                                </li>
                                <li>
                                    <a href="https://vuejsfeed.com/category/featured">Featured &nbsp; <span
                                                class="widget-categories__text">(1)</span> </a>
                                </li>
                                <li>
                                    <a href="https://vuejsfeed.com/category/showcase">Showcase &nbsp; <span
                                                class="widget-categories__text">(15)</span> </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Widget posts -->

                    <!-- Widget submit -->
                    <div class="widget-posts  push-down-30">
                        <h6>Submit Yours</h6>
                        <h5>
                            <a href="/submit">Have you created or seen something awesome related to Vue.js? Submit
                                it
                                here to share it with the community of Vue.js!</a>
                        </h5>
                        <a href="/submit" class="btn btn-primary btn-primary--transparent"><i
                                    class="fa fa-pencil-square-o" aria-hidden="true"></i> Submit yours </a>
                    </div>

                    <!-- Widget Twitter -->
                    <div class="widget-twitter  push-down-30">
                        <h6>Twitter</h6>
                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true"
                                allowfullscreen="true" class="twitter-timeline twitter-timeline-rendered"
                                style="position: static; visibility: visible; display: inline-block; width: 100%; height: 350px; padding: 0px; border: none; max-width: 100%; min-width: 180px; margin-top: 0px; margin-bottom: 0px; min-height: 200px;"
                                data-widget-id="profile:vuejsfeed" title="Twitter Timeline"></iframe>
                        <script async="" src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('script')
    <script id="dsq-count-scr" src="//vuejsnews.disqus.com/count.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
@endsection


