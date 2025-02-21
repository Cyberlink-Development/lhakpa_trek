@extends('themes.default.common.master')
@section('content')
<section class="uk-section-padding-page uk-faq pattern">
    <div class=" uk-container ">
        <h1>Search Results</h1>
    </div>
</section>
<div class="waves"></div>

	<!-- section   -->
<section class="uk-section uk-bg-white">	
    <div class="uk-container">
      <div class="uk-card uk-card-default">
    	 	<!--trips-->
    	 	@if($trip->count()>0)
	    	<div class="uk-card-body">
	    	 <h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Trip Results: </h1>
    	 	 <ul class="uk-search-list bg-light">
    	 	@foreach($trip as $row)
    	 	<li><a href="{{ url('page/' . tripurl($row->uri)) }}" ><mark>{{$row->trip_title}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--trips-->
    	 	<!--category-->
    	 	@if($category->count()>0)
	 		<div class="uk-card-body">
	 		<h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Category Results: </h1>
     		 <ul class="uk-search-list bg-light">
    	 	@foreach($category as $row)
    	  	<li><a href="{{ route('page.activitydetail',$row->uri) }}" ><mark>{{$row->title}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--category-->
    	 	<!---post-->
    	 		@if($post->count()>0)
	 		<div class="uk-card-body">
	 		<h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Post Results: </h1>
     		 <ul class="uk-search-list bg-light">
    	 	@foreach($post as $row)
    	 	 	<li><a href="{{url(geturl($row['uri'],$row['page_key']))}}" ><mark>{{$row->post_title}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--post-->
    	 	<!--team-->
    	 		@if($team->count()>0)
	 		<div class="uk-card-body">
	 		<h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Team Results: </h1>
     		 <ul class="uk-search-list bg-light">
    	 	@foreach($team as $row)
    	  	<li><a href="{{ url('team/'.team_url($row['uri'], $row['team_key'])) }}" ><mark>{{$row->name}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--team-->
    	 	<!--region-->
    	 		@if($region->count()>0)
	 		<div class="uk-card-body">
	 		<h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Region Results: </h1>
     		 <ul class="uk-search-list bg-light">
    	 	@foreach($region as $row)
    	  	<li><a href="{{ route('page.regionlist',$row->uri) }}" ><mark>{{$row->title}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--region-->
    	 	
    	 	<!--destination-->
    	 		@if($destination->count()>0)
	 		<div class="uk-card-body">
	 		<h1 class="main-title-font uk-h3 uk-margin-remove text-primary">Destination Results: </h1>
     		 <ul class="uk-search-list bg-light">
    	 	@foreach($destination as $row)
    	  	<li><a href="{{ route('page.destinationlist',$row->uri) }}" ><mark>{{$row->title}}</mark></a></li>
    	 	@endforeach
    	 	</ul>
    	 	</div>
    	 	@endif
    	 	<!--destination-->
      	 
            </div>
		</div>
	</section>
@endsection