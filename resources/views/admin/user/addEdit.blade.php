@extends('admin.main')
@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
  <a href="{{route('user.list')}}">Users</a> /</span> Account</h4>
  {{-- {{dd($user)}} --}}
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">@if(isset($user)) Edit @else Add @endif User</h5>
          </div>
          <div class="card-body">
            <form action="@if(isset($user)) {{route('user.update')}} @else {{route('user.create')}} @endif" method="post">
              @csrf
                @if(isset($user))
                 <input type="hidden" class="form-control" name="userId" placeholder="Enter Name"  value="{{$user->id}}"  required/>
                @endif

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="userName" placeholder="Enter Name" @if(isset($user)) value="{{$user->name}}" @else value="{{ old('userName') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Email Id</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"  name="emailId" placeholder="Enter Email Id" @if(isset($user)) value="{{$user->email}}" @else value="{{ old('emailId') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control"  name="password" placeholder="Enter Password" @if(!isset($user)) required @endif/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Role</label>
                <div class="col-sm-10">
                {{-- {{dd($user->role)}} --}}
                 <select class="form-select" name="role" @if (isset($view)) disabled @endif required>
                  <option selected>Select Role</option>
                    @foreach($roles as $role)
                      <option value="{{$role->id}}"  @if (isset($user->role))  @if($user->role->role_id==$role->id) selected @endif @endif>{{$role->name }}</option>
                    @endforeach
                </select>
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Basic with Icons -->
      
    </div>

@endsection