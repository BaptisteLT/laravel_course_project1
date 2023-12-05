@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>

    @if( $task->long_description )
        <p>{{ $task->long_description }}</p>
    @endif

    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p> 

    <p>Task {{ $task->completed ? 'completed' : 'completed' }}</p>

    <div>
        <form action="{{ route('tasks.toggle-complete', ['task'=>$task]) }}" method="POST">
            @method('PUT')
            @csrf
            <button type="submit">{{ $task->completed ? 'Not completed' : 'Completed' }}</button>
        </form>
    </div>

    <a href="{{ route('tasks.edit',  $task->id) }}">Edit</a>

    <form action="{{ route('tasks.destroy', ['task'=>$task->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
    </form>
@endsection

