@extends('layout/main')

@section('title', 'Students - Laravel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Data of Students</h3>

            <ul class="list-group">
                @foreach( $students as $student )
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->name }}
                    <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</div>

@endsection