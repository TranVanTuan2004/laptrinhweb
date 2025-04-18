@extends('dashboard')

@section('content')
    <main class="login-form">
        <style>
            .custom-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
                font-family: Arial, sans-serif;
                background-color: #fff;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            }

            .custom-table thead {
                background-color: #f0f0f0;
            }

            .custom-table th,
            .custom-table td {
                border: 1px solid #ddd;
                padding: 12px 16px;
                text-align: left;
            }

            .custom-table tbody tr:hover {
                background-color: #f9f9f9;
            }

            .section-title {
                margin-top: 40px;
                margin-bottom: 10px;
                font-size: 20px;
                font-weight: bold;
                font-family: Arial, sans-serif;
                color: #333;
            }

            .container {
                padding: 20px;
            }

            .row {
                margin: auto;
                max-width: 900px;
            }
        </style>

        <div class="container">
            <div class="row">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="container">
        <h3 class="section-title">List of Users</h3>
        <div class="row">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($role->users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
