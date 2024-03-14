<!-- Link do arquivo de layuots -->
@extends('layouts.main')
<!-- Title page -->
@section('title', 'Produtos')
<!-- Footer -->
@section('content')

<h1>Produtos</h1>
<!-- Parameter -->
@if($id != null)
<p>Exibindo a ID do produto: {{ $id }}</p>
@endif
@endsection'