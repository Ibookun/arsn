@extends('layouts.layout-pages-internes')

@section('content')

<!--=================================
 Blog-->

 <section class="blog white-bg page-section-ptb">
  <div class="container">
    <div class="row">
            @if(!empty($posts) and $posts->count() > 0)
                @foreach($posts as $post)
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="blog-entry mb-50">
                            <div class="entry-image clearfix">
                                <img class="img-fluid" src="/storage/<?php echo $post->image ?>" alt="">
                            </div>
                            <div class="blog-detail">
                                <div class="entry-title mb-10">
                                    <a href="/news/<?php echo $post->id ?>"><?php echo $post->title ?></a>
                                </div>
                                <div class="entry-meta mb-10">
                                    <ul>
                                        <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                                        <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                        <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $post->created_at ?></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p> <?php echo $post->body ?></p>
                                </div>
                                <div class="entry-share clearfix">
                                    <div class="entry-button">
                                        <a class="button arrow" href="#">En Savoir Plus <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="social list-style-none float-right">
                                        <strong>Share : </strong>
                                        <ul>
                                            <li>
                                                <a href="#"> <i class="fa fa-facebook"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-twitter"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                            </li>
                                            <li>
                                                <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <div class="container">
                    {{$posts->links()}}            
                </div>


            @else
                <div>Il ny a pas de post enregistré</div>
            @endif
        
        <p></p>
        </div>

    </div>


</section>
 
<!--=================================
 Blog-->

@endsection