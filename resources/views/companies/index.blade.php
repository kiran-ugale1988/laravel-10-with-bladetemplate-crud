@extends('layout')

@section('content')
    <h2>Company List</h2>

    <form action="{{ route('companies.index') }}" method="GET">
        <input type="text" name="search" value="{{ $search }}" placeholder="Search companies...">
        <button type="submit">Search</button>
    </form>

    {{-- <a href="{{ route('companies.create') }}">Add Company</a> --}}

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Name</th>
                {{-- <th>Location</th> --}}
                {{-- <th>Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    {{-- <td>{{ $company->location }}</td> --}}
                    <td>
                        {{-- <a href="{{ route('companies.edit', $company->id) }}">Edit</a> --}}
                        {{-- <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
