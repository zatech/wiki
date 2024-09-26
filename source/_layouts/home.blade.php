@extends('_layouts.main')

@section('body')
    @if ($page->siteName)
        <h1>{{ $page->siteName }}</h1>
    @endif

    @yield('content')
@endsection
