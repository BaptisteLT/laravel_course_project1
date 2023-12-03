@extends('layouts.app')


@section('title', 'Create a new task')
    
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
    <form action="{{ route('tasks.store') }}" method="POST">
        <div>
            <label for="title">Title </label>
            <input type="text" name="title" id="title" required value="{{ old('title') }}"
            class="@error('title') is-invalid @enderror" /> 

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" required class="@error('description') is-invalid @enderror">{{ old('description') }}</textarea> 
        
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            

        <div>
            <label for="long_description">Long description</label>
            <textarea type="text" name="long_description" id="long_description" required class="@error('long_description') is-invalid @enderror">{{ old('long_description') }}</textarea> 
        
            @error('long_description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
            
        <button type="submit">Create task</button>
        @csrf
    </form>
@endsection

