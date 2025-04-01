@extends('layout')

@section('content')
<div class="container">
    <h1>Resultats de cerca: "{{ $query }}"</h1>
    
    <div class="mb-4">
        <form action="{{ route('tutorials.search') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="cerca" placeholder="Cerca guies..." value="{{ $query }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cerca</button>
                </div>
            </div>
        </form>
    </div>

    @if($guides->count() > 0)
        <div class="row">
            @foreach($guides as $guide)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $guide->title }}</h5>
                            <p class="card-text">
                                {{ Str::limit(strip_tags($guide->steps[0]['lines'][0]['text_rendered'] ?? ''), 100) }}
                            </p>
                            <a href="{{ route('tutorials.show', $guide) }}" class="btn btn-primary">Veure guia</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            No s'han trobat resultats per a "{{ $query }}". Prova amb altres paraules clau.
        </div>
    @endif
</div>
@endsection