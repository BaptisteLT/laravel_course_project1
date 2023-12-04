@extends('layouts.app')

@section('title', (isset($task) ? 'Edit Task' : 'Create a new Task'))
    
@section('styles')
    <style>
        .alert
        {
            font-weight: 0.8rem;
        }
        .alert-danger{
            color: red;
        }
    </style>
@endsection

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', ['task'=>$task->id]) : route('tasks.store') }}" method="POST">
        <div>
            <label for="title">Title </label>
            <input type="text" name="title" id="title" required value="{{ isset($task) ? $task->title : old('title') }}"
            class="@error('title') is-invalid @enderror" /> 

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" required class="@error('description') is-invalid @enderror">{{ $task->description ?? old('description') }}</textarea> 
        
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            

        <div>
            <label for="long_description">Long description</label>
            <textarea type="text" name="long_description" id="long_description" required class="@error('long_description') is-invalid @enderror">{{ $task->long_description ?? old('long_description') }}</textarea> 
        
            @error('long_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
        <button type="submit">
            @isset($task)
                Edit task
            @else
                Create task
            @endisset
        </button>
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
    </form>
@endsection

