@extends('layouts.registered.layout')

@push('styles')
    @vite(['resources/sass/videos/style.scss'])
@endpush

@section('content')
    <div>This is a videos content page</div>
@endsection

@push('scripts')
    @vite(['resources/sass/videos/style.scss'])
@endpush
