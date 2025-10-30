@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<div class="grid grid-cols-1 gap-4 my-4 mx-3">
    <div class="flex justify-between items-center mx-3 mb-3">
        <h1 class="font-bold">投稿一覧</h1>
        <button type="button" onclick="location.href='/posts/create'" class="bg-blue-500 text-white rounded-md px-4 py-2">新規投稿</button>
    </div>

    @foreach ($posts as $post)
    <div class="overflow-hidden shadow-lg rounded-md h-90 w-60 mx-auto">
        <img alt="blog photo" src="https://picsum.photos/200" class="max-h-40 w-full object-cover" />
        <div class="w-full p-4">
            <p class="text-gray-800 text-xl font-medium mb-2">{{ $post->title }}</p>
            <p class="text-gray-600 font-light text-md">{{ $post->body }}</p>
        </div>
    </div>
    @endforeach
</div>
@endsection