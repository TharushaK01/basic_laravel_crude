@extends('layouts.default')

@section('header')
<h2>This is my header!</h2>
@include('sidemenu')
@endsection

@section('maincontent')
    <h1>home</h1>

    <form action="{{route('formsubmited')}}" method="post">
        @csrf
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name" required>
        <br><br>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
@endsection

@section('footer')
        <h2>This is my footer!</h2>
@endsection