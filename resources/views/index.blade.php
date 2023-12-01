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
            
        @section('content')
            @forelse ($tasks as $task)
                <div>
                    {{ $task->id }}
                    <a href="{{ route('tasks.show', ['id'=>$task->id]) }}">{{ $task->title }}</a>
                    {{ $task->description }}
                    {{ $task->long_description }}
                    {{ $task->completed }}
                    {{ $task->created_at }}
                    {{ $task->updated_at }}
                </div>
            @empty
                No tasks
            @endempty
        @endsection

           
        
            
    </body>
</html>
