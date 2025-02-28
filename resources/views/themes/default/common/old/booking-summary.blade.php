<div class="uk-trip-sidebar uk-margin-bottom">
  <div class="uk-contact-details uk-padding-remove-top">
     <ul>
        <li class="bg-primary">
           <div class="f-14  text-white">Need help with this booking?</div>
           <div class="f-18">
              <a href="tel:{{$setting->phone}}" class="text-white">{{$setting->phone}}</a>
           </div>
        </li>
     </ul>
  </div>
</div>
<!--  -->
<!--  -->
<div class="uk-trip-summary uk-border-light-dark uk-box-shadow-medium">
  <div>
     <div class="uk-media-200">
      @if($booking->thumbnail != null)
        <img src="{{asset('/uploads/original/'.$booking->thumbnail)}}" alt="{{$booking->trip_title}}">
        @else
        <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" alt="{{$booking->trip_title}}">
      @endif
     </div>
     <div class="uk-trip-summary-body uk-padding-small">
        <h2 class="uk-h4 f-w-600 text-secondary-light uk-margin-small-bottom">{{$booking->trip_title}}</h2>
        <hr class="uk-margin-small">
        <ul class="uk-child-width-1-2 uk-grid-match uk-grid uk-flex-left" uk-grid>
           <li>
              <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid>
                 <div class="uk-width-auto">
                  @if($booking->destinations()->first()->title == 'Nepal')
                    <img src="{{asset('theme-assets/images/flags/nepal.png')}}" width="35" alt="Country">
                  @elseif($booking->destinations()->first()->title == 'India')
                  <img src="{{asset('theme-assets/images/flags/india.png')}}" width="35" alt="Country">
                  @elseif($booking->destinations()->first()->title == 'Bhutan')
                  <img src="{{asset('theme-assets/images/flags/bhutan.png')}}" width="35" alt="Country">
                  @elseif($booking->destinations()->first()->title == 'Tibet')
                  <img src="{{asset('theme-assets/images/flags/tibet.png')}}" width="35" alt="Country">
                  @else
                  <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" width="35" alt="Country">
                  @endif
                 </div>
                 <div>
                    <div>
                       <p class="uk-margin-remove text-secondary">Country</p>
                       <p class="uk-margin-remove f-14">{{$booking->destinations()->first()->title}}</p>
                    </div>
                 </div>
              </div>
           </li>
           <li>
              <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid>
                 <div class="uk-width-auto">
                    <img src="{{asset('theme-assets/images/icons/duration.svg')}}" width="40" alt="Duration">
                 </div>
                 <div>
                    <div>
                       <p class="uk-margin-remove text-secondary">Duration</p>
                       <p class="uk-margin-remove f-14">{{$booking->duration}} Days</p>
                    </div>
                 </div>
              </div>
           </li>
           <li>
              <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid>
                 <div class="uk-width-auto">
                    <img src="{{asset('theme-assets/images/icons/group.svg')}}" width="40" alt="Group Size">
                 </div>
                 <div>
                    <div>
                       <p class="uk-margin-remove text-secondary">Group Size</p>
                       <p class="uk-margin-remove f-14">{{$booking->group_size}} Person(s)</p>
                    </div>
                 </div>
              </div>
           </li>
           <li>
              <div class="uk-grid uk-grid-small uk-child-width-expand uk-flex-nowrap uk-flex-middle" uk-grid>
                 <div class="uk-width-auto">
                    <img src="{{asset('theme-assets/images/icons/meeting-point.sv')}}g" width="40" alt="Start / End">
                 </div>
                 <div>
                    <div>
                       <p class="uk-margin-remove text-secondary">Start date</p>
                       <p class="uk-margin-remove f-14">{{$booking->start_date}}</p>
                    </div>
                 </div>
              </div>
           </li>
        </ul>
     </div>
     <div class="uk-trip-summary-footer bg-secondary-light uk-padding-small">
        <ul class="text-white uk-flex-middle">
           <li class="uk-margin-remove">
              <div class="uk-flex uk-flex-between uk-flex-middle">
                 <div>Price: From:</div>
                 <div class="f-w-600"> GBP£ 699</div>
              </div>
           </li>
           <!-- <li>
              <div class="uk-flex uk-flex-between uk-flex-middle">
                 <div>Deposit Payable Now:</div>
                 <div class="f-w-600">GBP£ 140</div>
              </div>
           </li> -->
        </ul>
     </div>
  </div>
</div>
<!--  -->
<!--  -->
<!-- <div class="uk-margin">
  <ul class="uk-grid-small uk-flex-middle uk-flex-left uk-flex uk-grid " uk-grid>
     <li>
        <img src="assets/images/payment/ae.png" alt="" width="70">
     </li>
     <li>
        <img src="assets/images/payment/visa.png" alt="" width="70">
     </li>
     <li>
        <img src="assets/images/payment/master.png" alt="" width="70">
     </li>
     <li>
        <img src="assets/images/payment/union.png" alt="" width="70">
     </li>
  </ul>
  <p class="f-12 uk-margin-small">This is a secure and SSL encrypted payment via 2C2P. Your credit card details are safe!</p>
</div> -->
<!--  -->