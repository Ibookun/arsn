@extends('layouts.layout-pages-internes')

@section('title')
  <?php echo $post->title ?>
@endsection

@section('content')

<!--=================================
 Blog-->

<section class="blog blog-single white-bg page-section-ptb">
  <div class="container">
    <div class="row">
<!-- ========================== -->
   <div class="col-lg-12">
       <div class="blog-entry mb-10">
            <div class="entry-image clearfix">
              <img class="img-fluid" src="/storage/<?php echo $post->image ?>" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> <?php echo $post->created_at ?></a></li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p><?php echo $post->body ?></p>
              </div>
          </div>
       </div>
<!-- ================================================ -->
         
<div class="blog-entry entry-content mt-20 mb-30 post-1 clearfix">
                        
           <div class="entry-share clearfix">
                 <div class="tags">
                    <h5>Tags:</h5>
                    <ul>
                      <li><a href="#">Design</a></li>
                      <li><a href="#">Creative</a></li>
                      <li><a href="#">HTML5</a></li>
                    </ul>
                </div>
                  <div class="social list-style-none float-right mt-10">
                      <strong>Partager : </strong>
                      <ul>
                          <li>
                              <a href="#"> <i class="fa fa-facebook"></i> </a>
                          </li>
                          <li>
                              <a href="#"> <i class="fa fa-twitter"></i> </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>

  <!-- ================================================ -->
  <div class="port-post clearfix mt-40">
       <div class="port-post-photo">
          <img src="../images/team/01.jpg" alt="">
        </div> 
        <div class="port-post-info">
          <h3 class="theme-color"><span>Auteur :</span> Kevin Martin</h3>
          <div class="port-post-social float-right">
            <strong>A suivre sur :</strong>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
          </div>
          <p>Proin gravida nibh vel velit auctor aliquet lorem ipsum dolor sit amet of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
        </div>
      </div>
 <!-- ================================================ -->


 <div class="related-work mt-40">
   <div class="row">
    <div class="col-ld-12 col-md-12">
         <h3 class="theme-color mb-20">Articles similaires</h3>  
         <div class="owl-carousel" data-nav-dots="false" data-items="2" data-xs-items="1" data-xx-items="1">
          <div class="item">
            <div class="blog-box blog-1 active">        
                 <div class="blog-info">
                  <span class="post-category"><a href="#">Business</a></span>
                  <h4> <a href="#"> Does your life lack meaning</a></h4>
                  <p>I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
                  <span><i class="fa fa-user"></i> By Webster</span>
                  <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                  </div>  
                  <div class="blog-box-img" style="background-image:url(images/blog/01.jpg);"></div>
                </div>
            </div>
            <div class="item">
             <div class="blog-box blog-1 active">        
               <div class="blog-info">
                <span class="post-category"><a href="#">Business</a></span>
                <h4> <a href="#"> Supercharge your motivation</a></h4>          
                <p>We also know those epic stories, those modern-day legends surrounding the.</p>
                <span><i class="fa fa-user"></i> By Webster</span>
                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                </div>  
                <div class="blog-box-img" style="background-image:url(images/blog/09.jpg);"></div>
              </div>
           </div>
            <div class="item">
            <div class="blog-box blog-1 active">
                <div class="blog-info">
                 <span class="post-category"><a href="#">Business</a></span>
                <h4> <a href="#">  Helen keller a teller & a seller </a></h4>         
                <p>I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
                <span><i class="fa fa-user"></i> By Webster</span>
                <span><i class="fa fa-calendar-check-o"></i> 21 April 2016 </span>
                </div>
                <div class="blog-box-img" style="background-image:url(images/blog/03.jpg);"></div>
              </div>
           </div>
        </div>
       </div>
      </div>
     </div>
 <!-- ================================================ -->
  <div class="blog-comments mt-40">
      <div class="comments-1">
         <div class="comments-photo">
           <img class="img-fluid" src="../images/team/01.jpg" alt="">
          </div>
           <div class="comments-info">
           <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
            <div class="port-post-social float-right">
              <a href="#">Répondre</a>
            </div>
              <p>Sit amet nibh vulputate cursus a sit amet mauris lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio  <a href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
         </div>
         </div>
         <div class="comments-1 comments-2">
         <div class="comments-photo">
           <img class="img-fluid" src="../images/team/02.jpg" alt="">
          </div>
           <div class="comments-info">
           <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
            <div class="port-post-social float-right">
              <a href="#">Répondre</a>
            </div>
              <p>Vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh..</p>
         </div>
         </div>
         <div class="comments-1 comments-2">
         <div class="comments-photo">
           <img class="img-fluid" src="../images/team/02.jpg" alt="">
          </div>
           <div class="comments-info">
           <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
            <div class="port-post-social float-right">
              <a href="#">Répondre</a>
            </div>
              <p>Aenean sollicitudin, lorem quis bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet..</p>
         </div>
         </div>
         <div class="comments-1">
         <div class="comments-photo">
           <img class="img-fluid" src="../images/team/01.jpg" alt="">
          </div>
           <div class="comments-info">
           <h4 class="theme-color"> Kevin Martin <span>Sep 15, 2017</span></h4>
            <div class="port-post-social float-right">
              <a href="#">Reply</a>
            </div>
              <p>Bibendum auctor Lorem ipsum dolor sit amet of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris <a href="#">http://themeforest.net</a> Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
         </div>
      </div>
  </div>
 <!-- ================================================ -->
<br/>
 <div class="row">
       <div class="col-lg-12 col-md-12">
       <h3 class="theme-color mb-30">Laisser un commentaire </h3> 
         <div class="row">
       <div class="col-lg-12 col-md-12">
         <div id="formmessage">Success/Error Message Goes Here</div>
         </div> 
       </div>
           <form id="contactform" class="gray-form form-row" role="form" method="post" action="php/contact-form.php">
                <div class="col-lg-6 col-md-6 col-sm-6   ">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Website URL">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Name">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email Adress">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputphone1" placeholder="Phone Number">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" rows="7" placeholder="message"></textarea>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div>
              </div>
                <div class="col-lg-12 col-md-12">
                    <input type="hidden" name="action" value="sendEmail">
                    <button id="submit" name="submit" type="submit" value="Send" class="button"><span>Envoyer</span></button>
                </div>
            </form>
            <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="../images/pre-loader/loader-02.svg" alt=""></div> 
           </div> 
        </div> 
      </div>
 <!-- ================================================ -->
     </div> 
    </div>
   </div>
  </section>
 
<!--=================================
 Blog-->

@endsection