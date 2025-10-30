@extends('layouts.app')

@section('title', '投稿編集')

@section('content')
<div class="grid grid-cols-1 gap-4 my-4 mx-3">
    <h1 class="font-bold">投稿編集</h1>

    <div class="ms-3">
        <form action="{{ route('post.update', ['post' => $post]) }}" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{ $post->id }}">
            <div class="flex flex-col mb-3">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">タイトル</label>
                <input type="text" id="title" name="title" value="{{ $post->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex flex-col mb-3">
                <label for="body" class="block text-gray-700 text-sm font-bold mb-2">本文</label>
                <textarea id="body" name="body" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outlin">{{ $post->body }}</textarea>
            </div>
            <div class="flex justify-center gap-3 mb-3">
                <button type="button" onclick="history.back()" class="bg-gray-500 text-white rounded-md px-4 py-2">戻る</button>
                <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">更新</button>
            </div>
        </form>
    </div>
</div>
@endsection