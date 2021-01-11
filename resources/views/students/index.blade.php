@extends('layout/main')

@section('title', 'Students - Laravel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Data of Students</h3>

            <a href="/students/create" class="btn btn-primary btn-sm mb-2">Add Data</a>

            @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

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