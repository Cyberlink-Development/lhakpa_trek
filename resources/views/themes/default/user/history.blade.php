@extends('themes.default.common.master')
@section('content')
<section class=" uk-cover-container uk-position-relative uk-flex uk-flex-middle uk-background-norepeat uk-background-cover uk-background-top-center uk-background-fixed uk-grey-bg" style="height:400px;" data-src="{{ asset('theme-assets/img/bg/pattern.png') }}" alt="" uk-img>
    <div class="uk-container uk-width-1-1  uk-position-relative">
        <div class="uk-flex uk-flex-middle uk-flex-center uk-grid-collapse " uk-grid>
            <div class="uk-width-1-1@m">
                <div class="uk-sub-banner-font uk-text-center">
                    <h2 class="uk-secondary uk-margin-large-top">Your Travel History</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="uk-section ">
    <div class="uk-container">
        <div class="uk-div-overlay " uk-grid>
            <div class="uk-width-1-4@m ">
            @include('themes.default.user.sidebar')    
            </div>
            <div class="uk-width-3-4@m">
                <p class="uk-visible@m uk-white" style="margin:2rem 0px 5rem 0;">Trip you have visited with us :
                </p>
 
                <table class="uk-table uk-table-striped uk-table-responsive">
                    <thead>
                        <tr>
                            <th style="width: 80px;"></th>
                            <th>Trip Name</th>
                            <th>Departure Type</th>
                            <th>Trip Status</th>
                            <th>Trip Start Date</th>      
                        </tr>
                    </thead>
                    <tbody>
                    @if($data->count() > 0)
                    @foreach ($data as $row)  
                        <tr>
                            <td><img src="{{!empty(tripdetail($row->trip_id)->thumbnail) ? asset('uploads/original/'.tripdetail($row->trip_id)->thumbnail) : asset('theme-assets/img/mountain/mountain9.jpeg')}}" class="uk-history-img" alt="{{ tripname($row->trip_id) }}"></td>
                            <td class="uk-text-uppercase">{{ tripname($row->trip_id) }}</td>
                            <td>{{ $row->depature_type  == 1 ? 'Fixed' : 'normal' }}</td>
                            <td>
                            {{ $row->paid_status == 0 ? 'Ongoing' : 'Completed' }}
                                                      
                        </td>
                            <td>{{ date("d M Y", strtotime($row->trip_start_date)) }}</td>
                        </tr>
                        @endforeach
                        @endif
                       
                    </tbody>
                </table>
                @include('themes.default.user.pagination')
            </div>
        </div>
    </div>
</section>
@stop