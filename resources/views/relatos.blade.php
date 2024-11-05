@extends('main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @foreach ($relatos as $relato)

                    <h1>{{ $relato->texto }}</h1>
                @endforeach
            </div>
        </div>
    </div>
@endsection
