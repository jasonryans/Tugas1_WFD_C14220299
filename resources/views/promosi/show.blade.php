@extends('promosi.app')
@section('title', 'Detail Promosi')
@section('content')
<div class="mt-4 bg-white p-4 rounded shadow">
    <h2 class="text-xl font-bold">{{ $promo->title }}</h2>
    <p>{{ $promo->description }}</p>
    <img src="{{ asset($promo->image) }}" alt="{{ $promo->title }}" class="mt-2 w-32 h-32 object-cover">
    <a href="{{ route('promosi.edit', $promo->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded mt-4 inline-block">Edit</a>
</div>
@endsection