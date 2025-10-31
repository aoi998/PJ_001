@extends('layouts.app')

@section('title', '投稿詳細')

@section('content')
<div class="grid grid-cols-1 gap-4 py-4 mx-3">
    <h1 class="text-lg font-bold text-gray-800 dark:text-gray-200">投稿詳細</h1>

    <div class="overflow-hidden shadow-lg rounded-md h-90 w-60 mx-auto bg-gray-300 dark:bg-gray-800">
        <img alt="Blog photo" src="https://picsum.photos/200" class="max-h-40 w-full object-cover">
        <div class="full p-4">
            <p class="text-gray-800 dark:text-gray-200 text-xl font-medium mb-2">{{ $post->title }}</p>
            <p class="text-gray-600 dark:text-gray-400 font-light text-md">{{ $post->body }}</p>
        </div>
    </div>

    @if (auth()->check() && auth()->id === $post->user_id)
    <div class="flex justify-center gap-6 mx-auto">
        <div class="justify-self-center">
            <form action="{{ route('post.edit', ['post' => $post]) }}" method="GET">
                <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">編集</button>
            </form>
        </div>
        <div class="justify-self-center">
            <form action="{{ route('post.destroy', ['post' => $post]) }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white rounded-md px-4 py-2">削除</button>
            </form>
        </div>
    </div>
    @endif
</div>
@endsection