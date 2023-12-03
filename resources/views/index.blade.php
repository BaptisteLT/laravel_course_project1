@extends('layouts.app')

@section('title', 'List of tasks')
    
<a href="{{ route('create') }}">Create a new task</a>

@section('content')
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id'=>$task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        No tasks
    @endempty
@endsection

