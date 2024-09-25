@extends('_layouts.main')

@section('body')
    <p>
        <a href="{{ $page->back ?? '/' }}">⬅️ Back</a>
    </p>

    @if ($page->title)
        <h1>{{ $page->title }}</h1>
    @endif

    @yield('content')
@endsection
