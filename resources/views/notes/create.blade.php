<!-- resources/views/notes/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="bg-white shadow-md rounded-lg">
            <div class="p-6 border-b">
                <h2 class="text-xl font-semibold">Create New Note</h2>
            </div>
            <div class="p-6">
                <form action="{{ route('notes.store') }}" method="POST">
                    @csrf
                    <div class="space-y-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                            <input type="text" name="title" id="title"
                                value="{{ old('title') }}
                                    class="bg-gray-50 border
                                border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500
                                block w-full p-2.5" placeholder="John" required />
                            @error('title')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>


                            <label for="content"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
                            <textarea name="content" id="content" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex justify-end gap-4">
                            <a href="{{ route('notes.index') }}"
                                class="px-4 py-2 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                                Cancel
                            </a>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md text-sm font-medium">
                                Save Note
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
