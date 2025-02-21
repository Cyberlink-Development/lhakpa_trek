<div class="uk-width-1-4@m uk-visible@m ">
    @if($related != null)
    <div class="uk-card uk-card-default   uk-sidebar uk-margin-medium-bottom  clearfix" style="z-index: 99;" >
        <div class="uk-card-body ">
            <ul class="uk-list uk-list-divider">
                @foreach ($related as $item)
                    <li class="{{$data->id == $item->id?'uk-active':''}}"><a href="{{url(geturl($item->uri,$item->page_key))}}">{{$item->post_title}}</a></li>
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
</div>