@extends('promosi.app')
@section('title', 'Edit Promosi')
@section('content')
<div id="alerts" class="duration-1000 opacity-100 fixed bottom-5 right-5 z-50">
    @if(session()->has('success'))
        <div class="bg-green-600 text-white p-3 rounded-lg">
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="bg-red-600 text-white p-3 rounded-lg mt-3">
                {{ $error }}
            </div>
        @endforeach
    @endif
</div>
<form action="{{ route('promosi.update', $promo->id) }}" method="POST" enctype="multipart/form-data" class="mt-4 bg-white p-4 rounded shadow">
    @csrf
    @method('POST')
    <label class="block">Title:</label>
    <input type="text" name="title" value="{{ $promo->title }}" class="border p-2 w-full">
    <label class="block mt-2">Description:</label>
    <textarea name="description" class="border p-2 w-full">{{ $promo->description }}</textarea>
    <div class="col-span-full">
        <label for="poster_image" class="block text-sm/6 font-medium text-gray-900">Image</label>
        <div class="mt-2">
            <div
                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input type="file" name="image" id="image"
                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                    placeholder="Image">
            </div>
        </div>
        @error('poster_image')
            <div class="text-red-700">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-4 text-center">
        <a href="{{ route('promosi.index')}}"></a>
        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded inline-block">Update</button>
    </div>

</form>
@endsection
  