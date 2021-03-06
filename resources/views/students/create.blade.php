@extends('layout/main')

@section('title', 'Student - Laravel')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h3 class="mt-3">Form Add Data of Student</h3>
            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Input name" name="name" value="{{ old('name') }}">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="sin">Student Id Number</label>
                    <input type="text" class="form-control @error('sin') is-invalid @enderror" id="sin" placeholder="Input student id number" name="sin" value="{{ old('sin') }}">
                    @error('sin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input email" name="email" value="{{ old('email') }}">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="major">Major</label>
                    <input type="text" class="form-control @error('major') is-invalid @enderror" id="major" placeholder="Input major" name="major" value="{{ old('major') }}">
                    @error('major') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save Data</button>

            </form>
        </div>
    </div>
</div>

@endsection