@extends('layouts.main')

@section('title', 'Products Bananas')

@section('content')
    @if ($id != null)
        <p>Exibindo produto id: {{ $id }}</p>
    @endif
    @if ($busca != null)
        <p>Usuário buscou por: {{ $busca }}</p>
    @endif
@endsection
