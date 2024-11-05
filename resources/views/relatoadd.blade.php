@extends('main')
@section('content')


<form action="{{route('relatos.store')}}" method="POST">
    @csrf
    <label for="name">digite o seu relato</label>
    <textarea name="texto" id="" cols="30" rows="10"></textarea>
    <input type="submit">

</form>

@endsection
