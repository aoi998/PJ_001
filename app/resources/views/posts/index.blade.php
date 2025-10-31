@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<div class="grid grid-cols-1 gap-4 pt-3 pb-3 mx-3">
    <div class="flex justify-between items-center mx-3">
        <h1 class="text-lg font-bold text-gray-800 dark:text-gray-200">投稿一覧</h1>
        <button type="button" onclick="location.href='/post/create'" class="bg-blue-500 dark:bg-gray-200 dark:text-gray-800 text-white rounded-md px-4 py-2">新規投稿</button>
    </div>

    @foreach ($posts as $post)
    <div class="overflow-hidden shadow-lg rounded-md h-90 w-60 mx-auto bg-gray-300 dark:bg-gray-800">
        <a href="{{ route('post.show', ['post' => $post]) }}" class="block h-full w-full">
            <img alt="blog photo" src="https://picsum.photos/200" class="max-h-40 w-full object-cover" />
            <div class="w-full p-4">
                <p class="text-gray-800 dark:text-gray-200 text-xl font-medium mb-2">{{ $post->title }}</p>
                <p class="text-gray-600 dark:text-gray-400 font-light text-md">{{ $post->body }}</p>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection