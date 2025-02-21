@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')
<section class="uk-section-padding-page uk-faq pattern">
    <div class=" uk-container  ">
        <div class="uk-main-title-home uk-margin-bottom">
            <h2>{{$data->post_title}}</h2>
            <span></span>
        </div>
        <div class="uk-text-left " uk-grid>
            @include('themes.default.common.sidebar-single');
            
            <div class="uk-width-expand@m uk-faq">
                <div class="uk-card uk-card-default uk-margin-bottom clearfix ">
                    <div class="uk-card-body map">
                        <ul uk-accordion>
                            @foreach($associated_posts as $item)
                                <li class="{{$loop->iteration == '1' ? 'uk-open': ''}}">
                                    <a class="uk-accordion-title" href="#">{{$item->title}}</a>
                                    <div class="uk-accordion-content">
                                            {!! $item->brief !!}
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection