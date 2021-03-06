<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <title> Homepage </title>
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href="css/fonts.css" rel="stylesheet">
        <link href="css/simple-line-icons.css" rel="stylesheet">
        <!-- pages css  -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive-style.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    </head>
    <body>
        <?php
            require('include/header.php');
        ?>
        <section class="slider-sec">
            <div data-pause="false" data-ride="carousel" class="banner carousel slide carousel-fade" id="slider">
                <!-- Wrapper for slides -->
                <div role="listbox" class="carousel-inner">
                     <div style="background-image:url(img/slider-1.png);" class="item active">
                        <div class="caption-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <div class="caption-info-inner text-center">
                                            <h1 class="animated flipInX">We Make People Awesome</h1>
                                            <p class="animated lightSpeedIn">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                            <a class="animated fadeIn btn-primary page-scroll" href="#contact-us">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image:url(img/slider-2.jpg);" class="item">
                        <div class="caption-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <div class="caption-info-inner text-center">
                                            <h1 class="animated fadeInDown">Saloons that Suits your personality</h1>
                                            <p class="animated fadeInUp">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                            <a class="animated fadeInUp btn-primary page-scroll" href="#packages">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-image:url(img/slider-3.jpg);" class="item">
                        <div class="caption-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                                        <div class="caption-info-inner text-center">
                                            <h1 class="animated fadeInLeft">Find your Stylist Today</h1>
                                            <p class="animated fadeInLeft">Lorem Ipsum is simply dummy text of the printing and typeseatting industry. Lorem Ipsum has been the industry's</p>
                                            <a class="animated fadeInLeft btn-primary page-scroll" href="#hot-deals">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end carousel-inner-->
                <!-- Controls -->
                <a data-slide="prev" href="#slider" class="control left"><i class="fa fa-arrow-left"></i></a>
                <a data-slide="next" href="#slider" class="right control"><i class="fa fa-arrow-right"></i></a>
            </div>
            <div class="search-form">
                <div class="container">
                    <form class="horizontal-form customize">
                        <div class="col-md-12 col-sm-12">
                            <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                <input  type="text" class="form-control input1" name="password" placeholder="Find a service or saloon">
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
                                <input type="text" class="form-control input2"  placeholder="Enter your area">
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12 no-padding">
                                <a class="btn custom-btn" href="javascript:void(0);">Search</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="how-it-works-sec">
            <div class="section-title text-center">
                <h2>How it <span class="pink">Works</span></h2>
            </div>
            <div class="container">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="step-works wow fadeInLeft" wow-data-delay="0.4s">
                        <div class="content-section">
                            <div class="works-img">
                                <img src="img/businesswoman.svg" alt="images">
                            </div>
                            <h4>Professionals</h4>
                            <p>Select best, experienced, friendly, and background-checked professionals </p>              
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="step-works wow fadeInLeft" wow-data-delay="0.6s">
                        <div class="content-section book-sec">
                            <div class="works-img">
                                <img src="img/book.svg" alt="images">
                            </div>
                            <h4>Book</h4>
                            <p>One-stop online platform for both men and women to book all the appointments.</p>                     
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="step-works wow fadeInLeft" wow-data-delay="0.8s">
                        <div class="content-section">
                            <div class="works-img enjoy">
                                <img src="img/enjoy.svg" alt="images">
                            </div>
                            <h4>Enjoy a hassle free service</h4>
                            <p>Relax and Enjoy our service provided by the fully-equipped professionals</p>          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-services">
            <div id="services" class="services item">
                <div class="section-title text-center">
                    <h2>Our <span class="pink">Services</span></h2>
                </div>
                <div class="container">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">
                                    <a href="#">
                                        <img alt="..." src="img/massage-therapy.jpg">
                                        <div class="img-content">
                                            Massage Treatments <i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">
                                    <a href="#">
                                        <img alt="..." src="img/facials.jpg">
                                        <div class="img-content">
                                            Top Facial Treatments <i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">
                                    <a href="#">
                                        <img alt="..." src="img/img-7.png">
                                        <div class="img-content">
                                            Elite Hair Wash <i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">

                                    <a href="#">
                                        <img alt="..." src="img/img-1.png">
                                        <div class="img-content">
                                            Nail Treatment <i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">
                                    <a href="#">
                                        <img alt="..." src="img/color.png">
                                        <div class="img-content">
                                            Top Hair Color Salons<i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-md-4 padding-lr-0 item">
                                <div class="service">
                                    <a href="#">
                                        <img alt="..." src="img/img-4.png">
                                        <div class="img-content">
                                            Top Hair Cut Salons<i class="fa fa-angle-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="trading-style">
            <div class="section-title text-center">
                <h2>TRENDING <span class="pink">STYLES</span></h2>
            </div>
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="owl_otr_div wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="owl-demo1 owl-carousel">
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/1-.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/2-.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/3-.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/4-.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/5.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/6.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div> 
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/7.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>
                            <div class="item">
                                <div class="news_blk">
                                    <img src="img/8.jpg" alt="Owl Image" class="img-responsive">
                                </div>  
                            </div>                                               
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="professional-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                        <div class="stats-bottom text-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 p-0">
                                <div class="wrap-count">
                                    <h3>Appointments</h3>
                                    <span class="count" data-counter="counterup" data-value="2450">2450</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 p-0">
                                <div class="wrap-count">
                                    <h3>Saloons</h3>
                                    <span class="count" data-counter="counterup" data-value="51750">51750</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 p-0">
                                <div class="wrap-count">
                                    <h3>Satisfied Customers</h3>
                                    <span class="count" data-counter="counterup" data-value="1,205,000">1,205,000</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 p-0">
                                <div class="wrap-count">
                                    <h3>Average Rating</h3>
                                    <span class="count" data-counter="counterup" data-value="4.5">4.5</span><span class="rate-star">Star</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mobile-app-sec">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Book on the <span class="pink">Go</span></h2>
                </div>
                <div class="slider-outer">
                    <div id="demo" class="app-custom-slider">
                        <div class="span12">
                            <div class="main-slider wow bounceInUp">
                                <div class="iphone-frame">
                                    <img src="img/iphone.png" alt="Iphone">
                                </div>
                                <div id="sync1" class="owl-carousel test main-img-outer">
                                    <div class="item">
                                        <div class="slider-main-img" style="">                                   
                                            <img src="img/search.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-main-img" style="">                                   
                                            <img src="img/call.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-main-img" style="">                                   
                                            <img src="img/near-map.jpg">
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="slider-main-img" style="">                                   
                                            <img src="img/plans.jpg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thumbnail-slider">
                                <div id="sync2" class="owl-carousel thumbnail-outer">
                                    <div class="item wow bounceInLeft" data-wow-duration="0.8s" >
                                        <div class="slider-thumbnail-img">
                                            <i class="icon icon-map"></i>
                                            <h4>Find Professionals</h4>                                
                                        </div>
                                    </div>
                                    <div class="item wow bounceInUp" data-wow-duration="1.4s" >
                                        <div class="slider-thumbnail-img">
                                            <i class="icon icon-call-out"></i>
                                            <h4>Book</h4>                                     
                                        </div>
                                    </div>
                                    <div class="item wow bounceInRight" data-wow-duration="2.6s" >
                                        <div class="slider-thumbnail-img">
                                            <i class="icon icon-people"></i>
                                            <h4>Nearest Saloons</h4>                                       
                                        </div>
                                    </div>
                                    <div class="item wow bounceInDown" data-wow-duration="2.0s" >
                                        <div class="slider-thumbnail-img">
                                            <i class="icon icon-credit-card"></i>
                                            <h4>Pay Online</h4>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="content-slider wow fadeIn" data-wow-delay="0.6s" >
                                    <div id="sync1_copy" class="owl-carousel">
                                        <div class="item">
                                            <div class="slider-con" style="">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                <p class="left-big">Browse our selection of vetted-professional beauty therapists, hairdressers and makeup artists</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-con" style="">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                <p class="left-big">You're booked! Simply wait for your therapist, hair stylist or makeup artist to arrive at the scheduled time and enjoy your treatment</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-con" style="">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                <p class="left-big">Find the best and fully equipped saloons near you.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="slider-con" style="">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                <p class="left-big">We'll confirm your appointment and take care of payment electronically and securely.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="download-link">
                                        <a href="#" class="link-download">
                                            <img src="img/app-store.png" alt="app-store" class="img-responsive">
                                        </a>
                                        <a href="#" class="link-download">
                                            <img src="img/google-play.png" alt="play-store" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            require('include/footer.php');
        ?>
    </body>
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.sliderPro.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.js"></script>
    <script>
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('header').addClass("sticky");
            }
            else{
                $('header').removeClass("sticky");
            }
        });
    </script> 
    <script>
     wow = new WOW(
        {
          animateClass: 'animated',
          offset:       100,
          callback:     function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
          }
        }
      );
      wow.init();
      // document.getElementById('moar').onclick = function() {
      //   var section = document.createElement('section');
      //   section.className = 'section--purple wow fadeInDown';
      //   this.parentNode.insertBefore(section, this);
      // };
    </script>
        <!-- app slider js -->
         <script>
            $(document).ready(function() {

              var sync1 = $("#sync1");
              var sync2 = $("#sync2");
              var sync1_copy = $("#sync1_copy");

              sync1.owlCarousel({
                singleItem : true,
                slideSpeed : 1000,
                navigation: false,
                pagination:false,
                afterAction : syncPosition,
                responsiveRefreshRate : 200,
                 autoPlay : true,
                 
              });

                sync1_copy.owlCarousel({
                singleItem : true,
                slideSpeed : 1000,
                navigation: false,
                pagination:false,
                afterAction : syncPosition,
                responsiveRefreshRate : 200,
                autoPlay : true,
              });

              sync2.owlCarousel({
                items :4,
                itemsDesktop      : [1199,4],
                itemsDesktopSmall     : [979,4],
                itemsTablet       : [768,4],
                itemsMobile       : [479,4],
                pagination:false,
                responsiveRefreshRate : 100,
                afterInit : function(el){
                  el.find(".owl-item").eq(0).addClass("synced");
                }
              });

              function syncPosition(el){
                var current = this.currentItem;
                $("#sync2")
                  .find(".owl-item")
                  .removeClass("synced")
                  .eq(current)
                  .addClass("synced")
                if($("#sync2").data("owlCarousel") !== undefined){
                  center(current)
                }

              }

              $("#sync2").on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).data("owlItem");
                sync1.trigger("owl.goTo",number);
              });


              $("#sync2").on("click", ".owl-item", function(e){
                e.preventDefault();
                var number = $(this).data("owlItem");
                sync1_copy.trigger("owl.goTo",number);
              });

              function center(number){
                var sync2visible = sync2.data("owlCarousel").owl.visibleItems;

                var num = number;
                var found = false;
                for(var i in sync2visible){
                  if(num === sync2visible[i]){
                    var found = true;
                  }
                }

                if(found===false){
                  if(num>sync2visible[sync2visible.length-1]){
                    sync2.trigger("owl.goTo", num - sync2visible.length+2)
                  }else{
                    if(num - 1 === -1){
                      num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                  }
                } else if(num === sync2visible[sync2visible.length-1]){
                  sync2.trigger("owl.goTo", sync2visible[1])
                } else if(num === sync2visible[0]){
                  sync2.trigger("owl.goTo", num-1)
                }
              }

            });
        </script>
        <script>
            $(document).ready(function() {
             
                var owl = $(".owl-demo1");
                 
                owl.owlCarousel({
                items : 4, //10 items above 1000px browser width
                itemsDesktop : [1000,3], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,3], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : [480,1] // itemsMobile disabled - inherit from itemsTablet option
                });

                 
                // Custom Navigation Events
             
            });

        </script>
        <script>
            jQuery(document).ready(function($) {
                $('.count').counterUp({
                    delay: 10,
                    time: 1000
                });
            });
        </script>
</html>