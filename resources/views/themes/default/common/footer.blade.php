<div class="uk-light-bg ">
    <div class="uk-top-footer uk-container" style="padding-top:10px; padding-bottom:20px;">
        <div class="uk-child-width-1-2@m uk-grid">
            <div class=" uk-flex" style="align-items: baseline; " uk-scrollspy="cls:uk-animation-fade; delay: 500;">
                <h3 class="uk-margin-remove">Associated With</h3>
                <div class="uk-margin-top uk-top-img uk-margin-small-left">
                    @foreach ($associated as $value)
                        <img src="{{ asset('uploads/medium/' . $value->file_name) }}" loading="lazy">
                    @endforeach
                </div>
            </div>
            <div  class=" uk-flex uk-flex-left uk-flex-right@m " style="align-items: baseline;" uk-scrollspy="cls:uk-animation-fade; delay: 500;">
                <h3 class="uk-margin-remove">We Accept</h3>
                <div class="uk-margin-top uk-payment uk-margin-small-left">
                    @foreach ($pay_partners as $value)
                        <img src="{{ asset('uploads/medium/' . $value->file_name) }}" loading="lazy">
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
    </div>
    <footer class="uk-padding bg-primary ">
        <div uk-grid  uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <div class="uk-width-1-3@m uk-text-left@m uk-text-center">
                <a class="uk-logo" href="{{ url('/') }}">
                    <img src="{{asset('theme-assets/img/logo.png')}}" class="footer-logo" width="180" alt="">
                </a>
                <hr style="border-top: 1px solid #e5e5e530;">
                <p class="text-white">Copyright © 2025, Lhakpa Treks.</p>
               
            </div>
            <div class="uk-width-expand@m">
                <div class="uk-child-width-1-4@m uk-child-width-1-2 uk-grid-small" uk-grid>
                    <div>
                        <p class="uk-margin-remove "><a href="{{ route('page.trekkinglist') }}" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Destination</a></p>
                        <ul class=" footer-list">
                            @foreach ($trekking as $trek)
                                <li> <a href="{{ route('trekking-list',$trek->uri) }}">{{$trek->title}}</a> </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <p class="uk-margin-remove "><a href="{{ route('page.activitylist') }}" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Activities</a></p>
                        <ul class=" footer-list">
                            @foreach ($activity as $row)
                                <li> <a href="{{ route('activity-list', $row->uri) }}">{{ $row->title }}</a> </li>
                            @endforeach
    
                        </ul>
                    </div>
                    <div>
                        <p class="uk-margin-remove "><a href="{{ route('page.expeditionlist') }}" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Expedition</a></p>
                        <ul class=" footer-list">
                            @foreach ($expedition as $row)
                                <li> <a href="{{ route('expedition-list', $row->uri) }}">{{ $row->title }}</a> </li>
                            @endforeach
                        </ul>
                    </div>
    
                    <div>
                        <p class="uk-margin-remove "><a href="#" class="uk-secondary f-20 fw-600 uk-text-uppercase ">Useful Links</a></p>
                        <ul class=" footer-list">
                            @foreach ($navigations as $nav)
                            <li><a href="{{route('page.posttype_detail',$nav->uri)}}">{{$nav->post_type}} </a></li>
                            {{-- <li><a href="team.php">Team Members</a></li>
                            <li><a href="list.php">Travelling Style</a></li>
                            <li><a href="news.php">News / Blogs</a></li>
                            <li><a href="women.php">Women Empowerment</a></li> --}}
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <div class="small-footer uk-child-width-1-2@m uk-padding uk-padding-remove-vertical uk-flex uk-flex-middle uk-pattern-bg " uk-grid >
        <div class="uk-text-center uk-text-left@m uk-margin-top" uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <a href="privacy.php" class="uk-white uk-margin-large-right">Terms & Conditions</a>
            <a href="privacy.php" class="uk-white">Privacy Policy</a>
        </div>
        <div class="uk-footer-icon uk-text-right@m uk-text-center uk-margin-top uk-margin-bottom" uk-scrollspy="cls: uk-animation-fade;  delay: 300; repeat: false">
            <a href="" class="uk-icon-button uk-margin-small-right"><i class="fa-brands fa-youtube"></i></a>
            <a href="" class="uk-icon-button  uk-margin-small-right"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="" class="uk-icon-button"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
    <script src=" {{ asset('theme-assets/js/uikit-icons.js') }}"></script>
    <script src="{{asset('theme-assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('theme-assets/js/youtube-video.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="{{asset('theme-assets/js/main.js')}}"></script>
    </body>
    </html> 