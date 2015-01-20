@extends('home.master')

@section('article')

    <h2 class="about_h">{{$postId}}您现在的位置是：<a href="/">首页</a>&gt;<a href="1/">模板分享</a>&gt;<a href="1/">个人博客模板</a></h2>
    <div class="index_about">
      <h2 class="c_titile">{{$post->post_title}}</h2>
      <p class="box_c"><span class="d_time">发布时间：{{date('Y-m-d H:i',$post->post_time)}}</span><span>编辑：杨青</span><span>浏览（390）</span><span>评论览（14）</span></p>
      <ul class="infos">
       {{$post->post_content}}
      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
        <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
          <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
          <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
          <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
          <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
        </ul>
      </div>
    </div>
@stop

@section('aside')
    @include('home.aside_categories')
    @include('home.aside_new_comment')
    @include('home.aside_copyright')
@stop