@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center">
        <div class="max-w-sm w-full mx-auto">
            <h1 class="text-3xl font-bold mb-6 text-center">Create Task</h1>

            <form action="{{ route('tasks.store') }}" method="POST" class="mb-6">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-lg font-semibold mb-2">Title</label>
                    <input type="text" name="title" id="title" class="border border-gray-300 rounded-md py-2 px-4 w-full" required>
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-lg font-semibold mb-2">Description</label>
                    <textarea name="description" id="description" class="border border-gray-300 rounded-md py-2 px-4 w-full h-32" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="deadline" class="block text-lg font-semibold mb-2">Deadline</label>
                    <input type="date" name="deadline" id="deadline" class="border border-gray-300 rounded-md py-2 px-4 w-full" required>
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('tasks.index') }}" class="bg-gray-500 text-white py-2 px-4 rounded-md hover:bg-gray-600 transition-colors duration-300">Cancel</a>
                </div><br>

                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 w-full">Create</button>
            </form>
        </div>
    </div>
@endsection


