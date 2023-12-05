@extends('layouts.app')

@section('title', 'List of tasks')
    
@section('content')
    <nav class="mb-5">
        <a href="{{ route('create') }}">Create a new task</a>
    </nav>

    @forelse ($tasks as $task)
        <div>
            <a  @class(['line-through' => $task->completed]) href="{{ route('tasks.show', ['task'=>$task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        No tasks
    @endempty
   
    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection

