@extends('shared.layout')

@section('content')
    <div class="admin-unban-page d-flex flex-column">
        @include('shared.navbar-admin')

        <div class="admin-unban-container flex-grow-1 d-flex align-items-center mt-3 flex-column">
            <h2 class="w-75">User List</h2>
            <table class="w-75 mt-4">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td class="d-flex justify-content-center align-items-center">
                                <a href="{{route('unban', $user)}}" class="text-decoration-none">
                                    <div class="admin-action-btn d-flex justify-content-center align-items-center">Unban</div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-end mt-4 w-75">{{ $users->links() }}</div>
        </div>
        
    </div>
@endsection