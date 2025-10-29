@extends('layouts.app')

@section('title', 'Students List')

@section('content')
<a href="{{ route('students.create') }}">+ Add Student</a>
<table>
    <thead>
        <tr>
            <th>Student No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->studentNumber }}</td>
            <td>{{ $student->lname }}, {{ $student->fname }} {{ $student->mi }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->contactNumber }}</td>
            <td class="actions">
                <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this student?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
