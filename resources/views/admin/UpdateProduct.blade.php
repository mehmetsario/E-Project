@extends('admin.layouts.master')
@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between text-left">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Products</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Update Product</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Is Active</th>
                        <th>Description</th>
                        <th>category</th>
                        <th>image</th>
                        <th width="280px">Action</th>
                    </tr>
                    @foreach ($item as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->isActive }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->category_id }}</td>

                            <td><img src="{{'assets/site/images/product/'. $product->image }}" width="100px"> </td>
{{--                            <td><img src="/image/{{ $product->image }}" width="100px"></td>--}}
                            <td>
                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                                    <a class="btn btn-primary" data-toggle="modal" data-target="#Modal{{$product->id}}" >Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <!-- Full screen modal -->
                        <!-- Modal HTML Markup -->
                        <div id="Modal{{$product->id}}" class="modal fade">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title">Login</h1>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                                                <div class="statbox widget box box-shadow">

                                                    <div class="widget-content widget-content-area add-manage-product-2">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12">
                                                                <div class="card card-default">
                                                                    <div class="card-header"><h2 class="card-title"><span>Product</span></h2></div>
                                                                    <div class="card-body">
                                                                        <div class="card-body">
                                                                            <form class="form-horizontal" method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Name :</label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" name="name" type="text" value="{{$product->name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Description :</label>
                                                                                        <div class="col-md-8">
                                                                                            <input type="text"  name="description" class="form-control" value="{{$product->description}}" ></input>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Details :</label>
                                                                                        <div class="col-md-8">
                                                                                            <textarea rows="4" cols="5" name="details" class="form-control" >{{$product->details}}</textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Category :</label>
                                                                                        <div class="col-md-8">
                                                                                            <select class="form-control form-custom mb-4" name="category_id">
                                                                                                <option value="">Select Category</option>
                                                                                                @foreach($categories as $category)
                                                                                                    <option value="{{$category->id}}"
                                                                                                    @if ($category->id==$product->category_id)
                                                                                                    selected
                                                                                                    @endif
                                                                                                    >{{$category->categoryName}}</option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Price :</label>
                                                                                        <div class="col-md-8">
                                                                                            <input class="form-control" name="price" type="text" value="{{$product->price}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group mb-4">
                                                                                    <div class="row">
                                                                                        <label class="col-md-4">Is Active :</label>
                                                                                        <div class="col-md-8">
                                                                                            <select name="isActive" >
                                                                                                <option value="1"
                                                                                                        @if ($product->isActive==1)
                                                                                                        selected
                                                                                                    @endif
                                                                                                >Active</option>
                                                                                                <option value="0"
                                                                                                        @if ($product->isActive==0)
                                                                                                        selected
                                                                                                    @endif
                                                                                                >not Active</option>
                                                                                            </select>                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">
                                                                                    <label class="col-md-4"> Image :</label>
                                                                                    <div class="col-md-8">
                                                                                        <div class="mb-3">
                                                                                            <div class="custom-file">
                                                                                                <input type="file" class="form-control-file" id="file-input" name="image" value="{{'assets/site/images/product/'.$product->image}}">
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                                                                    <button type="submit" class="btn btn-primary">Save changes</button>

                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /.modal -->

                    @endforeach
                </table>

				<!-- row -->
                <!-- Button trigger modal -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

			<!-- row -->
				<!-- row closed -->
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
