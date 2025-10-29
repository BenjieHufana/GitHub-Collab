@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<form action="{{ route('students.update', $student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Student Number</label>
    <input type="text" name="studentNumber" value="{{ $student->studentNumber }}" required>

    <label>Last Name</label>
    <input type="text" name="lname" value="{{ $student->lname }}" required>

    <label>First Name</label>
    <input type="text" name="fname" value="{{ $student->fname }}" required>

    <label>Middle Initial</label>
    <input type="text" name="mi" value="{{ $student->mi }}">

    <label>Email</label>
    <input type="email" name="email" value="{{ $student->email }}">

    <label>Contact Number</label>
    <input type="text" name="contactNumber" value="{{ $student->contactNumber }}">

    <button type="submit">Update</button>
    <a href="{{ route('students.index') }}">Cancel</a>
</form>
@endsection
