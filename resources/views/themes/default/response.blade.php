@extends('themes.default.common.master')
@section('content')
<div style="background:#3f3e3d;min-height:80px">

</div>
<div class="uk-container uk-text-center uk-margin-large">
                    @if(session('success_message'))
                    <div class="alert alert-success">
                        <img src="{{asset('theme-assets/images/tick-image.gif')}}" width="150" height="150" >
                        <h2 style="margin-bottom:0;"> {{session('success_message')}} </h2>
                        <!-- <h3 style="margin:0;">Thank You! Your booking has been completed.</h3> -->
                    </div>
                    @endif
                    @if(session('failure_message'))
                    <div class="alert alert-danger">
                        <img src="{{asset('theme-assets/images/wrong-red.gif')}}" width="150" height="150">
                        <h3> {{session('failure_message')}}</h3>
                    </div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection