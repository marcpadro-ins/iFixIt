@extends('layout')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="card-title mb-0">{{ $tutorial->title }}</h2>
        </div>
        <div class="card-body">
            <h3 class="mb-4">Passos</h3>
            <ol class="mb-0">
                @foreach ($tutorial->steps as $step)
                    <li class="mb-3">
                        @if (!empty($step['title']))
                            <strong>{{ $step['title'] }}</strong>
                        @endif

                        <ul class="list-unstyled ml-3">
                            @foreach ($step['lines'] as $line)
                                <li>{!! $line['text_rendered'] !!}</li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection