@extends('themes.default.common.master')
@section('content')

   <!-- start banner section -->
   <div class="swiper mySwiper  banner-carousel">
      <div class="swiper-wrapper">
         <div class="swiper-slide">
               <div class="uk-inline hero-items">
                  <img src="{{asset('theme-assets/img/mountain/mountain5.jpeg')}}" width="1800" height="1200" alt="">
                  <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-middle uk-flex-center uk-flex-column
                     ">
                     <div class="uk-banner-font uk-width-1-1 uk-width-1-3@m uk-text-center uk-margin-large-top">
                           <h1>MT. AMA DABLAM EXPEDITION</h1>
                     </div>
                     <a href="trip-detail.php" class="uk-btn uk-btn-secondary">Discover Trip</a>
                  </div>
               </div>
         </div>
         <div class="swiper-slide">
               <div class="uk-inline hero-items">
                  <img src="assets/img/mountain/mountain4.jpeg" width="1800" height="1200" alt="">
                  <div class="uk-overlay uk-overlay-primary uk-position-cover uk-banner-overlay uk-flex uk-flex-middle uk-flex-center uk-flex-column
                     ">
                     <div class="uk-banner-font uk-width-1-1 uk-width-1-3@m uk-text-center uk-margin-large-top">
                           <h1>MT. EVEREST EXPEDITION</h1>
                     </div>
                     <a href="trip-detail.php" class="uk-btn uk-btn-secondary">Discover Trip</a>
                  </div>
               </div>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
   <!-- end banner section -->

   <!-- start activities section -->
   <section class="uk-section uk-light-bg">
      <div class="uk-container">
         <div class="uk-grid-match uk-flex uk-flex-middle" uk-grid>
               <div class="uk-width-1-3@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary  dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                     <h1 class="uk-primary">Discover our activities</h1>
                     <p>Trekking in Nepal is a truly amazing experience and the ultimate opportunity for intrepid explorers who are in quest of adventure in the Himalayas. This beautiful adventure is best enjoyed with the best .</p>
                     <a href="region-list.php" class="uk-btn uk-btn-secondary">Discover All Activities</a>
                  </div>
               </div>
               <div class="uk-width-2-3@m">
                  <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                     <div class="uk-slider-items uk-child-width-1-2 uk-child-width-1-2@m  uk-child-width-1-3@l uk-grid">
                           <div class="uk-media-400 uk-activities">
                              <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                                 <img src="assets/img/mountain/mountain4.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                 <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                 <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                       <span class="uk-white uk-text-uppercase">Biking</span>
                                       <div class="dot-line uk-text-center"></div>
                                 </div>
                              </a>
                           </div>
                           <div class="uk-media-400 uk-activities">
                              <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                                 <img src="assets/img/mountain/mountain2.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                 <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                 <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                       <span class="uk-white uk-text-uppercase">Cycling</span>
                                       <div class="dot-line uk-text-center"></div>
                                 </div>
                              </a>
                           </div>
                           <div class="uk-media-400 uk-activities">
                              <a href="list.php" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                                 <img src="assets/img/mountain/mountain5.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                 <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                 <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                       <span class="uk-white uk-text-uppercase">Safari and Hiking</span>
                                       <div class="dot-line uk-text-center"></div>
                                 </div>
                              </a>
                           </div>
                           <div class="uk-media-400 uk-activities">
                              <a href="" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-height-1-1">
                                 <img src="assets/img/mountain/mountain1.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                                 <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                                 <div class="uk-overlay uk-position-bottom uk-light uk-text-center">
                                       <span class="uk-white uk-text-uppercase">Tailormade Trips</span>
                                       <div class="dot-line uk-text-center"></div>
                                 </div>
                              </a>
                           </div>

                     </div>
                     <div class="uk-flex uk-flex-center">
                           <a class=" uk-position-small prev-btn" href uk-slidenav-previous uk-slider-item="previous"></a>
                           <a class=" uk-position-small next-btn" href uk-slidenav-next uk-slider-item="next"></a>
                     </div>
                  </div>

               </div>
         </div>
      </div>
   </section>
   <!-- end activities section -->

   <!-- start about section -->
   <section class=" uk-primary-bg">
      <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
         <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text">
               <div class="uk-container uk-flex uk-flex-middle">
                  <div class="uk-title-font">
                     <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                     <h1 class="uk-secondary">Discover our activities</h1>
                     <p class="uk-white">We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. <br> <br>We offer visitors with thousands of trekking and tour packages across Nepal, India, Tibet, and Bhutan. We also believe in full customer satisfaction and great trekking experience.</p>
                     <a href="about.php" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                  </div>
               </div>
         </div>
         <div class="uk-media-500">
               <img src="assets/img/mountain/mountain5.jpeg" alt="">
         </div>
      </div>
   </section>
   <!-- end about section -->

   <!--start trip section -->
   <section class="uk-section">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-1-4@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>PACKAGES</span>
                     <h1 class="uk-primary">Latest Viewed Trip</h1>
                  </div>
               </div>
               <div class="uk-width-expand@m uk-flex uk-flex-between uk-flex-middle">
                  <p>Discover your next great soft and adventurous holidays,<br>
                     Get start now! Discover your next great soft and adventurous holidays,
                  </p>
               </div>
               <div class="uk-width-1-4@m uk-flex uk-flex-baseline uk-flex-right uk-flex-top uk-visible@m"">
                  <a href=" trip-detail.php" class="uk-btn uk-btn-secondary">View All</a>
               </div>
         </div>
         <div class="uk-child-width-1-2@m" uk-grid uk-height-match>
               <div>
                  <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                     <div class="uk-width-2-5@m">
                           <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ">
                              <img src="assets/img/mountain/mountain3.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                           </a>
                     </div>
                     <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                           <div class="uk-text-title uk-text-title">
                              <a href="" class="uk-news-title">
                                 <h2>Bali and Gili in a Lodge</h2>
                              </a>
                           </div>
                           <div class="uk-star-rating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                              <div class="uk-flex uk-flex-middle uk-trip">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Duration</p>
                                       <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Location</p>
                                       <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                       <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                 </div>
                              </div>
                           </div>
                           <p class="uk-margin-remove line-three">Enjoy breathtaking mountain scenery and panoramic views of the Himalayan range on one of the world's classic high </p>
                     </div>
                  </div>
               </div>
               <div>
                  <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                     <div class="uk-width-2-5@m">
                           <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ">
                              <img src="assets/img/mountain/mountain4.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                           </a>
                     </div>
                     <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                           <div class="uk-text-title uk-text-title">
                              <a href="" class="uk-news-title">
                                 <h2>Bali and Gili in a Lodge</h2>
                              </a>
                           </div>
                           <div class="uk-star-rating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                              <div class="uk-flex uk-flex-middle uk-trip">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Duration</p>
                                       <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Location</p>
                                       <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                       <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                 </div>
                              </div>
                           </div>
                           <p class="uk-margin-remove line-three">Enjoy breathtaking mountain scenery and panoramic views of the Himalayan range on one of the world's classic high </p>
                     </div>
                  </div>
               </div>
               <div>
                  <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                     <div class="uk-width-2-5@m">
                           <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ">
                              <img src="assets/img/mountain/mountain5.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                           </a>
                     </div>
                     <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                           <div class="uk-text-title uk-text-title">
                              <a href="" class="uk-news-title">
                                 <h2>Bali and Gili in a Lodge</h2>
                              </a>
                           </div>
                           <div class="uk-star-rating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                              <div class="uk-flex uk-flex-middle uk-trip">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Duration</p>
                                       <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Location</p>
                                       <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                       <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                 </div>
                              </div>
                           </div>
                           <p class="uk-margin-remove line-three">Enjoy breathtaking mountain scenery and panoramic views of the Himalayan range on one of the world's classic high </p>
                     </div>
                  </div>
               </div>
               <div>
                  <div class=" uk-flex-middle uk-grid-match uk-grid-collapse" uk-height-match uk-grid>
                     <div class="uk-width-2-5@m">
                           <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle ">
                              <img src="assets/img/mountain/mountain1.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                           </a>
                     </div>
                     <div class="uk-width-3-5@m uk-light-bg uk-padding-small uk-trip-list" style="padding: 30px 25px;">
                           <div class="uk-text-title uk-text-title">
                              <a href="" class="uk-news-title">
                                 <h2>Bali and Gili in a Lodge</h2>
                              </a>
                           </div>
                           <div class="uk-star-rating">
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                              <i class="fa-solid fa-star"></i>
                           </div>
                           <div class="uk-flex uk-flex-between uk-margin-small-top uk-margin-small-bottom">
                              <div class="uk-flex uk-flex-middle uk-trip">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Duration</p>
                                       <p class="uk-trip-description uk-margin-remove">14 Days</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-location-dot"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Location</p>
                                       <p class="uk-trip-description uk-margin-remove">Nepal</p>
                                 </div>
                              </div>
                              <div class="uk-flex uk-flex-middle uk-trip ">
                                 <i class="fa-solid fa-calendar"></i>
                                 <div>
                                       <p class="uk-trip-title uk-margin-remove">Difficulty</p>
                                       <p class="uk-trip-description uk-margin-remove">Moderate</p>
                                 </div>
                              </div>
                           </div>
                           <p class="uk-margin-remove line-three">Enjoy breathtaking mountain scenery and panoramic views of the Himalayan range on one of the world's classic high </p>
                     </div>
                  </div>
               </div>
         </div>
         <div class="uk-text-center uk-margin-medium-top uk-hidden@m">
               <a href=" trip-detail.php" class="uk-btn uk-btn-secondary">View All</a>
         </div>
      </div>
   </section>
   <!-- end trip section -->

   <!--start adventure section -->
   <!-- end adventure section -->
   <section class="uk-position-relative uk-section  uk-background-norepeat 
      uk-background-cover" uk-parallax="bgx: -100; easing: 1;" data-src="assets/img/bg/01.jpg" uk-img>
      <div class="uk-overlay-pink uk-position-cover"></div>
      <div class="uk-container uk-position-relative">
         <div class="uk-text-center uk-title-font">
               <span class="uk-white">Travel With Us</span>
               <h1 class="uk-white">Last minute adventure</h2>
         </div>
         <div>
               <div class="uk-position-relative uk-visible-toggle uk-margin-medium-top" tabindex="-1" uk-slider=" sets: true;">
                  <ul class="uk-slider-items uk-child-width-1-1">
                     <!--  -->
                     <li>
                           <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid>
                              <div>
                                 <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-400">
                                       <img src="assets/img/mountain/mountain5.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                                 </a>
                              </div>
                              <div class="uk-primary-bg uk-padding uk-mountain-bg">
                                 <div>
                                       <span class="uk-badge"> Tours</span>
                                 </div>
                                 <div class="uk-flex uk-flex-between uk-title-font">
                                       <h2 class="uk-white">Bali and gili in a lodge</h2>
                                       <div class="uk-star-rating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                 </div>
                                 <hr>
                                 <div class="uk-grid-expand" uk-grid>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-regular fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Duration</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">14 Days</p>
                                          </div>
                                       </div>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-solid fa-location-dot uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Location</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">Nepal</p>
                                          </div>
                                       </div>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-solid fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Difficulty</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">Moderate</p>
                                          </div>
                                       </div>
                                 </div>
                                 <p class="uk-white line-three">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore harum enim iste. Nihil, repellendus. Unde, inventore temporibus ratione dolor fugiat voluptates dolore alias qui beatae quod quisquam! Itaque, quos architecto.</p>
                                 <div>
                                       <a href="" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                                 </div>
                              </div>
                           </div>
                     </li>
                     <!--  -->
                     <!--  -->
                     <li>
                           <div class="uk-child-width-1-2@m uk-grid-collapse uk-grid-match" uk-grid>
                              <div>
                                 <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-400">
                                       <img src="assets/img/mountain/mountain3.jpeg" class=" uk-transition-scale-up uk-transition-opaque" alt="">
                                 </a>
                              </div>
                              <div class="uk-primary-bg uk-padding uk-mountain-bg">
                                 <div>
                                       <span class="uk-badge"> Tours</span>
                                 </div>
                                 <div class="uk-flex uk-flex-between uk-title-font">
                                       <h2 class="uk-white">Kilimanjaro: Machame route</h2>
                                       <div class="uk-star-rating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                 </div>
                                 <hr>
                                 <div class="uk-grid-expand" uk-grid>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-regular fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Duration</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">14 Days</p>
                                          </div>
                                       </div>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-solid fa-location-dot uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Location</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">Nepal</p>
                                          </div>
                                       </div>
                                       <div class="uk-flex uk-flex-middle">
                                          <i class="fa-solid fa-calendar uk-margin-small-right uk-white" style="font-size:25px;"></i>
                                          <div>
                                             <p class="uk-small-title uk-margin-remove uk-white">Difficulty</p>
                                             <p class="uk-small-description uk-margin-remove uk-white">Moderate</p>
                                          </div>
                                       </div>
                                 </div>
                                 <p class="uk-white line-three">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore harum enim iste. Nihil, repellendus. Unde, inventore temporibus ratione dolor fugiat voluptates dolore alias qui beatae quod quisquam! Itaque, quos architecto.</p>
                                 <div>
                                       <a href="" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                                 </div>
                              </div>
                           </div>
                     </li>
                     <!--  -->
                  </ul>
                  <div class="uk-flex uk-flex-center uk-margin-small-top uk-margin-bottom">
                     <a class=" uk-position-small prev-btn uk-white" href uk-slidenav-previous uk-slider-item="previous"></a>
                     <a class=" uk-position-small next-btn uk-white" href uk-slidenav-next uk-slider-item="next"></a>
                  </div>
               </div>
         </div>
      </div>
      </div>
   </section>
   <!-- start destination section -->
   <section class="uk-section uk-section-overlap-top-light">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-1-2@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>Destination</span>
                     <h1 class="uk-primary">Explore by destination</h1>
                  </div>
               </div>
               <div class="uk-width-1-2@m uk-flex uk-flex-right uk-flex-middle">
                  <a href="region-list.php" class="uk-btn uk-btn-secondary">View All</a>
               </div>
         </div>
      </div>
      <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-top" tabindex="-1" uk-slider="sets: true">
         <div class="uk-slider-items uk-child-width-1-1  uk-child-width-1-2@m uk-child-width-1-3@l">
               <div class="uk-media-500 uk-activities" style="overflow:hidden;">
                  <a href="list.php" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1">
                     <img src="assets/img/mountain/mountain3.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                     <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                     <div class="uk-overlay uk-position-center uk-light uk-text-center uk-title-font">
                           <h1 class="uk-white uk-text-uppercase">Annapurna Region</h1>
                           <p class="uk-white">Annapurna Region is one of the demanding and popular touristic destinations of the world</p>
                           <a href="" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                     </div>
                  </a>
               </div>
               <div class="uk-media-500 uk-activities" style="overflow:hidden;">
                  <a href="list.php" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1">
                     <img src="assets/img/mountain/mountain2.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                     <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                     <div class="uk-overlay uk-position-center uk-light uk-text-center uk-title-font">
                           <h1 class="uk-white uk-text-uppercase">Dhaulagiri Region</h1>
                           <p class="uk-white">Dhaulagiri Region, one of the forbidden lands in Asia is one of the most demanding travel destination.</p>
                           <a href="" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                     </div>
                  </a>
               </div>
               <div class="uk-media-500 uk-activities" style="overflow:hidden;">
                  <a href="list.php" class="uk-inline uk-transition-toggle uk-link-toggle uk-height-1-1">
                     <img src="assets/img/mountain/mountain5.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" width="1800" height="1200" alt="">
                     <div class="uk-overlay-primary  uk-banner-overlay uk-position-cover"></div>
                     <div class="uk-overlay uk-position-center uk-light uk-text-center uk-title-font">
                           <h1 class="uk-white uk-text-uppercase">Everest Region</h1>
                           <p class="uk-white">Everest Region, also known as “The Land of Tunder Dragon” is one of the popular and demanding travelling destinations .</p>
                           <a href="" class="uk-about-btn">Learn More <i class="fa-solid fa-circle-arrow-right uk-margin-small-left"></i></a>
                     </div>
                  </a>
               </div>

         </div>

         <a class="uk-position-center-left uk-position-small prev-btn uk-white" href uk-slidenav-previous uk-slider-item="previous"></a>
         <a class="uk-position-center-right uk-position-small next-btn uk-white" href uk-slidenav-next uk-slider-item="next"></a>

      </div>
   </section>
   <!-- end destination section -->

   <!-- start blog section  -->
   <section class="uk-section uk-padding-remove-top">
      <div class="uk-container">
         <div class="uk-grid">
               <div class="uk-width-1-4@m">
                  <div class="uk-title-font">
                     <span class="uk-secondary dotted-line-black"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>BLOGS</span>
                     <h1 class="uk-primary">LATEST BLOG & NEWS</h1>
                  </div>
               </div>
               <div class="uk-width-3-4@m uk-flex uk-flex-right uk-flex-middle">
                  <a href=" trip-detail.php" class="uk-btn uk-btn-secondary">View All</a>
               </div>
         </div>
         <div class="uk-child-width-1-2@m" uk-grid>
               <div>
                  <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-280">
                     <img src="assets/img/mountain/mountain5.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                  </a>
                  <div class="uk-flex uk-flex-between uk-flex-middle">
                     <div class="uk-text-title uk-margin-top">
                           <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> Wednesday July 3, 2025</span>
                           <a href="" class="uk-news-title">
                              <h2>Top 10 Great Reasons to Visit Nepal</h2>
                           </a>
                     </div>
                     <div>
                           <a href="">
                              <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>
                           </a>
                     </div>
                  </div>
               </div>
               <div>
                  <a href="#" class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-280">
                     <img src="assets/img/mountain/mountain3.jpeg" class="uk-height-1-1 uk-transition-scale-up uk-transition-opaque" alt="">
                  </a>
                  <div class="uk-flex uk-flex-between uk-flex-middle">
                     <div class="uk-text-title uk-margin-top">
                           <span class="uk-primary"><i class="fa-solid fa-calendar uk-margin-small-right"></i> Wednesday July 3, 2025</span>
                           <a href="" class="uk-news-title">
                              <h2>Top 10 Great Reasons to Visit Nepal</h2>
                           </a>
                     </div>
                     <div>
                           <a href="">
                              <i class="fa-solid fa-circle-arrow-right uk-secondary f-30"></i>
                           </a>
                     </div>
                  </div>
               </div>
         </div>
      </div>
   </section>
   <!-- end blog section -->

   <!-- start testimonial section-->
   <section class="uk-primary-bg">
      <div class="uk-child-width-1-2@m uk-grid-match uk-grid-collapse" uk-grid>
         <div class="uk-media-500">
               <img src="assets/img/mountain/mountain4.jpeg" alt="">
         </div>
         <div class="uk-primary-bg uk-padding uk-padding-left uk-about-text">
               <div class="uk-container uk-flex uk-flex-middle">
                  <div class="uk-title-font">
                     <span class="uk-white dotted-line-white"><i class="fa-solid fa-person-hiking uk-margin-small-right"></i>TRAVEL WITH US</span>
                     <h1 class="uk-secondary">Latest from our travellers</h1>

                     <div uk-slider>
                           <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
                              <div class="uk-slider-items">
                                 <div>
                                       <div class="uk-star-rating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <p class="uk-white uk-margin-top">We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. <br> <br><b>Greeting from Sherpa Family,</b>
                                       <div class="uk-flex">
                                          <img src="assets/img/user.png" class="uk-client-img" alt="">
                                          <div class="uk-title-font">
                                             <h2 class="uk-secondary">John Smith</h2>
                                             <span class="uk-white">From USA</span>
                                          </div>
                                       </div>
                                       </p>
                                 </div>
                                 <div>
                                       <div class="uk-star-rating">
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                          <i class="fa-solid fa-star"></i>
                                       </div>
                                       <p class="uk-white uk-margin-top">We, the Lhakpa Trekking are a team of professionals and are a top-quality trekking and travel company in Kathmandu valley. We are one of the leading and popular trekking company and we are also registered with the Nepalese government. <br> <br><b>Greeting from Sherpa Family,</b>
                                       <div class="uk-flex">
                                          <img src="assets/img/user.png" class="uk-client-img" alt="">
                                          <div class="uk-title-font">
                                             <h2 class="uk-secondary">John Smith</h2>
                                             <span class="uk-white">From USA</span>
                                          </div>
                                       </div>
                                       </p>
                                 </div>
                              </div>

                              <ul class="uk-slider-nav uk-dotnav uk-flex uk-flex-center"></ul>
                           </div>
                     </div>
                  </div>
               </div>
         </div>

      </div>
   </section>
   <!-- end testimonial section -->
@stop