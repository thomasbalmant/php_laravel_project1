@extends('layouts.main')

@section('title', 'Products Bananas')

@section('content')
    @if ($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @else
     <p>Não há produtos a serem exibidos.</p>
    @endif
@endsection
