@extends('layouts.Fontend')
@section('title',"HOME")
@section('content')

<div class="col-lg-5 mx-auto">
    <div class="card mt-5">
        <div class="card-header">Add Todo</div>
        <div class="card-body">
            <form action=" {{ route('store') }}" method="POST">
                @csrf
                <input name="title" type="text" class="form-control my-2 @error('title') is-invalid @enderror" placeholder="Todo Title" value="{{old('title')}}">
                @error('title')
                <span class="text-denger">{{ $message }}</span>
                @enderror
                <textarea name="detail" placeholder="Todo Detail" class="my-2 form-control"  value="{{old('detail')}}"></textarea>
                @error('detail')
                <span class="text-denger">{{ $message }}</span>


                @enderror
                <input type="text" class="form-control my-2" placeholder="Author" name="author"  value="{{old('author')}}">
                <label for="">Publish Data</label>
                 <input type="date" class="form-control my-2" name="date"  value="{{old('date')}}">
                  @error('date')
                <span class="text-denger">{{ $message }}</span>
                @enderror
                 <button class="btn w-100 btn-primary"> Submit</button>
            </form>
        </div>
    </div>
</div>




@endsection

