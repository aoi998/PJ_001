@extends('layouts.app')

@section('title', '新規投稿')

@section('content')
<div class="container mx-auto">
    <h1 class="text-lg font-bold ml-3 mb-3">新規投稿</h1>

    <div class="ms-3">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-3">
                <label for="title" class="text-base">タイトル</label>
                <input type="text" id="title" name="title" class="rounded-md">
            </div>
            <div class="flex flex-col mb-3">
                <label for="body" class="text-base">本文</label>
                <textarea id="body" name="body" class="rounded-md"></textarea>
            </div>
            <div class="flex justify-center gap-3 mb-3">
                <button type="button" onclick="location.href='/posts'" class="bg-gray-300 rounded-md px-3 py-1">戻る</button>
                <button type="submit" class="bg-blue-300 rounded-md px-3 py-1">投稿</button>
            </div>
        </form>
    </div>
</div>
@endsection