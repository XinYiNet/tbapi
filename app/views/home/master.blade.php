<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title>@yield('title')</title>
<meta name="keywords" content="@yield('keywords')" />
<meta name="description" content="@yield('description')" />
<link href="/static/css/base.css" rel="stylesheet">
@section('load_css')
<link href="/static/css/style.css" rel="stylesheet">
@show
<link href="/static/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="/static/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
 <header>
     <h1>如影随形</h1>
     <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
     @include('home.nav')
 </header>
 <article>
 @yield('article')
 </article>
 <aside>
@section('aside')
    @include('home.aside_about')
    @include('home.aside_post_news')
    @include('home.aside_links')
    @include('home.aside_copyright')
@show
 </aside>

 <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 -->
</div>
</body>
</html>

