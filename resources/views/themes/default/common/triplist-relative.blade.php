<!--  -->
@foreach ($similar_trips as $item)
<li>
	<div class="uk-trip-list uk-border-rounded">
		<a class=" uk-cover-container uk-display-block uk-inline-clip uk-transition-toggle uk-link-toggle" href="{{ url('page/' . tripurl($item->uri)) }}">
			<div class="uk-media-500"> <img class="uk-transition-scale-up uk-transition-opaque" alt="{{$item->trip_title}}" uk-img src="@if($item->thumbnail){{ asset('uploads/original/'.$item->thumbnail) }}@else{{asset('images/default/default-thumbnail.png')}}@endif"> </div>
			<div class="uk-overlay-trip-list uk-position-cover"></div>
			<div class="uk-position-top">
				<div class="uk-padding-small">@if(getactivityname($item->id)) <span class="uk-label bg-primary"><i class="fa fa-walking"></i>@endif{{getactivityname($item->id) ? getactivityname($item->id)->title : ''}}</span> </div>
			</div>
			<div class="uk-position-bottom">
				<div class="uk-padding-small uk-padding-remove-vertical">
					<div class="uk-margin-bottom uk-text-center">
						<h4 class="f-23 text-white uk-margin-remove f-w-600 uk-text-shadow-large">{{$item->trip_title}}</h4>
						<div class="uk-description  uk-margin">
							<div class="text-white f-16 uk-margin uk-sub-title uk-text-shadow-large"> {{$item->trip_excerpt}}</div>
						</div>
					</div>
				</div>
				<div class="uk-short-info uk-padding-small uk-panel">
					<div class="uk-grid-small uk-child-width-expand f-14 text-white uk-text-uppercase" uk-grid>
						<!--  -->
						@if($item->duration==!NULL)
						<div class="uk-flex uk-flex-middle">
							<div uk-scrollspy-class> 
								
								<img class="uk-margin-small-right" src="{{asset('/images/icons/duration.svg')}}" width="30" alt="duration">
							
							</div>
							<div uk-scrollspy-class> <span class="f-10">Duration</span>
								<br>{{$item->duration}}@if($item->duration == 1) Day @else Days @endif</div>
						</div>
						@endif
						<!--  -->						
						<!--  -->
						@if($item->trip_grade==!NULL)
						<div class="uk-flex uk-flex-middle">
							<div uk-scrollspy-class> <img class="uk-margin-small-right" src="{{asset('images/icons/level'.$item->trip_grade.'.svg')}}" width="30" alt="difficulty"> </div>
							<div uk-scrollspy-class> <span class="f-10">Difficulty</span>
								<br>{{grade_message_trek($item->trip_grade)}} </div>
						</div>
						@endif
						<!--  -->
					</div>
				</div>
			</div>
		</a>
	</div>
</li>
@endforeach


