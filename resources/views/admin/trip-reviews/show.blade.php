@extends('admin.master')
@section('breadcrumb')
 <a href="{{ route('trip-review') }}" class="btn btn-primary btn-sm">Go Back</a>
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
                                        <td class="">{{ $data->trips->trip_title }}</td>
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
                                        <td class="">Full Name</td>
                                        <td class="">{{ $data->full_name }}</td>
                                    </tr>
                                    @if($data->rating)
                                        <tr>
                                            <td>Rating</td>
                                            <td>{{ $data->rating }} stars</td>
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
                                        <td class="">{{ $data->email }}</td>
                                    </tr>
                                    @if($data->contact)
                                        <tr>
                                            <td class="">Phone</td>
                                            <td class="">{{ $data->contact }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="">Country</td>
                                        <td class="">{{ $data->country }}</td>
                                    </tr>
                                    @if($data->address)
                                        <tr>
                                            <td class="">Address</td>
                                            <td class="">{{ $data->address }}</td>
                                        </tr>
                                    @endif
                                    @if($data->zip)
                                        <tr>
                                            <td class="">Zip/Postal.</td>
                                            <td class="">{{ $data->zip }}</td>
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

