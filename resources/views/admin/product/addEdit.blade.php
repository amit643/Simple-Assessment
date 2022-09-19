@extends('admin.main')

@section('content')

<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">
  <a href="{{route('product.list')}}">Product</a> /</span> @if(isset($product)) Edit @else Add @endif Product</h4>
  {{-- {{dd($product)}} --}}
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-12">
        <div class="card mb-4">
         
          <div class="card-body">
            <form action="@if(isset($product)) {{route('product.update')}} @else {{route('product.create')}} @endif" method="post">
              @csrf
                @if(isset($product))
                 <input type="hidden" class="form-control" name="id"  value="{{$product->id}}"  required/>
                @endif

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">title</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="title" placeholder="Enter title" @if(isset($product)) value="{{$product->title}}" @else value="{{ old('title') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">author</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="author" placeholder="Enter author" @if(isset($product)) value="{{$product->author}}" @else value="{{ old('author') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">genre</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="genre" placeholder="Enter genre" @if(isset($product)) value="{{$product->genre}}" @else value="{{ old('genre') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">description</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="description" placeholder="Enter description" @if(isset($product)) value="{{$product->description}}" @else value="{{ old('description') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">isbn</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" name="isbn" placeholder="Enter isbn" @if(isset($product)) value="{{$product->isbn}}" @else value="{{ old('isbn') }}" @endif required/>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">publisher</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="publisher" placeholder="Enter publisher" @if(isset($product)) value="{{$product->publisher}}" @else value="{{ old('publisher') }}" @endif required/>
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