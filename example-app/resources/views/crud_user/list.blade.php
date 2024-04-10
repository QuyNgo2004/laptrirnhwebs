
@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table style=" border-collapse: collapse;">
                    
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Action</td>
                        </tr>
                    
                        @foreach($users as $user)
                            <tr>
                                <th>{{ $user->id }}</th>
                                <th>{{ $user->name }}</th>
                                <th>{{ $user->email }}</th>
                                <th>
                                   <button type="button"> <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> </button>
                                    <button type="button"><a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> </button>
                                    <button type="button"><a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a></button>
                                </th>
                            </tr>
                        @endforeach
                    
                </table>
            </div>
        </div>
    </main>
@endsection
