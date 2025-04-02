@extends('promosi.app')
@section('title', 'Tambah Promosi')
@section('content')
<form action="{{ route('promosi.store') }}" method="POST" class="mt-4 bg-white p-4 rounded shadow">
    @csrf
    <p>Mode: {{ $mode }}</p> {{-- Display the mode --}}
    <label class="block">Title:</label>
    <input type="text" name="title" class="border p-2 w-full">
    <label class="block mt-2">Description:</label>
    <textarea name="description" class="border p-2 w-full"></textarea>
    <button type="submit" class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection