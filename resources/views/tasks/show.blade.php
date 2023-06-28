@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center">
        <div class="max-w-sm w-100 mx-auto">
            <h1 class="text-3xl font-bold mb-6">Task Details</h1>

            <h3 class="text-lg font-semibold mb-2">Title: {{ $task->title }}</h3>
            <p class="mb-2">Description: {{ $task->description }}</p>
            <p class="mb-4">Deadline: {{ $task->deadline }}</p>

            <a href="{{ route('tasks.edit', $task->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 mr-2">Edit</a>

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition-colors duration-300">Delete</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="bg-gray-300 text-gray-700 py-2 px-4 rounded-md hover:bg-gray-400 transition-colors duration-300 mt-4 w-full">Back to Tasks</a>
        </div>
    </div>
@endsection


