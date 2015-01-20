 <div class="logo"><a href="/"></a></div>

 <nav id="topnav">
 @foreach(Config::get('site.header_nav') as $nav)
    <a href="{{$nav['href']}}" target="{{$nav['target'] or ''}}" title="{{$nav['title']}}">{{$nav['title']}}</a>
 @endforeach
    <a href="about.html">关于我</a>
    <a href="newlist.html">慢生活</a>
    <a href="share.html">模板分享</a>
    <a href="new.html">模板主题</a>
 </nav>