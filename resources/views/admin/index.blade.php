@extends('admin.layouts.master')
@section('css')

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">Hi, welcome !</h2>
						  <p class="mg-b-0">Jenny Shop DashBoard System: </p>
						</div>
					</div>
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">Total Products Number </h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white"> {{ $item1 }} </h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<span class="text-white op-7"> </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">Total Categories Number</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $item2 }}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<span class="text-white op-7">  </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">TOTAL Orders Number</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{ $item3 }}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<span class="text-white op-7"> </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">Total Paid Money</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">$ {{ $item4 }}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
											<span class="text-white op-7"> </span>
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>




				<!-- row opened -->
				<div class="row row-sm row-deck">
					<div class="col-md-12 col-lg-8 col-xl-8">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">Users Table</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											<th class="wd-lg-15p">id</th>
											<th class="wd-lg-25p tx-center">User Name</th>
											<th class="wd-lg-25p tx-center">Email</th>
											<th class="wd-lg-15p tx-center">Status</th>
											<th class="wd-lg-25p tx-center">Action</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($item5 as $user)
										<tr>
											<td>{{$user->id}}</td>
											<td class="text-center tx-medium tx-inverse">{{$user->name}}</td>
											<td class="text-center tx-medium tx-inverse">{{$user->email}}</td>
											<td class="text-center tx-medium tx-danger">
                                            @if($user->is_admin==1)
                                                Admin
                                                @else
                                                User
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->is_admin==1)
                                                    No Action For Admin
                                                @else

                                                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                                @endif

                                            </td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
                @if ($message = Session::get('msg'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<script src="{{URL::asset('assets/admin/js/index.js')}}"></script>
<script src="{{URL::asset('assets/admin/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
