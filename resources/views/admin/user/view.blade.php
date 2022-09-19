@extends('admin.main')
@section('content')
<div class="card">
    <div class="container mt-5">
        <div class="row col-12">
        <div class="col-6">
            <h2 class="mb-4">User Lists</h2>
        </div>
        <div class="col-6">
            <a href="{{route('user.add')}}" class="btn btn-outline-info btn-sm pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New
            </a>

        </div>

        </div>
        <table class="table table-bordered user-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
  </div>
 

@endsection
@section('javascript')
    @include('admin.user.userjs')
@endsection