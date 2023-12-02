@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
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

           
        
            
    </body>
</html>
