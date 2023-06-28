@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center">
        <div class="max-w-sm w-full mx-auto">
            <h1 class="text-3xl font-bold mb-6">Edit Task</h1>

            <a href="{{ route('tasks.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 mb-4">Back to Tasks</a><br><br>

            <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="mb-6">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="title" class="block text-lg font-semibold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-300 rounded-md py-2 px-4 w-full" value="{{ $task->title }}" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-lg font-semibold mb-2">Description</label>
                    <textarea name="description" id="description" class="border border-gray-300 rounded-md py-2 px-4 w-full h-32" required>{{ $task->description }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="deadline" class="block text-lg font-semibold mb-2">Deadline</label>
                    <input type="date" name="deadline" id="deadline" class="border border-gray-300 rounded-md py-2 px-4 w-full" value="{{ $task->deadline }}" required>
                </div>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 w-full">Update</button>
            </form>
        </div>
    </div>
@endsection

