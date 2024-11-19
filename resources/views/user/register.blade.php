@extends('layout.user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

<style>
body {
    background-color: #40acdf;
}

.btn-purple {
    border: 1px solid #080505;
    background: #40acdf;
    color: #fff;
    width: 100%;
}

.btn-purple:hover {
    background: #40acdf;
    width: 100%;
    color: #fff;
    font-weight: 600
}

.btn-warning {
    border: 1px solid #080505;
    background: #d4ce53;
    color: #fff;
    width: 100%;
}


.btn-warning:hover {
    background: #40acdf;
    width: 100%;
    color: #fff;
    font-weight: 600
}

.toggle-password {
            position: absolute;
            top: 66%;
            right: 28px;
            transform: translateY(-50%);
            cursor: pointer;
            font-size: 1.2em;
            color: #888;
}


</style>
@endsection

@section('title', 'Register Page')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">REHUB</h2>
            <p class="text-center text-white mb-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="text-center mb-5">Create Account</h2>
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="number" name="nik" placeholder="NIK" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="nama" placeholder="Full Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="username" placeholder="Email" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password" class="form-control">  
                                <span class="toggel-password" onclick="toggelpassword()"></span>                         
                            </div>

                            <div class="form-group">
                                <input type="number" name="no.telp" placeholder="Telephone" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-purple">Register</button>

                        </form>
                    </div>
                 </div>
                 @if(Session::has('pesan'))
                 <div class="alert alert-danger mt-2">
                    {{Session::get('pesan')}}
                 </div>
                 @endif
             </div>
            <a href="{{route('ereporthub.index')}}" class="btn btn-warning text-white mt-3" style="width: 100%;">Back to Home</a> 
        </div>
    </div>
</div>


<script>
        function togglePassword() {
            const passwordField = document.getElementById("password");
            const toggleIcon = document.querySelector(".toggle-password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
                toggleIcon.textContent = ""; 
            } else {
                passwordField.type = "password";
                toggleIcon.textContent = ""; 
            }
       }
</script>

@endsection