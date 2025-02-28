<div class="uk-width-1-3@m uk-sidebar">
  
@if($related_child != null)
  <div class="uk-card uk-card-default uk-card-body uk-margin-medium-bottom"> 
      <div class="uk-categories">
          <h3>Related Blogs</h3>
          <ul class="">
            @foreach ($related_child as $item)
              <li><a href="{{url(geturl($item->uri,$item->page_key))}}">{{$item->post_title}}</a></li>
            @endforeach
          </ul>
      </div>
  </div>
@endif

<div class="uk-card uk-card-default uk-card-body uk-margin-medium-bottom uk-text-center">
  <h5>Need Help?</h5>
  <address class="contact-details">
      <h3 class="contact-phone uk-text-theme"><i class="fa fa-phone"></i><br>{{$setting->phone}}</h3>

       <a href="#" class="contact-email">{{$setting->email_primary}}</a>
  </address>

  <a href="{{url('book-now')}}" title="" class="uk-button uk-button-primary">Book Online</a>
</div>
<div class="uk-card uk-card-default uk-card-body uk-margin-medium-bottom ">
      <div class=" uk-categories">
          <h3>Follow us</h3>
          <a href="{{$setting->facebook_link}}" target="_blank" class="uk-icon-button uk-facebook  uk-margin-small-right" uk-icon="facebook"></a>
          <a href="{{$setting->twitter_link}}" target="_blank" class="uk-icon-button uk-twitter uk-margin-small-right" uk-icon="twitter"></a>
          <a href="{{$setting->instagram_link}}" target="_blank" class="uk-icon-button uk-instagram uk-margin-small-right" uk-icon="instagram"></a>
          <a href="{{$setting->youtube_link}}" target="_blank" class="uk-icon-button uk-youtube" uk-icon="youtube"></a>
      </div>
  </div>

</div>