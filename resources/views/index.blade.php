﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--========== The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags ==========-->
<title>Home</title>

<!--==========Dependency============-->
<link rel="stylesheet" href="/blog/css/bootstrap.min.css">
<link rel="stylesheet" href="/blog/css/font-awesome.min.css">
<link rel="stylesheet" href="/blog/vendors/owl-carousel/assets/owl.carousel.css">
<link rel="stylesheet" href="/blog/vendors/magnific-popup/magnific-popup.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kanit:500">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:600,700italic">
<link href='https://fonts.googleapis.com/css?family=Dosis:400,200,300,500,600,800,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,500,700italic,700,900,900italic' rel='stylesheet' type='text/css'>

<!--==========Theme Styles==========-->
<link href="/blog/css/style.css" rel="stylesheet">
<link href="/blog/css/theme/green.css" rel="stylesheet">

<!--========== HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries ==========-->
<!--========== WARNING: Respond.js doesn't work if you view the page via file:// ==========-->
<!--==========[if lt IE 9]>
    <script src="/blog/js/html5shiv.min.js"></script>
    <script src="/blog/js/respond.min.js"></script>
<![endif]==========-->
</head>
<body class="home">

<header class="row transparent black header1" data-spy="affix" data-offset-top="0" id="header">
    <div class="container">
        <div class="row top-header">
            <div class="col-sm-4 search-form-col">
                <form action="#" method="get" class="search-form">
                    <div class="input-group">
                        <span class="input-group-addon"><img src="/blog/images/search-icon-white.png" alt=""></span>
                        <input type="search" class="form-control" placeholder="search">
                    </div>
                </form>
            </div>
            <div class="col-sm-4 logo-col text-center">
                <a href="{{route('login')}}">
                    <h4 style="color: #fff">
                        SweetSunnyFlower
                    </h4>
                </a>
            </div>
            <div class="col-sm-4 menu-trigger-col">
                <button class="menu-trigger pull-right">
                    <span class="active-page">home</span>
                    <img src="/blog/images/menu-align-white.png" alt="" class="icon-burger">
                    <img src="/blog/images/menu-close-white.png" alt="" class="icon-cross">
                </button>
            </div>
        </div>        
    </div>
    <div class="row menu-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 menu-col">
                    <div class="row">
                        <ul class="nav column-menu black-bg">
                            <li class="active dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Option 1</a></li>
                                    <li><a href="index2.html">Home Option 2</a></li>
                                    <li><a href="index3.html">Home Option 3</a></li>
                                    <li><a href="index4.html">Home Option 4</a></li>
                                    <li><a href="index5.html">Home Option 5</a></li>
                                    <li><a href="index6.html">Home Option 6</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="{{route('article.show',['id'=>1])}}">Blog Single 1</a></li>
                            <li><a href="single2.html">Blog Single 2</a></li>
                        </ul>
                        <ul class="nav column-menu black-bg">
                            <li><a href="single3.html">Blog Single 3</a></li>
                            
                            <li><a href="contact.html">contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4 subscribe-col">
                    <h5 class="widget-title">subscribe to our newsletter.</h5>
                    <form action="#" method="post" class="form-inline subscribe-form">                    
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                    </form>
                    <ul class="nav social-nav dark">
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="row featured-post-carousel">
    <div class="item post">
        <img src="/blog/images/featured-posts/1.jpg" alt="" class="img-responsive main-bg">
        <div class="post-content">
            <div class="container">
                <h5 class="post-meta"><i>in</i> <a href="#">Author Profile</a> | <a href="#">feb 17, 2016</a></h5>
                <h2 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h2>
                <a href="{{route('myself')}}" class="btn btn-primary"><span>read more</span></a>
            </div>
        </div>
    </div>
    <div class="item post">
        <img src="/blog/images/featured-posts/1-1.jpg" alt="" class="img-responsive main-bg">
        <div class="post-content">
            <div class="container">
                <h5 class="post-meta"><i>in</i> <a href="#">Author Profile</a> | <a href="#">feb 17, 2016</a></h5>
                <h2 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h2>
                <a href="{{route('myself')}}" class="btn btn-primary"><span>read more</span></a>
            </div>
        </div>
    </div>
    <div class="item post">
        <img src="/blog/images/featured-posts/1-2.jpg" alt="" class="img-responsive main-bg">
        <div class="post-content">
            <div class="container">
                <h5 class="post-meta"><i>in</i> <a href="#">Author Profile</a> | <a href="#">feb 17, 2016</a></h5>
                <h2 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h2>
                <a href="{{route('myself')}}" class="btn btn-primary"><span>read more</span></a>
            </div>
        </div>
    </div>
</section>
<div class="tlinks">Collect from <a href="/" >SweetSunnyFlower</a></div>
<section class="row content-wrap">
    <div class="container">
        <div class="row" id="post-masonry">
            @foreach($articles as $article)
            <!--Blog Post-->
            <article class="col-sm-4 post post-masonry post-format-image">
                <div class="post-wrapper row">
                    <div class="featured-content row">
                        <a href="{{route('article.show',['id'=>$article->id])}}"><img src="{{$article->cover}}" alt="" class="img-responsive"></a>
                    </div>
                    <div class="post-excerpt row">
                        <h5 class="post-meta">
                            <a href="javascript:;" class="date">{{$article->created_at->diffForHumans()}}</a>
                            <span class="post-author"><i>by</i><a href="#">{{$article->user->name}}</a></span>
                        </h5>
                        <h3 class="post-title"><a href="{{route('article.show',['id'=>$article->id])}}">{{$article->title}}</a></h3>
                        {{--<p>{!! $article->contents !!}...</p>--}}
                        <footer class="row">
                            <h5 class="taxonomy"><i>type of</i> <a href="#">{{$article->type}}</a></h5>
                            <div class="response-count"><img src="/blog/images/comment-icon-gray.png" alt="">{{$article->comments}}</div>
                        </footer>
                    </div>
                </div>
            </article>
            <!--Blog Post-->
            @endforeach
            <!--Author Widget-->
            {{--<aside class="col-sm-4 widget-author widget widget-with-posts post">--}}
                {{--<div class="widget-author-inner row">--}}
                    {{--<div class="author-avatar row"><a href="#"><img src="/blog/images/author.png" alt="" class="img-circle"></a></div>--}}
                    {{--<a href="#"><h2 class="author-name">Mark Sanders</h2></a>--}}
                    {{--<h5 class="author-title">small title</h5>--}}
                    {{--<p>The word nature is derived from the Latin word natura, or "essential qualities, innate disposition", and in ancient times, literally meant "birth".</p>--}}
                    {{--<a href="#" class="know-more">know more</a>--}}
                {{--</div>--}}
                {{--<ul class="nav social-nav">--}}
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-envelope"></i></a></li>--}}
                {{--</ul>--}}
            {{--</aside>--}}
            <!--Blog Post-->
                <!--
            <article class="col-sm-4 post post-masonry post-format-gallery">
                <div class="post-wrapper row">
                    <div class="featured-content row">
                        <div class="gallery-of-post">
                            <div class="item"><img src="/blog/images/posts/masonry/3.jpg" alt=""></div>
                            <div class="item"><img src="/blog/images/posts/masonry/3.jpg" alt=""></div>
                            <div class="item"><img src="/blog/images/posts/masonry/3.jpg" alt=""></div>
                            <div class="item"><img src="/blog/images/posts/masonry/3.jpg" alt=""></div>
                            <div class="item"><img src="/blog/images/posts/masonry/3.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="post-excerpt row">
                        <h5 class="post-meta">
                            <a href="#" class="date">feb 17, 2016</a>
                            <span class="post-author"><i>by</i><a href="#">Mark Sanders</a></span>
                        </h5>
                        <h3 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h3>
                        <p>In the broadest sense, is the natural, physical, or material world or universe...</p>
                        <footer class="row">
                            <h5 class="taxonomy"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count"><img src="/blog/images/comment-icon-gray.png" alt="">5</div>
                        </footer>
                    </div>
                </div>
            </article>
            <article class="col-sm-4 post post-masonry post-format-text">
                <div class="post-wrapper row">
                    <div class="post-excerpt row">
                        <h5 class="post-meta">
                            <a href="#" class="date">feb 17, 2016</a>
                            <span class="post-author"><i>by</i><a href="#">Mark Sanders</a></span>
                        </h5>
                        <h3 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h3>
                        <p>In the broadest sense, is the natural, physical, or material world or universe...</p>
                        <footer class="row">
                            <h5 class="taxonomy"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count"><img src="/blog/images/comment-icon-gray.png" alt="">5</div>
                        </footer>
                    </div>
                </div>
            </article>
            <article class="col-sm-4 post post-masonry post-format-video">
                <div class="post-wrapper row">
                    <div class="featured-content row">
                        <a href="{{route('article.show',['id'=>1])}}">
                            <img src="/blog/images/posts/masonry/4.jpg" alt="" class="img-responsive">
                            <img src="/blog/images/play-btn.png" alt="" class="video-mark">
                        </a>
                    </div>
                    <div class="post-excerpt row">
                        <h5 class="post-meta">
                            <a href="#" class="date">feb 17, 2016</a>
                            <span class="post-author"><i>by</i><a href="#">Mark Sanders</a></span>
                        </h5>
                        <h3 class="post-title"><a href="{{route('article.show',['id'=>1])}}">Nature, in the broadest sense, is the natural, physical, or material world or universe.</a></h3>
                        <p>In the broadest sense, is the natural, physical, or material world or universe...</p>
                        <footer class="row">
                            <h5 class="taxonomy"><i>in</i> <a href="#">image</a>, <a href="#">entertainment</a></h5>
                            <div class="response-count"><img src="/blog/images/comment-icon-gray.png" alt="">5</div>
                        </footer>
                    </div>
                </div>
            </article>
                -->
            <!--Twitter Widget-->
            {{--<aside class="col-sm-4 widget widget-twitter widget-with-posts post">--}}
                {{--<div class="widget-twitter-inner">--}}
                    {{--<h5 class="widget-meta"><i class="fa fa-twitter"></i>Twitter feed</h5>--}}
                    {{--<div class="row tweet-texts">--}}
                        {{--<p>Check out new post on my blog</p>--}}
                    {{--</div>--}}
                    {{--<div class="row timepast">1 day ago</div>--}}
                {{--</div>--}}
            {{--</aside>--}}
            <!--Blog Post-->
            <!--广告位-->
            {{--<article class="col-sm-4 post post-masonry post-format-quote">--}}
                {{--<div class="post-wrapper row">--}}
                    {{--<div class="post-excerpt row">--}}
                        {{--<h5 class="post-meta">--}}
                            {{--<a href="#" class="date">feb 17, 2016</a>--}}
                            {{--<span class="post-author"><i>by</i><a href="#">Mark Sanders</a></span>--}}
                        {{--</h5>--}}
                        {{--<h3 class="post-title">If everybody learns this simple art of loving his work, whatever it is, enjoying it without asking for any recognition, we would have more beautiful and celebrating world.</h3>--}}
                        {{--<h5 class="quote-maker"><a href="#">osho</a></h5>--}}
                        {{--<footer class="row">--}}
                            {{--<h5 class="taxonomy"><i>in</i> <a href="#">quote</a>, <a href="#">life</a></h5>--}}
                            {{--<div class="response-count"><img src="/blog/images/comment-icon-white.png" alt="">5</div>--}}
                        {{--</footer>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
            <!--Blog Post-->
            {{--<article class="col-sm-4 post post-masonry post-format-link">--}}
                {{--<div class="post-wrapper row">--}}
                    {{--<div class="post-excerpt row">--}}
                        {{--<h5 class="post-meta">--}}
                            {{--<a href="#" class="date">feb 17, 2016</a>--}}
                            {{--<span class="post-author"><i>by</i><a href="#">Mark Sanders</a></span>--}}
                        {{--</h5>--}}
                        {{--<h3 class="post-title"></h3>--}}
                        {{--<footer class="row">--}}
                            {{--<h5 class="taxonomy"><i>in</i> <a href="#">link</a>, <a href="#">product</a></h5>--}}
                            {{--<div class="response-count"><img src="/blog/images/comment-icon-gray.png" alt="">5</div>--}}
                        {{--</footer>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</article>--}}
            <!--Blog Post-->
        </div>
    </div>
</section>

<!--Footer-->
<footer class="row" id="footer">
    <div class="container">
        <div class="row top-footer">
            <div class="widget col-sm-3 widget-about">
                <div class="row m0"><a href="index.html"><img src="/blog/images/logo-black-green.png" alt=""></a></div>
            </div>
            <div class="widget col-sm-5 widget-menu">
                <div class="row">
                    <ul class="nav column-menu white-bg">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="{{route('article.show',['id'=>1])}}">Blog Single 1</a></li>
                        <li><a href="single2.html">Blog Single 2</a></li>
                    </ul>
                    <ul class="nav column-menu white-bg">
                        <li><a href="single3.html">Blog Single 3</a></li>
                        
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="widget col-sm-4 widget-subscribe">
                <h5 class="widget-title">subscribe to our newsletter.</h5>
                <form action="#" method="post" class="form-inline subscribe-form">                    
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><span>send</span></button>
                </form>
            </div>
        </div>
        <h5 class="copyright">Copyright &copy; 2017.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h5>
    </div>
</footer>

<!--========== jQuery (necessary for Bootstrap's JavaScript plugins) ==========-->
<script src="/blog/js/jquery-2.2.0.min.js"></script>
<script src="/blog/js/bootstrap.min.js"></script>
<script src="/blog/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/blog/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/blog/vendors/imagesLoaded/imagesloaded.pkgd.min.js"></script>
<script src="/blog/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="/blog/js/theme.js"></script>
</body>
</html>
