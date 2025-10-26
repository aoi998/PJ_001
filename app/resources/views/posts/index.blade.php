@extends('layouts.app')

@section('title', '投稿一覧')

@section('content')
<h1 class="text-lg ml-3 mb-3">投稿一覧</h1>

<div class="divide-y divide-black mx-3">
    @foreach ($posts as $post)
    <div class="gap-2 p-1">
        <h2>タイトル<br>{{ $post->title }}</h2>
        <p>投稿内容<br>{{ $post->body }}</p>
    </div>
    @endforeach
</div>
@endsection