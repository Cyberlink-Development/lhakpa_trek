<div class="uk-box-shadow-medium uk-border-rounded uk-white-bg ">
    <div class="uk-flex uk-flex-middle uk-padding-small">
        <img src="{{ asset('theme-assets/img/user.png') }}" class="uk-profile-img" alt="">
        @if(Auth::check())
        <div class="uk-title-font">
            <h3 class="uk-secondary uk-margin-remove">{{ Auth::user()->name }}
            </h3>
            <p class="uk-margin-remove">{{ Auth::user()->email }}</p>
        </div>
        @endif
    </div>
    <div>
        <ul style="list-style:none; padding: 0; overflow:hidden; margin:0;">
            <li class="uk-div uk-padding-small">
                <a href="{{ route('user-profile') }}" class="uk-flex"><i class="fa-solid fa-user login-logo uk-margin-small-right"></i>User Profile</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="{{ route('user-wishlist') }}" class="uk-flex"><i class="fa-solid fa-heart login-logo uk-margin-small-right"></i>Travel Wishlist</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="{{ route('user-recommendation') }}" class="uk-flex"><i class="fa-solid fa-person-hiking login-logo uk-margin-small-right"></i>Recommended Trips</a>
            </li>
            <li class="uk-div uk-padding-small">  
                <a href="{{ route('user-history') }}" class="uk-flex"><i class="fa-solid fa-clock-rotate-left login-logo uk-margin-small-right"></i>Travel History</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="{{ route('user-review') }}" class="uk-flex"><i class="fa-solid fa-comment login-logo uk-margin-small-right"></i>Your Opinion</a>
            </li>
            <li class="uk-div uk-padding-small">
                <a href="{{ route('logout') }}" class="uk-flex"><i class="fa-solid fa-comment login-logo uk-margin-small-right"></i>Log Out</a>
            </li>
        </ul>
    </div>
</div>