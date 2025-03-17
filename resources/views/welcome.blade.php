@extends('layout.app')

{{-- customize layout sections --}}

@section('subtitle', 'Welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

{{-- content body: main page content --}}

@section('content_body')
    <p>Welcome to this beautiful admin panel .</p>
@stop

{{-- push extra css --}}

@push('css')
{{-- add here extra staylesheets --}}
{{-- <link rel="stylesheet" href="css/admin_custom.css"> --}}
@endpush

{{-- push extra scripts --}}

@push('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@endpush
