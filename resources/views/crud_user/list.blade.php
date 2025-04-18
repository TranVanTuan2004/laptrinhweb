@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table class="table-auto border-collapse border border-gray-300 w-full">
                    <thead>
                        <tr>
                            <th class="border border-gray-500">ID</th>
                            <th class="border border-gray-500">Name</th>
                            <th class="border border-gray-500">Email</th>
                            <th class="border border-gray-500">Role</th>
                            <th class="border border-gray-500">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th class="border border-gray-500">{{ $user->id }}</th>
                                <th class="border border-gray-500">{{ $user->name }}</th>
                                <th class="border border-gray-500">{{ $user->email }}</th>
                                <th class="border border-gray-500">
                                    @foreach ($user->roles as $role)
                                        <a style="color: black" href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name }}
                                        </a>
                                    @endforeach
                                </th>
                                <th class="border border-gray-500">
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div style="margin-top: 20px; display: flex; justify-content: end;">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </main>
@endsection
