@extends('dashboard')
@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
            <div class="card" style="border: 1px solid black">
                        <h3 class="card-header text-center">Đăng nhập</h3>
                        <div class="card-body">
                        <p>Name: {{$messi->name}}</p>
                        <p>Email: {{$messi->email}} </p>
                        <button type="button"><a href="{{ route('user.updateUser', ['id' => $messi->id ]) }}">Edit</a> </button>
                        </div>
                    </div>
               
            </div>
        </div>
    </main>
    <style>
        button{
            background: blue;
            float: right;
            padding:0px 20px;
            border-radius: 5px;
        }
        a{
            color: #000;
        }
    </style>
@endsection
