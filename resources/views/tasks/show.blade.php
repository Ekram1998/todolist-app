@extends('layout')
@section('content')
    <div class="col-md-9">
        <a href="{{url('api/tasks')}}"><button type="button" class="btn btn-info">Go Back</button></a> <br> <br>
        <div class="card">
            <div class="card-header">
                <h2>Todo List</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title">Title : {{ $tasks->title }}</h5>
                <p class="card-text">Description : {{ $tasks->description }}</p>
                <p class="card-text">Is Completed : {{ $tasks->is_completed }}</p>
            </div>
        </div>
    </div>
@endsection
