@extends('layout/main')

@section('title', 'About - Laravel')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="mt-3">Hello, my name is {{ $name }}. </p>
        </div>
    </div>
</div>
@endsection