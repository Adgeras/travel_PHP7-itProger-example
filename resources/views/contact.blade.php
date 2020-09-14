@extends('layouts.app')
@section('title-block')
Puslapis Contact
@endsection
@section('content')
<h1>Puslapis Contact</h1>

<form action="{{ route('contact-form')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Iveskite varda</label>
        <input type="text" name="name" placeholder="Iveskite varda" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Iveskite email</label>
        <input type="text" name="email" placeholder="Iveskite emailą" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Pranešimo tema</label>
        <input type="text" name="subject" placeholder="Pranešimo tema" id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">Pranešimas</label>
        <textarea name="message" id="message" class="form-control" placeholder="Iveskite žinutę"></textarea>
    </div>
    <button type="submit" name="button" class="btn btn-success">Išsaugoti</button>
</form>
@endsection