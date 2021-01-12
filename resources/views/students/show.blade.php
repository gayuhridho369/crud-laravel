@extends('layout/main')

@section('title', 'Student - Laravel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Detail of Student</h3>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> {{ $student->sin }} </h6>
                    <p class="card-text m-0"> <i> {{ $student->email }} </i></p>
                    <p class="card-text m-0"> {{ $student->major }} </p>

                    <a href="/students/{{ $student->id }}/edit" class="btn btn-success btn-sm mr-2 mt-3"> Edit</a>

                    <form href="/students/{{ $student->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm mr-2 mt-3"> Delete</button>
                    </form>

                    <a href="/students" class="card-link float-right mt-4">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection