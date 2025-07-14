@extends('layouts.Fontend')
@section('title',"All Todos")
@section('content')
    <h2 class="text-center"> ALL TODOS</h2>


<div class="container">
        <div class="row">
        @foreach ($todos as $todo)
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">{{ $todo->title }}</div>
                <div class="card-body">{{ $todo->detail}}
                    <hr>
                    <strong>{{$todo->author}}</strong>
                    <p>Publish Date: {{Carbon\Carbon::parse( $todo->date)->format('d M, Y') }}</p>

                    <span class="btn btn-sm mt-3 btn-success"> {{ $todo->status == 0 ?'Incompleate' :  'compleate'}} </span>


                </div>
                <div class="card-footer">Edit Delate</div>

            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
