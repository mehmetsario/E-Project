@extends('admin.layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/admin/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/admin/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/admin/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between text-left">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Orders</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ View Orders</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                        <tr>
                                            <th class="wd-5p border-bottom-0">Id</th>
                                            <th class="wd-10p border-bottom-0">Name</th>
                                            <th class="wd-20p border-bottom-0">E-mail</th>
                                            <th class="wd-15p border-bottom-0">Cell No</th>
                                            <th class="wd-10p border-bottom-0">Work Phone No</th>
                                            <th class="wd-10p border-bottom-0">Gender</th>
                                            <th class="wd-10p border-bottom-0">Total Price</th>
                                            <th class="wd-15p border-bottom-0">Date of Orders</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->wphone}}</td>
                                            <td>{{$order->gender}}</td>
                                            <td>{{$order->total_price}}</td>
                                            <td>{{$order->created_at}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/admin/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/admin/js/table-data.js')}}"></script>
@endsection
