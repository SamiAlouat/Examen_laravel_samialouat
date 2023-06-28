@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center">
        <div class="max-w-sm w-100 mx-auto">
            <h1 class="text-3xl font-bold mb-6">Tasks</h1>

            <a href="{{ route('tasks.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 mb-4">Create Task</a><br><br>

            @if ($tasks->isEmpty())
                <p>No tasks available.</p>
            @else
                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b font-semibold">Title</th>
                            <th class="py-2 px-4 border-b font-semibold">Description</th>
                            <th class="py-2 px-4 border-b font-semibold">Deadline</th>
                            <th class="py-2 px-4 border-b font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $task->title }}</td>
                                <td class="py-2 px-4 border-b">{{ $task->description }}</td>
                                <td class="py-2 px-4 border-b">{{ $task->deadline }}</td>
                                <td class="py-2 px-4 border-b">
                                    <a href="{{ route('tasks.show', $task->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition-colors duration-300 mr-2">View</a>
                                    <a href="{{ route('tasks.edit', $task->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded-md hover:bg-yellow-600 transition-colors duration-300 mr-5">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded-md hover:bg-red-600 transition-colors duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

