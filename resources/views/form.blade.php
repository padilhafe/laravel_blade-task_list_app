@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-4">
            <label for="title">
                Title
            </label>
            <input type="text" name="title" id="title" @class(['border', 'border-red-500' => $errors->has('title')]) value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p class='error'>{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label>Description</label>
            <textarea name="description" id="description" rows="5" @class(['border', 'border-red-500' => $errors->has('title')])>{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class='error'>{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label>Long description</label>
            <textarea name="long_description" id="long_description" rows="10" @class(['border', 'border-red-500' => $errors->has('title')])>{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class='error'>{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center gap-2">
            <button type="submit" class="btn">
                @isset($task)
                    Update Task
                @else
                    Add Task
                @endisset
            </button>
            <a href="{{ route('tasks.index') }}" class="link">Cancel</a>
        </div>
    </form>
@endsection
