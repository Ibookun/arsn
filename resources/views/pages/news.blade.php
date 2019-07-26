@extends('layouts.layout-pages-internes')

@section('content') 
<!--=================================
page-title-->

<section class="post-title parallax" data-jarallax='{"speed": 0.6}'>
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12"> 
      <div class="page-title-name">
          @section('title')
            <h1>Blog (parcours en double colonne)</h1>
          @endsection
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Blog</a> <i class="fa fa-angle-double-right"></i></li>
            <li><span>Blog grid 2 column</span> </li>
       </ul>
      </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->


<!--=================================
 Blog-->

<section class="blog white-bg page-section-ptb">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="blog-entry mb-50">
            <div class="entry-image clearfix">
                <img class="img-fluid" src="../images/blog/01.jpg" alt="">
            </div>
            <div class="blog-detail">
                <div class="entry-title mb-10">
                    <a href="#">Blogpost With Image</a>
                </div>
                <div class="entry-meta mb-10">
                    <ul>
                        <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                        <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                        <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                    </ul>
                </div>
                <div class="entry-content">
                    <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, </p>
                </div>
                <div class="entry-share clearfix">
                    <div class="entry-button">
                        <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

        <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="blog-entry mb-50">
                <div class="entry-image clearfix">
                    <img class="img-fluid" src="../images/blog/01.jpg" alt="">
                </div>
                <div class="blog-detail">
                    <div class="entry-title mb-10">
                        <a href="#">Blogpost With Image</a>
                    </div>
                    <div class="entry-meta mb-10">
                        <ul>
                            <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, </p>
                    </div>
                    <div class="entry-share clearfix">
                        <div class="entry-button">
                            <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
    </div>
<!-- ================================================ -->

    <div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="blog-entry mb-50">
                    <div class="blog-entry-you-tube">
                    <div class="js-video [youtube, widescreen]">
                        <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="blog-detail">
                    <div class="entry-title mb-10">
                        <a href="#">Blogpost with Youtube Video </a>
                    </div>
                    <div class="entry-meta mb-10">
                        <ul>
                            <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis.</p>
                    </div>
                    <div class="entry-share clearfix">
                        <div class="entry-button">
                            <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

        <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="blog-entry mb-50">
                    <div class="blog-entry-you-tube">
                    <div class="js-video [youtube, widescreen]">
                        <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="blog-detail">
                    <div class="entry-title mb-10">
                        <a href="#">Blogpost with Youtube Video </a>
                    </div>
                    <div class="entry-meta mb-10">
                        <ul>
                            <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis.</p>
                    </div>
                    <div class="entry-share clearfix">
                        <div class="entry-button">
                            <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
    </div>
<!-- ================================================ -->

<div class="row"> 
        <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="blog-entry mb-50">
                    <div class="blog-detail">
                        <div class="entry-title mb-10">
                            <a href="#">Blogpost Without Image</a>
                        </div>
                        <div class="entry-meta mb-10">
                            <ul>
                                <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                                <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis</p>
                        </div>
                        <div class="entry-share clearfix">
                            <div class="entry-button">
                                <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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

        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="blog-entry mb-50">
                <div class="blog-detail">
                    <div class="entry-title mb-10">
                        <a href="#">Blogpost Without Image</a>
                    </div>
                    <div class="entry-meta mb-10">
                        <ul>
                            <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2018</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda provident this exercise dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis</p>
                    </div>
                    <div class="entry-share clearfix">
                        <div class="entry-button">
                            <a class="button arrow" href="#">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
    </div>
<!-- ================================================ -->

    <div class="row"> 
        <div class="col-lg-12 col-lg-12">
      <div class="entry-pagination">
        <nav aria-label="Page navigation example text-center">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
      </div>
        </div>
    </div>
<!-- ================================================ -->
  </div>
</section>
 
<!--=================================
 Blog-->
@endsection