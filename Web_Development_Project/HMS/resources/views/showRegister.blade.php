@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h3 class="text-center">Register List</h3>

        <form method="GET" action="{{ route('searchRegister') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Enter search term" value="{{ request('query') }}">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </form>

        @if($registers->isEmpty())
            <p class="text-center text-muted">No registrations found.</p>
        @else
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Coach</th>
                    <th>Price (RM)</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>

                @foreach($registers as $register)
                <tr>
                    <td>
                        <div class="d-flex justify-content-start">
                            <a href="{{ route('editRegister', ['id' => $register->id]) }}" class="btn btn-warning btn-xs" style="margin-right: 10px;">Edit</a>
                            <a href="{{ route('deleteRegister', ['id' => $register->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Are you sure you want to delete this data?')">Delete</a>
                        </div>
                    </td>
                    <td>{{ $register->id }}</td>
                    <td>{{ $register->name }}</td>
                    <td>{{ $register->email }}</td>
                    <td>{{ $register->phone }}</td>
                    <td>{{ ucfirst(strtolower($register->day_of_week)) }}</td>
                    <td>{{ ucfirst($register->course) }}</td>
                    <td>{{ ucfirst($register->coach) }}</td>
                    <td>{{$register->price }}</td>
                    <td>{{ $register->message ?: '' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="col-sm-2"></div>
</div>
@endsection
