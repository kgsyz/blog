<!DOCTYPE html>
<html lang="en">
    <head>
        @include('shared.meta-tags')

        @yield('title')

        <meta name="description" content="{{ $meta_description }}">

        @include('frontend.partials.css')
        @yield('css')
    </head>
    <body>
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
                        I Code For
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="/de/features/">编程笔记</a>
                        </li>
                        <li class="">
                            <a href="/de/preise/">科技前沿</a>
                        </li>
                        <li class="">
                            <a href="/de/events/">其他</a>
                        </li>
                        <li class="">
                            <a href="/de/faq/">论坛</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-signup-cta ">
                            <a href="/de/signup/" data-event-category="Referral to Signup" data-event-action="click" data-event-label="Signup Menu button / Header">登录</a>
                        </li>
                        <li class="">
                            <a href="http://start.whoopapp.com/" target="_blank">注册</a>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>
    </header>
        @include('frontend.blog.partials.header')

        @yield('content')

        @yield('unique-js')

        @include('frontend.blog.partials.footer')

    </body>
<scprit>
    @yield("script")
</scprit>
</html>
