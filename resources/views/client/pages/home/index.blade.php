@extends('client.layouts.app')

@section('title', 'MyStories - Trang chủ')

@section('content')
    <div class="px-4 md:px-6 xl:px-10 flex  gap-8 my-8">
        @include('client.pages.home.sidebar')
        @include('client.pages.home.content')
        @include('client.pages.home.rightbar')
    </div>
@endsection
