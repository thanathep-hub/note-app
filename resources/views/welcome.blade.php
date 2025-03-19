<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
<div class="text-center py-16">
    <div class="flex justify-center">
        <x-logo width="120" height="120" />
    </div>
    <h1 class="mt-6 text-4xl font-bold text-gray-800">Welcome to NoteKeeper</h1>
    <p class="mt-4 text-xl text-gray-600">Your simple and elegant note-taking application</p>
    <div class="mt-8">
        <a href="{{ route('notes.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-3 rounded-lg text-lg font-medium">
            Get Started
        </a>
    </div>
</div>
@endsection
