@extends('layouts.app')

@section('title', 'Add New Student')

@section('content')
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <label>Student Number</label>
    <input type="text" name="studentNumber" required>

    <label>Last Name</label>
    <input type="text" name="lname" required>

    <label>First Name</label>
    <input type="text" name="fname" required>

    <label>Middle Initial</label>
    <input type="text" name="mi">

    <label>Email</label>
    <input type="email" name="email">

    <label>Contact Number</label>
    <input type="text" name="contactNumber">

    <button type="submit">Save</button>
    <a href="{{ route('students.index') }}">Cancel</a>
</form>
@endsection
