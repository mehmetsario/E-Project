@extends('admin.layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between text-left">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Categories</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Category</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<!-- row -->
				<div class="row row-sm text-left" >

					<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
						<div class="card  box-shadow-0 ">
							<div class="card-header">
								<h4 class="card-title mb-1">Add Category</h4>
								<p class="mb-2">Enter the name off category that you want to Add</p>
							</div>
							<div class="card-body pt-0">
								<form action="{{route('categories.store')}}" method="Post" >
                                    @csrf
									<div class="text-left">
										<div class="form-group">
											<label for="exampleInputEmail1">Category Name</label>
											<input type="text" class="form-control"  name="categoryName" placeholder="Enter Category Name" required autocomplete="false">
										</div>
									</div>
									<button type="submit" class="btn btn-primary mt-3 mb-0">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->
				<!-- row closed -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                @if (Session()->has('msg'))
                    <div class="alert alert-success">

                                {{ Session('msg') }}
                    </div>
                    @endif

                    </div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
