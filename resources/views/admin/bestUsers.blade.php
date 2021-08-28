@extends('admin.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Reports</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Top 10 clients/users </span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                            <div class="card card-dashboard-eight pb-2">
                                <h6 class="card-title">Your Top 10 clients/users (doing maximum shopping).</h6>
                                <div class="list-group">
                                    <div class="list-group-item border-top-0">
                                        <p>User Name</p><span>Total Paid Money</span>
                                    </div>
                                    @foreach($orders as $order)
                                    <div class="list-group-item">
                                        <i class="fas fa-user"></i>
                                        <p>{{$order->name}}</p><span>{{$order->totalPrice}}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
				</div>
				<!-- row closed -->




			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
