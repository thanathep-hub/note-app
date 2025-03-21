<!-- resources/views/notes/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold">My Notes</h1>
        <a href="{{ route('notes.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            New Note
        </a>
    </div>

    @if ($notes->isEmpty())
        <div class="text-center py-12">
            <h3 class="text-lg font-medium text-gray-500 mb-4">No notes yet</h3>
            <p class="text-gray-500 mb-6">Create your first note to get started</p>
            <a href="{{ route('notes.create') }}"
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded flex items-center justify-center w-40 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                Create Note
            </a>
        </div>
    @else
        <div class="space-y-4">
            @foreach ($notes as $note)
                <div class="bg-white rounded-lg shadow-md w-full">
                    <div class="flex flex-col sm:flex-row sm:items-center">
                        <div class="flex-grow p-4 sm:p-6">
                            <a href="{{ route('notes.show', $note) }}" class="hover:text-blue-600">
                                <h3 class="text-lg font-medium">{{ $note->title }}</h3>
                            </a>
                            <p class="mt-2 text-gray-500 line-clamp-2">{{ $note->content }}</p>
                            <div class="mt-2 text-xs text-gray-500">
                                {{ $note->updated_at->format('M d, Y') }}
                            </div>
                        </div>
                        <div class="flex justify-end gap-2 p-4 sm:pr-6 border-t sm:border-t-0 sm:border-l">
                            <a href="{{ route('notes.show', $note) }}"
                                class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded text-gray-700 bg-white hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                View
                            </a>
                            <a href="{{ route('notes.edit', $note) }}"
                                class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded text-gray-700 bg-white hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('notes.destroy', $note) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center px-3 py-1.5 border border-gray-300 text-sm font-medium rounded text-red-700 bg-white hover:bg-gray-50"
                                    onclick="return confirm('Are you sure you want to delete this note?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
