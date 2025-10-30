@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<div class="container mx-3">
    <div class="flex justify-between mx-3 mb-3">
        <h1 class="text-lg">投稿一覧</h1>
        <button type="button" onclick="location.href='/posts/create'" class="bg-blue-400 rounded-md px-3 py-1">新規投稿</button>
    </div>

    <div class="divide-y divide-black mx-3">
        @foreach ($posts as $post)
        <div class="gap-2 p-1">
            <h2>タイトル<br>{{ $post->title }}</h2>
            <p>投稿内容<br>{{ $post->body }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection