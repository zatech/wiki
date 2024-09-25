@extends('_layouts.main')

@section('body')
    <p>
        <a href="/">🏠 Home</a>
    </p>

    @if ($page->title)
        <h1>{{ $page->title }}</h1>
    @endif

    @yield('content')
@endsection
