@extends('promosi.app')
@section('title', 'Edit Promosi')
@section('content')
<form action="{{ route('promosi.update', $promo->id) }}" method="POST" class="mt-4 bg-white p-4 rounded shadow">
    @csrf
    @method('PUT')
    <label class="block">Title:</label>
    <input type="text" name="title" value="{{ $promo->title }}" class="border p-2 w-full">
    <label class="block mt-2">Description:</label>
    <textarea name="description" class="border p-2 w-full">{{ $promo->description }}</textarea>
    <button type="submit" class="mt-4 bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
