@extends('layouts.app')

@section('title', '| Dashboard')

@section('content')
    @include('components.navbar')
    <a href="{{ route('logout') }}" class="position-absolute top-0 end-0 link-secondary p-3">
        <i class="bi bi-box-arrow-right fs-3"></i>
    </a>
    <div class="min-vh-100 d-flex flex-column justify-content-center align-items-center" style="margin-top: 100px">
        @include('components.post-card')
        @include('components.post-card')
        @include('components.post-card')
        @include('components.post-card')
    </div>
@endsection
