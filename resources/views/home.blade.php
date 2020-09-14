@extends('layouts.app')
@section('title-block')
Pagrindinis puslapis
@endsection
@section('content')
<h1>Pagrindinis puslapis</h1>
@endsection
@section('aside')
    @parent
    <p>Papildomas tekstas </p>
@endsection