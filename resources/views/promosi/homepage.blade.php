@extends('promosi.app')
@section('title', 'List Promosi')
@section('content')
<div class="mt-4">
    <ul class="mt-4">
        @foreach($promotions as $promo)
            <li class="bg-white p-4 my-2 shadow rounded">
                <p class="text-lg text-black-600 font-bold">{{ $promo->title }}</p>
                <a href="{{ route('promosi.show', $promo->id) }}">
                    <button class="bg-yellow-500 text-white px-4 py-2 rounded mt-4 inline-block">Detail</button>
                </a>
            </li>
        @endforeach
    </ul>
</div>
@endsection