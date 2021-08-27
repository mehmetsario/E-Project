@extends('admin.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Reports</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  TOP 10 BEST SELLING PRODUCTS </span>
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
                                <h6 class="card-title">Your top 10 best selling products..</h6>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Total sale Times</th>


                                    </tr>
                                    @foreach ($total_sale as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td><img src="{{'assets/site/images/product/'. $item->image }}" width="100px"></td>
                                            <td>{{ $item->total_sale }}</td>
                                        </tr>
                                        <!-- Full screen modal -->
                                        <!-- Modal HTML Markup -->
                                    @endforeach
                                </table>
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
