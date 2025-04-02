@extends('promosi.app')
@section('title', 'List Promosi')
@section('content')
<div class="mt-4">
    <ul class="mt-4">
        @foreach($promotions as $promo)
            <li class="bg-white p-4 my-2 shadow rounded">
                <a href="{{ route('promosi.show', $promo->id) }}" class="text-blue-600">{{ $promo->title }}</a>
                <p>{{ $promo->description }}</p>
                {{-- <img src="storage\app\public\adidas.png"> --}}
                <img src="{{ asset($promo->image) }}" alt="{{ $promo->title }}" class="mt-2 w-32 h-32 object-cover">
            </li>
        @endforeach
    </ul>
</div>
@endsection