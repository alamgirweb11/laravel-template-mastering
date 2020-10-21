@extends('frontend.layouts.maintemplate')
@section('main-content')
<div class="container">
    <ul class="breadcrumb">
        <li><a href="{{route('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="blog.html">Blog</a></li>
      </ul>
    <div class="row">
  
      <div id="content" class="col-sm-9">
        <div class="blog1 blog">
          <div class="blog_img"><img src="{{ asset('frontend/image/blog/blog_4.jpg')}}" alt="" /></div>
          <h4 class="p-name"><a href="singale-blog.html">Image Post Format</a></h4>
          <ul class="blog-meta">
            <li><i class="fa fa-clock-o"></i><span class="dt-published">December 23, 2015</span></li>
            <li><i class="fa fa-comment-o"></i><span>2</span> Comment</li>
            <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin admin</a></span></li>
          </ul>
          <p class="p-summary"></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab consectetur! Sequi, aperiam, dignissimos! Molestias quidem temporibus, earum deleniti, quae voluptatibus cum, doloremque libero dolorum sapiente neque saepe magnam ullam nisi mollitia itaque voluptas illo pariatur inventore, …..</p>
          <a class="u-url" href="singale-blog.html">read more</a> </div>
        <div class="blog2 blog">
          <div class="blog_img video">
            <video controls>
              <source type="video/mp4" src="{{ asset('frontend/image/Lighthouse.mp4')}}">
              <source type="video/ogg" src="mov_bbb.ogg">
              Your browser does not support HTML5 video. </video>
          </div>
          <h4 class="p-name"><a href="singale-blog.html">Video Post Format</a></h4>
          <ul class="blog-meta">
            <li><i class="fa fa-clock-o"></i><span class="dt-published">December 23, 2015</span></li>
            <li><i class="fa fa-comment-o"></i><span>2</span> Comment</li>
            <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin</a></span></li>
          </ul>
          <p class="p-summary"></p>
          <p>Repellat minus perferendis dolor, animi dignissimos aut maiores molestiae perspiciatis doloremque, recusandae blanditiis reprehenderit voluptatibus unde ut? Ullam at nihil omnis consequatur, assumenda autem dolor quis velit fugiat magni, pariatur. Beatae modi quod, quia facilis voluptatum iusto atque vero, fugiat perferendis, officia maiores illo explicabo nesciunt doloribus eum praesentium quasi. Sint tempore reiciendis nisi, ex …..</p>
          <a class="u-url" href="singale-blog.html">read more</a> </div>
        <div class="blog3 blog">
          <div class="blog_img owl-carousel home-slider owl-theme gellery">
            <div class="item"> <a href="#"><img src="{{ asset('frontend/image/blog/blog_1.jpg')}}" alt="" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="{{ asset('frontend/image/blog/blog_2.jpg')}}" alt="" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="{{ asset('frontend/image/blog/blog_3.jpg')}}" alt="" class="img-responsive" /></a> </div>
          </div>
          <h4 class="p-name"><a href="singale-blog.html">Gellery Post Format</a></h4>
          <ul class="blog-meta">
            <li><i class="fa fa-clock-o"></i><span class="dt-published">December 23, 2015</span></li>
            <li><i class="fa fa-comment-o"></i><span>2</span> Comment</li>
            <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin</a></span></li>
          </ul>
          <p class="p-summary"></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae provident minus similique porro assumenda illo dolore ducimus vero ipsum illum ipsa velit, deleniti accusantium repellat facilis tempora ab consectetur! Sequi, aperiam, dignissimos! Molestias quidem temporibus, earum deleniti, quae voluptatibus cum, doloremque libero dolorum sapiente neque saepe magnam ullam nisi mollitia itaque voluptas illo pariatur inventore, …..</p>
          <a class="u-url" href="singale-blog.html">read more</a> </div>
        <div class="blog4 blog">
          <div class="blog_img"> <img src="{{ asset('frontend/image/blog/blog_5.jpg')}}" alt="" /> </div>
          <h4 class="p-name"><a href="singale-blog.html">Image Post Format</a></h4>
          <ul class="blog-meta">
            <li><i class="fa fa-clock-o"></i><span class="dt-published">December 23, 2015</span></li>
            <li><i class="fa fa-comment-o"></i><span>2</span> Comment</li>
            <li><i class="fa fa-user"></i><span><a rel="author" title="Posts by Admin" href="#">Admin</a></span></li>
          </ul>
          <p class="p-summary"></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non blanditiis, voluptas, esse at iste nulla in ratione quas incidunt aspernatur nostrum, veniam expedita recusandae quis libero aliquid animi, repellat harum velit eum assumenda. Asperiores perferendis sequi modi, sunt quasi veniam laborum, ea ducimus illum velit quam iure ipsam eligendi similique. Labore, dolore commodi sequi iste …..</p>
          <a class="u-url" href="singale-blog.html">read more</a> </div>
      </div>
      <!-- end blog-home -->
  
  <div id="column-right" class="col-sm-3 hidden-xs column-left">
          <div class="columnblock-title">Categories</div>
          <div class="blog-categories-block category_block">
            <div class="list-group"> <a class="list-group-item" href="#">Audio</a> <a class="list-group-item" href="#">Gallery</a> <a class="list-group-item" href="#">Link</a> <a class="list-group-item" href="#">Quote</a> <a class="list-group-item" href="#">Uncategorized</a> <a class="list-group-item last" href="#">Video</a> </div>
          </div>
        <div class="productblock-title">Recent Posts</div>
        <div class="blog-categories-block category_block">
          <div class="list-group"> <a class="list-group-item" href="#">Gallery Post Format</a> <a class="list-group-item" href="#">Recent Posts</a> <a class="list-group-item" href="
      #">Gallery Post Format</a> <a class="list-group-item" href="#">Standard Post Format</a> <a class="list-group-item last" href="#">Image Post Format</a> </div>
        </div>
@endsection