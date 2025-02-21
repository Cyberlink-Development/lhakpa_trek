@extends('themes.default.common.master')
@section('title',$data->post_title)
@section('meta_keyword',$data->meta_keyword)
@section('meta_description',$data->meta_description)
@section('thumbnail',$data->page_thumbnail)
@section('content')
<section class="uk-section-padding-page pattern">
    <div class=" uk-container">
        <div class="uk-main-title-home uk-margin-bottom">
            <h2>{{$data->sub_title}}</h2>
        </div>
        <div class="uk-text-left uk-child-width-1-3@m uk-grid-match" uk-grid>
            <!--  -->
            @if($data_child != null)
                @foreach ($data_child as $item)
                    <div class="uk-hover-img uk-margin-medium-bottom">
                        <div class="uk-card-media-top uk-news-list-img ">
                            <a href="{{ route('page.pagedetail',$item['uri'], $item['page_key']) }}" title="">
                                @if($item->page_thumbnail != null)
                                    <img src="{{asset('uploads/original/'. $item->page_thumbnail)}}" alt="{{$item->post_title}}">
                                @else
                                    <img src="{{asset('theme-assets/images/default-thumbnail.png')}}" alt="{{$item->post_title}}">
                                @endif
                            </a>
                        </div>
                        <div class="uk-card uk-card-default uk-card-body uk-blog-list">
                            <span class="uk-date">{{$item->created_at->format('d M Y')}}</span>
                            <h4><a href="{{ route('page.pagedetail',$item['uri'], $item['page_key']) }}">{{$item->post_title}}</a> </h4>
                            <p>{!! $item->post_excerpt !!}</p>
                            <a href="{{ route('page.pagedetail',$item['uri'], $item['page_key']) }}" class="uk-button uk-button-primary">Read More</a>
                        </div>
                    </div>
                @endforeach
            @endif
            <!--  -->
        </div>
        <!--  -->
        {!! $data_child->links('themes.default.common.pagination') !!}
    </div>
</section>
@endsection