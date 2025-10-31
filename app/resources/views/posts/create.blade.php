@extends('layouts.app')

@section('title', '新規投稿')

@section('content')
<div class="grid grid-cols-1 gap-4 py-4 mx-3">
    <h1 class="text-lg font-bold text-gray-800 dark:text-gray-200">新規投稿</h1>

    <div class="ms-3">
        <form action="{{ route('post.store') }}" method="POST">
            @csrf
            <div class="flex flex-col mb-3">
                <label for="title" class="block font-medium text-sm text-gray-700 dark:text-gray-300">タイトル</label>
                <input type="text" id="title" name="title" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
            </div>
            <div class="flex flex-col mb-3">
                <label for="body" class="block font-medium text-sm text-gray-700 dark:text-gray-300">本文</label>
                <textarea id="body" name="body" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"></textarea>
            </div>
            <div class="flex justify-center gap-3 pt-3 mb-3">
                <button type="button" onclick="location.href='/posts'" class="bg-gray-500 dark:bg-gray-200 text-gray-200 dark:text-gray-800 rounded-md px-4 py-2">戻る</button>
                <button type="submit" class="bg-blue-500 text-white rounded-md px-4 py-2">投稿</button>
            </div>
        </form>
    </div>
</div>
@endsection