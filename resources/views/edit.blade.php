@extends('layouts.app')


@section('title', 'Edit task')
    
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
    <form action="{{ route('tasks.update', ['id'=>$task->id]) }}" method="POST">
        <div>
            <label for="title">Title </label>
            <input type="text" name="title" id="title" required
            class="@error('title') is-invalid @enderror" value="{{ $task->title }}"/> 

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="title">Description</label>
            <textarea type="text" name="description" id="description" required class="@error('description') is-invalid @enderror">{{ $task->description }}</textarea> 
        
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            

        <div>
            <label for="title">Long description</label>
            <textarea type="text" name="long_description" id="long_description" required class="@error('long_description') is-invalid @enderror">{{ $task->long_description }}</textarea> 
        
            @error('long_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
        <button type="submit">Edit task</button>
        @csrf
        @method('PUT')
    </form>
@endsection

