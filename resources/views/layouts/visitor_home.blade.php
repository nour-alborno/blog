
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:03:22 GMT -->
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>@yield('title')</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link href="<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">"

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="{{asset('visitor_assets/img/logo/favicon.png')}}">

   <!-- css')}} here -->
   <link rel="stylesheet" href="{{asset('visitor_assets/css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/meanmenu.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/animate.min.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/swiper-bundle.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/slick.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/nouislider.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/backtotop.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/magnific-popup.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/nice-select.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/flaticon_kindedo.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/font-awesome-pro.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/spacing.css')}}">
   <link rel="stylesheet" href="{{asset('visitor_assets/css/main.css')}}">

   
</head>

<body>
   <!-- pre loader area start -->
   <div id="loading">
      <div id="preloader">
         <div class="preloader-thumb-wrap">
            <div class="preloader-thumb">
               <div class="preloader-border"></div>
               <img src="{{asset('visitor_assets/img/bg/preloader.png')}}" alt="img not found!">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->

   <!-- header area start -->
   <header>
      <div class="bd-header">
         <!-- header top area start  -->
         <div class="bd-header-top d-none d-lg-block bg-white">
            <div class="bd-header-top-shape">
               <img src="{{asset('visitor_assets/img/shape/wave-section-break.png')}}" alt="Shape not found">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="bd-header-top-wrapper d-flex justify-content-between">
                        <div class="bd-header-top-left">
                           <div class="bd-header-meta-items d-flex align-items-center">
                              <div class="bd-header-meta-item d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fas fa-envelope"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p><a href="mailto:support@kindedo.com">support@kindedo.com</a></p>
                                 </div>
                              </div>
                              <div class="bd-header-meta-item d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fas fa-clock"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p>8.00am-4.00pm</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bd-header-top-right d-flex align-items-center">
                           <div class="bd-header-meta-items">
                              <div class="bd-header-meta-item d-flex align-items-center">
                                 <div class="bd-header-meta-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                 </div>
                                 <div class="bd-header-meta-text">
                                    <p><a href="#">14/A, Kilix Home Tower, NYC</a></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top area end -->

         <!-- header bottom area start -->
         <div id="header-sticky" class="bd-header-bottom bd-header-transparent">
            <div class="container">
               <div class="mega-menu-wrapper p-relative">
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="bd-header-logo">
                        <a href="index.html">
                           <img src="{{asset('visitor_assets/img/logo/logo.svg')}}" alt="logo">
                        </a>
                     </div>
                     <div class="bd-main-menu d-none d-lg-flex align-items-center">
                        <nav id="mobile-menu">
                           <ul>
                          
                           <li>
                                 <a href="{{route('home')}}">Home</a>
                                 </li>

                                 <li >
                                 <a href="{{route('books')}}">Shop Books</a>
                               
                              </li>   
                     
                              <li>
                                 <a href="{{route('contact')}}">Contact us</a>
                              </li>

                              <li>
                                 <a href="{{route('about')}}">About us</a>
                              </li>
                            
                              @if(Auth::User() && Auth::User()->id == 1)
                              <li >
                                 <a href="{{route('admin.books.index')}}">Admin Panel</a>
                              </li>
                              @endif



                              @if(!Auth::User())
                              <li >
                                 <a href="{{route('register')}}">Register</a>
                              </li>
                              @endif
                           </ul>
                        </nav>
                        <div class="bd-search-btn-wrapper">
                           <button class="bd-search-open-btn">
                              <i class="flaticon-search"></i>
                           </button>
                        </div>
                     </div>
                     <div class="bd-header-bottom-right d-flex justify-content-end align-items-center">
                      
                        <div class="bd-header-btn d-none d-xl-block">
                           @if(Auth::User())
                              <form method="POST" action="{{ route('logout') }}">
														@csrf

                              <a href="route('logout')"
                               onclick="event.preventDefault();
                              this.closest('form').submit();" class="bd-btn">

                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Logout</span>
                                 <span class="bd-btn-hover">Logout</span>
                              </span>
                           </a>
                           </form>
                            @else
                              <a href="{{route('login')}}" class="bd-btn">
                              <span class="bd-btn-inner">
                                 <span class="bd-btn-normal">Login</span>
                                 <span class="bd-btn-hover">Login</span>
                              </span>
                           </a>
                           
                        @endif
                        </div>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header bottom area end -->
      </div>
   </header>
   <!-- header area end here -->

   <br>
   <br>
   <br>
   <br>
   
   <div style="padding: 20; margin: 50px;">
   @yield('content')
   </div>



   <!-- footer area start -->
   <footer>
      <div class="bd-footer-area pt-200">
         <!-- footer area bg here  -->
         <div class="bd-gradient-bg"></div>
         <div class="bd-footer pt-90 pb-25">
            <div class="container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="bd-footer-widget bd-footer-widget-1 mb-50">
                        <div class="bd-footer-logo mb-35">
                           <a href="index.html"> <img src="{{asset('visitor_assets/img/logo/logo.svg')}}" alt="img not found!"></a>
                        </div>
                        <div class="bd-footer-widget-content mb-40">
                           <p>In our Adult Participation programs, for most students, it is their first program in
                              Kindedo. </p>
                        </div>
                        <div class="bd-footer-bottom-social pb-20">
                           <ul>
                              <li><a target="_blank" href="https://www.facebook.com/"><i
                                       class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a target="_blank" href="https://twitter.com/"><i
                                       class="fa-brands fa-twitter"></i></a></li>
                              <li><a target="_blank" href="https://www.youtube.com/"><i
                                       class="fa-brands fa-youtube"></i></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="bd-footer-widget bd-footer-widget-2 mb-50">
                        <div class="bd-footer-widget-content">
                           <h4 class="bd-footer-widget-title mb-30">Quick links</h4>
                           <div class="bd-footer-list">
                              <ul>
                                 <li><a href="#">About</a></li>
                                 <li><a href="#">Courses</a></li>
                                 <li><a href="#">Shop</a></li>
                                 <li><a href="#">Pages</a></li>
                                 <li><a href="#">Blog</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="bd-footer-widget bd-footer-widget-3 mb-50">
                        <div class="bd-footer-widget-content">
                           <h4 class="bd-footer-widget-title mb-30">Customer Service</h4>
                           <div class="bd-footer-list">
                              <ul>
                                 <li><a href="#">Recently Viewed</a></li>
                                 <li><a href="#">New Products</a></li>
                                 <li><a href="#">Shipping & Returns</a></li>
                                 <li><a href="#">Senior Kg</a></li>
                                 <li><a href="#">Become a Seller</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                     <div class="bd-footer-widget bd-footer-widget-4">
                        <div class="bd-footer-widget-content">
                           <h4 class="bd-footer-widget-title mb-30">Contact Us</h4>
                           <div class="bd-footer-contact">
                              <ul>
                                 <li><i class="fa-light fa-location-dot"></i><a href="#">14/A, Kilix Home Tower,
                                       NYC</a></li>
                                 <li><i class="fa-light fa-phone"></i><a href="tel:9072003462">907-200-3462</a></li>
                                 <li><i class="fa-light fa-envelope"></i><a
                                       href="mailto:support@kindedo.com">Support@kindedo.com</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bd-footer-copyright pb-10">
            <div class="bd-footer-copyright-line pb-20">
               <img src="{{asset('visitor_assets/img/shape/line-bottom-shape.png')}}" alt="bottom line not found">
            </div>
            <div class="container">
               <div class="bd-footer-copyright-wrap d-flex align-items-md-center justify-content-center">
                  <div class="bd-footer-copyright-text pb-20">
                     <p>Copyrighted by &copy;2023 <a href="https://themeforest.net/user/bdevs/portfolio"
                           rel="nofollow">BDevs</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end -->

   <!-- offcanvas area start -->
   <div class="offcanvas__area">
      <div class="offcanvas__bg"></div>
      <div class="offcanvas__wrapper">
         <div class="offcanvas__content">
            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
               <div class="offcanvas__logo logo">
                  <a href="index.html">
                     <img src="{{asset('visitor_assets/img/logo/logo.svg')}}" alt="logo">
                  </a>
               </div>
               <div class="offcanvas__close">
                  <button class="offcanvas__close-btn">
                     <i class="fa-thin fa-times"></i>
                  </button>
               </div>
            </div>
            <div class="offcanvas__search mb-0">
               <form action="#">
                  <button type="submit"><i class="flaticon-search"></i></button>
                  <input type="text" placeholder="Search here">
               </form>
            </div>
            <div class="mobile-menu fix mt-40"></div>
            <div class="offcanvas__about d-none d-lg-block mt-30 mb-30">
               <h4>About Kindedo</h4>
               <p>With the help of teachers and environment as the third teacher, students
                  have opportunities to confidently take risks.</p>
            </div>
            <div class="offcanvas__contact mt-30 mb-30">
               <h4>Contact Info</h4>
               <ul>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                           <i class="fal fa-map-marker-alt"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a target="_blank"
                           href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                           Mirnada City Tower, NYC</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="tel:+088889797697"><i class="far fa-phone"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="tel:+088889797697">088889797697</a>
                     </div>
                  </li>
                  <li class="d-flex align-items-center gap-2">
                     <div class="offcanvas__contact-icon">
                        <a href="mailto:support@gmail.com"><i class="fal fa-envelope"></i></a>
                     </div>
                     <div class="offcanvas__contact-text">
                        <a href="mailto:support@gmail.com">support@mail.com</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="offcanvas__social">
               <ul>
                  <li><a target="_blank" href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  </li>
                  <li><a target="_blank" href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a></li>
                  <li><a target="_blank" href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="body-overlay"></div>
   <!-- offcanvas area end -->


   <!-- product view modal start -->
   <div class="modal bd-shop-modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title d-none" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="product-d-img-tab-wrapper mb-60">
                           <div class="product-d-img-nav">
                              <ul class="nav nav-tabs" id="myTab" role="tablist">
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab"
                                       data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1"
                                       aria-selected="false">
                                       <img src="{{asset('visitor_assets/img/shop/tab-1.jpg')}}" alt="img not found">
                                    </button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2"
                                       type="button" role="tab" aria-controls="pro-2" aria-selected="true">
                                       <img src="{{asset('visitor_assets/img/shop/tab-2.jpg')}}" alt="img not found">
                                    </button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3"
                                       type="button" role="tab" aria-controls="pro-3" aria-selected="false">
                                       <img src="{{asset('visitor_assets/img/shop/tab-3.jpg')}}" alt="img not found">
                                    </button>
                                 </li>
                                 <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pro-4-tab" data-bs-toggle="tab" data-bs-target="#pro-4"
                                       type="button" role="tab" aria-controls="pro-4" aria-selected="false">
                                       <img src="{{asset('visitor_assets/img/shop/tab-4.jpg')}}" alt="img not found">
                                    </button>
                                 </li>
                              </ul>
                           </div>
                           <div class="product-d-img-tab">
                              <div class="tab-content" id="productDetailsTab">
                                 <div class="tab-pane fade active show" id="pro-1" role="tabpanel"
                                    aria-labelledby="pro-1-tab">
                                    <img class="active" src="{{asset('visitor_assets/img/shop/9.2.jpg')}}" alt="img not found">
                                 </div>
                                 <div class="tab-pane fade" id="pro-2" role="tabpanel" aria-labelledby="pro-2-tab">
                                    <img class="active" src="{{asset('visitor_assets/img/shop/9.1.jpg')}}" alt="img not found">
                                 </div>
                                 <div class="tab-pane fade" id="pro-3" role="tabpanel" aria-labelledby="pro-3-tab">
                                    <img class="active" src="{{asset('visitor_assets/img/shop/8.1.jpg')}}" alt="img not found">
                                 </div>
                                 <div class="tab-pane fade" id="pro-4" role="tabpanel" aria-labelledby="pro-4-tab">
                                    <img class="active" src="{{asset('visitor_assets/img/shop/8.3.png')}}" alt="img not found">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="product-side-info mb-60">
                           <div class="product-category-review">
                              <div class="product-d-category">Organic, Food</div>
                              <div class="product-d-review">
                                 <div class="rating">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="far fa-star"></i></a>
                                 </div>
                                 <span>10 Reviews</span>
                              </div>
                           </div>
                           <h4 class="product-name">baby shoes</h4>
                           <div class="product-price">
                              <span class="price-old">$63.00</span>
                              <span class="price-now">$59.00</span>
                           </div>

                           <p class="mb-30">
                              Kindedo seemed great for my kindergartener-to-be, a full santa believer. Not so the winter
                              holiday
                              episode, and I'm not sure how I'm going to police. I really happy to see my child there
                           </p>
                           <div class="product-quantity-cart mb-30">
                              <div class="product-quantity-form">
                                 <form action="#">
                                    <button class="cart-minus">
                                       <i class="far fa-minus"></i>
                                    </button>
                                    <input class="cart-input" type="text" value="1">
                                    <button class="cart-plus">
                                       <i class="far fa-plus"></i>
                                    </button>
                                 </form>
                              </div>
                              <a href="cart.html" class="bd-cart-btn"><i class="fas fa-shopping-basket"></i>Add to
                                 Cart</a>
                           </div>
                           <div class="product-d-meta sku mb-10">
                              <span>SKU:</span>
                              <span>BO1D0MX8SJ</span>
                           </div>
                           <div class="product-d-meta ockcategories mb-10">
                              <span>Categories:</span>
                              <span>Garden, Flower, Leaf</span>
                           </div>
                           <div class="product-d-meta tags mb-10">
                              <span>Tags:</span>
                              <span>Vegetable, Flower, Leaf</span>
                           </div>
                           <div class="product-d-meta share mb-10">
                              <span>Share:</span>
                              <div class="social-links">
                                 <ul>
                                    <li>
                                       <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="fab fa-behance"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li>
                                       <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- product view modal end -->

   <!-- serach popup area start here  -->
   <div class="bd-search-popup-area">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="bd-search-popup">
                  <div class="bd-search-form">
                     <form action="{{ route('book.search') }}" method="GET">
                        <div class="bd-search-input">
                           <input type="search" name="search" value="" placeholder="Type here to serach ...">
                           <div class="bd-search-submit">
                              <button type="submit"><i class="flaticon-search"></i></button>
                           </div>
                        </div>
                     </form>
                     <div class="bd-search-close">
                        <div class="bd-search-close-btn">
                           <button><i class="fa-thin fa-close"></i></button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- search popup overlay  -->
   <div class="bd-search-overlay"></div>
   <!-- serach popup area end here  -->

   <!-- JS here -->
   <script src="{{asset('visitor_assets/js/vendor/jquery.js')}}"></script>
   <script src="{{asset('visitor_assets/js/vendor/waypoints.js')}}"></script>
   <script src="{{asset('visitor_assets/js/bootstrap-bundle.js')}}"></script>
   <script src="{{asset('visitor_assets/js/meanmenu.js')}}"></script>
   <script src="{{asset('visitor_assets/js/swiper-bundle.js')}}"></script>
   <script src="{{asset('visitor_assets/js/slick.js')}}"></script>
   <script src="{{asset('visitor_assets/js/nouislider.js')}}"></script>
   <script src="{{asset('visitor_assets/js/magnific-popup.js')}}"></script>
   <script src="{{asset('visitor_assets/js/parallax.js')}}"></script>
   <script src="{{asset('visitor_assets/js/backtotop.js')}}"></script>
   <script src="{{asset('visitor_assets/js/nice-select.js')}}"></script>
   <script src="{{asset('visitor_assets/js/wow.min.js')}}"></script>
   <script src="{{asset('visitor_assets/js/isotope-pkgd.js')}}"></script>
   <script src="{{asset('visitor_assets/js/imagesloaded-pkgd.js')}}"></script>
   <script src="{{asset('visitor_assets/js/ajax-form.js')}}"></script>
   <script src="{{asset('visitor_assets/js/jquery.appear.js')}}"></script>
   <script src="{{asset('visitor_assets/js/jquery.odometer.min.js')}}"></script>
   <script src="{{asset('visitor_assets/js/main.js')}}"></script>
</body>


<!-- Mirrored from codeskdhaka.com/html/kindedo-prev/kindedo/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 08:03:52 GMT -->
</html>