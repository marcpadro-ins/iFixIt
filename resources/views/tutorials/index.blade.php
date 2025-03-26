@extends('layout')

@section('content')
<div class="container my-5">
    <h1 class="mb-4">Tutorials</h1>
    <div class="row">
        @foreach ($guides as $tutorial)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $tutorial->title }}</h5>
                        <p class="card-text flex-grow-1">{{ $tutorial->description }}</p>
                        <a href="{{ route('tutorials.show', $tutorial) }}" class="btn btn-primary mt-3">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection