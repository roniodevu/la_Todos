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

                    <span class="btn btn-sm mt-3 btn-{{ $todo->status == 0 ? 'warning' :'primary'}}"> {{ $todo->status == 0 ?'Unsuccess' : 'Success'}} </span>


                </div>
                <div class="card-footer">Edit <a href="{{ route('delete', $todo->id) }}">Delete</a></div>

            </div>
        </div>
        @endforeach
    </div>


    <nav>

    {{ $todos->links() }}
    </nav>
</div>

@endsection
