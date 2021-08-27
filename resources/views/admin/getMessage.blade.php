@extends('admin.layouts.master')
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between text-left">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Messages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ View Messages</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Date</th>
                            <th >Action</th>

                        </tr>
                        @foreach ($items as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td><a class="btn btn-primary" data-toggle="modal" data-target="#Modal{{$message->id}}" >Read</a></td>
                                <td>{{ $message->created_at}}</td>
                                <td>
                                    <form action="{{ route('messageDestroy',$message->id) }}" method="POST">



                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- Full screen modal -->
                            <!-- Modal HTML Markup -->
                            <div class="modal" id="Modal{{$message->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{$message->subject}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="overflow-wrap: break-word;">{{$message->message}}</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </table>

                </div>
				<!-- row closed -->
                @if ($message = Session::get('msg'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection

