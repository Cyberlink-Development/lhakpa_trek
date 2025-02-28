<footer>
    <div class="bg-light " style="padding:36px 0;     border-top: 3px solid var(--primary);">
        <div class=" uk-container ">
            <ul class="uk-child-width-1-2@m uk-grid">
                <li class="uk-flex uk-flex-between uk-first-column uk-affiliated " style="align-items: center;">
                    <h3 class="uk-margin-remove">Partners With: </h3>
                    @foreach ($partners as $value)
                          <img src="{{ asset('uploads/medium/' . $value->file_name) }}">
                    @endforeach
                  
                   
                </li>
                <li class="uk-flex  uk-flex-between uk-affiliated " style="align-items: center;">
                    <h3 class="uk-margin-remove">Asscociated With: </h3>
                    @foreach ($associated as $value)
                          <img src="{{ asset('uploads/medium/' . $value->file_name) }}">
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
    <div class="bottom-container  uk-section "
        style="background-image: url('{{ asset('theme-assets/images/footer-bg.png') }}')">
        <div class="uk-container">
            <div class="uk-child-width-1-4@m uk-grid">
                
                <div>
                    <p class="uk-text-bold uk-text-large text-white">Destinations</p>

                    <ul class="footer-list uk-padding-remove">
                       @if($destination->count() > 0)
                         @foreach ($destination->take(4) as $value)
                        <li><a href="{{ route('page.destinationlist', $value->uri) }}">{{ $value->title }}</a></li>
                        @endforeach
                        @endif
                    </ul>
                </div>
                <div>
                    <p class="uk-text-bold uk-text-large text-white">Experiences</p>
                    <ul class="footer-list uk-padding-remove">
                  
                            <li><a href="{{ route('page.trekkinglist') }}">Trekking</a></li>

                            <li><a href="{{ route('page.expeditionlist') }}">Expeditions</a></li>
                            
                            <li><a href="{{ route('page.activitylist') }}">Activity</a></li>

                    </ul>
                </div>
                <div>
                    <p class="uk-text-bold uk-text-large text-white">Company</p>

                    <ul class="footer-list uk-padding-remove">
                        @if($about)
                        @foreach ($about as $item)       
                        <li><a href="{{ url(geturl($item->uri, $item->page_key)) }}"> {{ $item->post_title }}</a></li>
                        @endforeach
                        @endif
                     <li><a href="{{ route('page.posttype_detail', 'contact-us') }}"> Contact Us</a></li>

                        
                    </ul>
                </div>
                <div>
                    <p class="uk-text-bold uk-text-large text-white">Useful Links</p>
                    <ul class="footer-list uk-padding-remove">
                       @if($useful_info)
                        @foreach ($useful_info as $item)       
                        <li><a href="{{ url(geturl($item->uri, $item->page_key)) }}"> {{ $item->post_title }}</a></li>
                        @endforeach
                        @endif
                         <li><a href="{{ route('payment.direct') }}">Payment</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="uk-flex-between" uk-grid>
                <div class=" uk-width-2-3@m uk-flex">
                    <div class="uk-width-1-1@m uk-grid uk-text-center uk-text-left@m">
                        <div class="uk-width-auto@m uk-margin-top uk-flex uk-flex-middle uk-flex-center">
                            <div class="uk-margin-remove text-white">Follow us:</div>
                        <div>
                            <a href="{{$setting->instagram_link}}" target="_blank" class="uk-icon-button footer-icon" uk-icon="instagram"></a>
                            <a href="{{$setting->facebook_link}}" target="_blank" class="uk-icon-button footer-icon " uk-icon="facebook"></a>
                            <a href="{{$setting->youtube_link}}" target="_blank" class="uk-icon-button footer-icon" uk-icon="youtube"></a>
                            <a class="uk-link uk-icon-button footer-icon " rel="noreferrer"
                                href="{{$setting->twitter_link}}" target="_blank">
                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1668.56 1221.19" width="500" height="500" id="TwitterX">
                                <path d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z" transform="translate(52.39 -25.059)" fill="#ffffff"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                        <div class="uk-width-1-2@m  uk-flex uk-flex-center uk-flex-middle uk-flex-left@m">
                            <div class="uk-margin-top uk-margin-left">
                            <img loading="lazy" src="{{ asset('theme-assets/images/positivessl_trust_seal.png') }}" alt="postive-secure-ssl"/>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="uk-margin-top uk-width-1-3@m uk-text-center uk-text-left@m">
                    <div class="uk-margin-remove text-white">Payment:
                        <img src="{{ asset('uploads/payment.png') }}" alt="" style="height:55px;">
                    </div>
                </div>
            </div>
            <hr class="uk-margin-top">
            <div class="uk-text-center">
                <p class="text-white uk-margin-remove">{{ $setting->copyright_text }} | Website by <a href="https://cyberlink.com.np/" target="_blank">Cyberlink Pvt. Ltd</a> 
                </p>
            </div>
        </div>
    </div>
</footer>

<script type='text/javascript' src="{{ asset('theme-assets/js/app.js') }}"></script>
<script type='text/javascript' src="{{ asset('theme-assets/js/accordion.js') }}"></script>
<script type='text/javascript' src="{{ asset('theme-assets/js/main.js') }}"></script>
<script type='text/javascript'
    src='https://platform-api.sharethis.com/js/sharethis.js#property=638d728a8fb8b6001abbbc22&product=sop'
    async='async'></script>

    <script>
    // Wait for the iframe to load
    window.onload = function() {
      var iframes = document.getElementsByClassName('VIpgJd-ZVi9od-xl07Ob-OEVmcd skiptranslate');
      if (iframes.length > 0) {
        var iframe = iframes[0];
        var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

        // Create a <style> element
        var style = document.createElement('style');
        style.type = 'text/css';
        var css = `
            div#\:1\.menuBody{
              height: 190px!important;
            }
            .VIpgJd-ZVi9od-vH1Gmf-ibnC6b:hover div {
              background: #222;
            }
            .VIpgJd-ZVi9od-vH1Gmf-ibnC6b:hover div span.text{
              color: #fff!important;
            }
            span.indicator {
              display: none!important;
            }
            span.text {
              font-weight: normal!important;
              display: block!important;
              min-height: 1.2em!important;
              padding: 0px 2px 1px!important;
              white-space: nowrap!important;
              font-size: .9rem!important;
              color:#222!important
            }
        `;
        style.appendChild(document.createTextNode(css));
        // Append the <style> element to the iframe's document head
        iframeDocument.head.appendChild(style);
      }
    };
  </script>

<script type="text/javascript">
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'en',
			includedLanguages: 'en,fr,de,,hi,ja,ko,ru,ne',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE
		}, 'google_translate_element');
	}
	
	function translateLanguage(lang) {
      googleTranslateElementInit();
      var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
      }
      $frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
      return false;
    }
    
    $(function(){
      $('.selectpicker').selectpicker();
    });
</script>



<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit&hl=en"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{env('SITE_KEY')}}"></script>

<script>
grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo env("SITE_KEY"); ?>', {action: 'homepage'}).then(function(token) {
      document.getElementById('g_recaptcha_response').value=token;
    });
});
</script>

</body>

</html>
