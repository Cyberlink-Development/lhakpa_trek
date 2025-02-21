    <div class="uk-width-expand@m ">
        <div class="uk-padding-small uk-padding-remove-top uk-margin-top" style="z-index: 1;" uk-sticky=" offset: 200; end:true;">
            <div class="uk-sidebar uk-padding-small" uk-scrollspy="cls: uk-animation-slide-left-small; target:  li, img, p, h1,a;  delay: 50; repeat: false;">
                <div class="uk-text-center">
                    <p class="sidebar-text">Starting from <br> <span class="text-primary"> ${{ $data->price }} USD</span> <br>per person </p>
                </div>
                <a href="{{route('page.booking', $data->uri)}}" class="uk-button uk-button-default  uk-width-1-1 ">BOOK NOW</a>
                <p class="uk-text-justify uk-text-small">Tell us your adventure dream and let us do the work. Let us assist you in planning your itinerary based on your interests and requirements. Plan your trip with us today for a personalized quote.</p>
                <a href="{{route('customize-trip',$data->uri)}}" class="uk-button uk-button-secondary  uk-width-1-1">CUSTOMIZE THE TRIP</a>
                <div class="uk-text-center uk-margin-top">
                    <p>Have a question? <a href="{{ route('get-inquiry',$data->uri) }}" class="text-primary">ENQUIRE NOW</a></p>
                </div>
            </div>
            <div class="uk-flex uk-flex-middle uk-margin-small-top">
                <div>Share this Trip: </div>
                <div class="sharethis-inline-share-buttons  uk-margin-small-left" style="z-index:1 !important;"></div>
            </div>
        </div>
    </div>