@extends('themes.default.common.master')
@section('title', $data->post_type)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->banner)
@section('content')

    <section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed" uk-height-viewport data-src="{{ $data->banner ? asset('uploads/original/'.$data->banner) : asset('theme-assets/img/mountain/mountain6.jpeg') }}" alt="{{ $data->post_type }}" uk-img>
        <div class="uk-overlay-banner uk-position-cover"></div>
        <div class="uk-container uk-width-1-1 pt-150 uk-position-relative">
            <div class="uk-flex uk-flex-middle uk-grid-collapse " uk-grid>
                <div class="uk-width-1-1@m">
                    <ul class="uk-breadcrumb">
                        <li><a href="{{ url('/') }}" class="uk-white">Home</a></li>
                        {{-- <li><span class="uk-secondary">Your Group</span></li> --}}
                    </ul>
                    <div class="uk-sub-banner-font">
                        <h1>{{$data->post_type}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="uk-section">
        <div class="uk-container">
            <ul class="uk-subnav uk-subnav-pill uk-why-us-tab uk-flex-center " uk-switcher="animation: uk-animation-fade">
                @foreach ($team_category as $item)
                    <li><a class="green-border">{{$item->category}}</a></li>
                @endforeach
                <li class="uk-non-switcher">
                    <a href="{{ route('page.posttype_detail',$international->uri)}}" class="green-border">International Team</a>
                </li>
            </ul>

            <div class="uk-switcher uk-margin">
                @foreach($team_category as $category)
                    <div>
                        <div class="uk-child-width-1-3@m uk-grid">
                            @foreach($related_teams[$category->id] ?? [] as $team)
                                <div class="uk-margin-top">
                                    <div class="uk-inline ">
                                        <a onclick="openTeamModal('{{$team->name}}', '{{$team->position}}', '{{$team->thumbnail ? asset('uploads/team/' .$team->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')}}', '{{$team->phone ?? ''}}', '{{$team->email ?? ''}}', '{{json_encode($team->content ?? '')}}')"  class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-360">
                                        {{-- <a href="#modal-container" uk-toggle class="uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle uk-media-360"> --}}
                                            <img src="{{$team->thumbnail ? asset('uploads/team/' .$team->thumbnail) : asset('theme-assets/img/mountain/mountain1.jpeg')}}" class="uk-transition-scale-up uk-transition-opaque" alt="{{$team->name}}">
                                            <div class="uk-overlay uk-overlay-default uk-position-bottom uk-overlay-bottom uk-title-font">
                                                <h3 class="uk-secondary uk-margin-remove">{{$team->name}}</h3>
                                                <span class="uk-text-uppercase uk-white uk-margin-remove">{{$team->position}}</span>
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light-bg">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="border uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-auto@m">
                    <div class="uk-text-center">
                        <img id="modal-team-image" src="" class="uk-client-img" alt="" style="height:140px;">
                        <h3 id="modal-team-name" class="uk-margin-remove uk-secondary"></h3>
                        <p id="modal-team-position" class="uk-margin-remove"></p>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <p id="modal-team-description"></p>
                    <span><i class="fa-solid fa-phone uk-margin-small-right uk-secondary"></i><span id="modal-team-phone"></span></span>
                    <span class="uk-margin-small-left"><i class="fa-solid fa-envelope uk-margin-small-right uk-secondary"></i><span id="modal-team-email"></span></span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openTeamModal(name, position, image, phone, email, description) {
            // Set the content
            document.getElementById('modal-team-name').textContent = name;
            document.getElementById('modal-team-position').textContent = position;
            document.getElementById('modal-team-image').src = image;
            document.getElementById('modal-team-phone').textContent = phone || "";
            document.getElementById('modal-team-email').textContent = email || "";
            document.getElementById('modal-team-description').innerHTML = description || "";
            
            UIkit.modal('#modal-container').show();
            
            return false;
        }
        document.addEventListener('DOMContentLoaded', function() {
            const nonSwitcherItems = document.querySelectorAll('.uk-non-switcher');
            nonSwitcherItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    // Don't prevent default on this item so the link works normally
                    e.stopPropagation();
                });
            });
        });
    </script>

    <!-- team member detail modal -->
    {{-- <div id="modal-container" class="uk-modal-container" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical uk-light-bg">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class=" border  uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-auto@m">
                    <div class="uk-text-center">
                        <img src="assets/img/user.png" class="uk-client-img " alt="" style="height:140px; ">
                        <h3 class="uk-margin-remove uk-secondary">{{ $team->name }}</h3>
                        <p class="uk-margin-remove">{{ $team->position }}</p>
                        <p class="uk-margin-remove-top">Country Name</p>
                    </div>
                </div>
                <div class="uk-width-expand@m">
                    <p>
                    </p>
                    <span><i class="fa-solid fa-phone uk-margin-small-right uk-secondary"></i>+123 456 7890 , +789 456 6786</span>
                    <span class="uk-margin-small-left"><i class="fa-solid fa-envelope uk-margin-small-right uk-secondary"></i>sherpaname@gmail.com</span>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
