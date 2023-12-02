@extends('layouts.app')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        @section('title', 'Create a new task')
            
        @section('content')
            <form action="{{ route('tasks.store') }}" method="POST">
                <div>
                    <label for="title">Title </label>
                    <input type="text" name="title" id="title" required
                    class="@error('title') is-invalid @enderror" /> 

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="title">Description</label>
                    <textarea type="text" name="description" id="description" required class="@error('description') is-invalid @enderror"></textarea> 
                
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    

                <div>
                    <label for="title">Long description</label>
                    <textarea type="text" name="long_description" id="long_description" required class="@error('long_description') is-invalid @enderror"></textarea> 
                
                    @error('long_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                   
                <button type="submit">Create task</button>
                @csrf
            </form>
        @endsection

           
        
            
    </body>
</html>
