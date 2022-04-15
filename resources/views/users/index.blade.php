@extends('layouts.app')
@section('content')

    <div class="container m-auto">
        <table class="table table-striped text-center">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>

            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>

@endsection

