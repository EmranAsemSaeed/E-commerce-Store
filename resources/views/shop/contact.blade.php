@extends('layouts.master')

@section('title', 'Contact')

@section('content')
<h1>Contact Us</h1>
<form action="#" method="post">
    @csrf
    <label for="name">Name</label>
    <input id="name" name="name" />
    <label for="email">Email</label>
    <input id="email" name="email" />
    <label for="message">Message</label>
    <textarea id="message" name="message"></textarea>
    <button type="submit">Send</button>
</form>
@endsection
