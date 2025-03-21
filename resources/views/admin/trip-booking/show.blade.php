@extends('admin.master')
@section('breadcrumb')
 <a href="{{ route('trip-booking') }}" class="btn btn-primary btn-sm">Go Back</a>
@endsection
@section('content')

	<div class="col-md-8">
		<!-- Input Fields -->
		<div class="panel">
			<div class="panel-body">  
				<div class="form-group">
				    <div class="col-lg-12">
						<div class="bs-component">  
						    <h3>Trip Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class=""> Trip Name</td>
                                        <td class="">{{ $book->title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="">Trip Starts</td>
                                        <td class="">{{ $book->trip_start_date }} </td>
                                    </tr>
                                    @if($book->trip_end_date)
                                        <tr>
                                            <td class="">Trip Ends</td>
                                            <td class="">{{ $book->trip_end_date }} </td>
                                        </tr>
                                    @endif
                                    @if($book->trip_days)
                                        <tr>
                                            <td class="">Trip Days</td>
                                            <td class="">{{ $book->trip_days }} </td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="">Num of people</td>
                                        <td class="">{{ $book->total_travellers }} </td>
                                    </tr>
                                    <tr>
                                        <td class="">Departure Type</td>
                                        <td class="">{{ $book->depature_type == 1 ? 'Fixed' : 'Normal' }}</td>
                                    </tr>
                                    @if($book->price)
                                        <tr>
                                            <td class="">Price</td>
                                            <td class="">{{ $book->price ? $book->price : '-' }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="">Trip Status</td>
                                        <td class="">{{$book->paid_status == 1 ? 'Completed' : 'Ongoing'}}</td>
                                    </tr>
                                </tbody>
                            </table>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="bs-component">
						    <h3>Personal Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Name</td>
                                        <td class="">{{ $book->full_name }}</td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="">Meal</td>
                                        <td class="">{{ $book->meal == 1 ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    @if($book->gender )
                                        <tr>
                                            <td class="">Gender</td>
                                            <td class="">{{ $book->gender }}</td>
                                        </tr>
                                    @endif
                                    @if($book->dob)
                                        <tr>
                                            <td class="">D.O.B</td>
                                            <td class="">{{ $book->dob }}</td>
                                        </tr>
                                    @endif
                                    @if($book->nationality)
                                        <tr>
                                            <td class="">Nationality</td>
                                            <td class="">{{ $book->nationality }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            
                           
						</div>
					</div>
                    <div class="col-lg-12">
						<div class="bs-component">
						    <h3>Contact Information</h3>
						    <table class="table admin-form table-striped dataTable" id="datatable3">
                                <tbody>
                                    <tr>
                                        <td class="">Email</td>
                                        <td class="">{{ $book->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="">Phone</td>
                                        <td class="">{{ $book->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td class="">Country</td>
                                        <td class="">{{ $book->country }}</td>
                                    </tr>
                                    @if($book->address)
                                        <tr>
                                            <td class="">Address</td>
                                            <td class="">{{ $book->address }}</td>
                                        </tr>
                                    @endif
                                    @if($book->zip)
                                        <tr>
                                            <td class="">Zip/Postal.</td>
                                            <td class="">{{ $book->zip }}</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
						</div>
					</div>
				</div> 
			</div>
		</div> 
	</div>

@endsection

