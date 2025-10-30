@extends('layouts.app')

@section('title', '投稿詳細')

@section('content')
<div class="grid grid-cols-1 gap-4 my-4 mx-3">
    <h1 class="font-bold">投稿詳細</h1>

    <div class="overflow-hidden shadow-lg rounded-md h-90 w-60 mx-auto">
        <img alt="Blog photo" src="https://picsum.photos/200" class="max-h-40 w-full object-cover">
        <div class="full p-4">
            <p class="text-gray-800 text-xl font-medium mb-2">{{ $post->title }}</p>
            <p class="text-gray-600 font-light text-md">{{ $post->body }}</p>
        </div>
    </div>

    <div class="flex justify-center gap-6 mx-auto">
        <button type="button" class="bg-gray-500 text-white rounded-md px-4 py-2">削除</button>
        <button type="button" class="bg-green-500 text-white rounded-md px-4 py-2">編集</button>
    </div>
</div>
@endsection