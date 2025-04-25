@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <style>
                .custom-table {
                    width: 100%;
                    border-collapse: collapse;
                    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                    font-family: Arial, sans-serif;
                }

                .custom-table th,
                .custom-table td {
                    padding: 12px 16px;
                    border: 1px solid #ccc;
                    text-align: left;
                }

                .custom-table thead {
                    background-color: #f5f5f5;
                }

                .custom-table tbody tr:hover {
                    background-color: #f0f8ff;
                }

                .custom-table a {
                    text-decoration: none;
                    margin: 0 4px;
                }

                .action-view {
                    color: green;
                }

                .action-edit {
                    color: orange;
                }

                .action-delete {
                    color: red;
                }

                .pagination-container {
                    margin-top: 20px;
                    display: flex;
                    justify-content: flex-end;
                }
            </style>

            <div class="row justify-content-center">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Orders</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href={{ route('user.getUserOrders', ['id' => $user->id]) }}>{{ $user->orders_count }}</a>
                                </td>

                                <td>
                                    @foreach ($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}" style="color: #000;">
                                            {{ $role->name }}
                                        </a>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="action-view">View</a> |
                                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="action-edit">Edit</a>
                                    |
                                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}"
                                        class="action-delete">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="pagination-container">
                {{ $users->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </main>
@endsection