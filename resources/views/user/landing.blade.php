@extends('layout.user')

{{-- Pembuka head --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Rehub - E-Report Hub')
{{-- Penutup Head --}}

{{-- Pembuka Body --}}
@section('content')

    {{-- Section Header --}}
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">
                        <h4 class="semi-bold mb-0 text-white">REHUB</h4>
                        <p class="italic mt-0 text-white">E-Report Hub</p>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        @if (Auth::guard('masyarakat')->check())
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link ml-auto text-white">
                                    Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link ml-auto text-white" style="text-decoration: underline">
                                    {{ Auth::guard('masyarakat')->user()->nama }}
                                </a>
                            </li>
                        </ul>
                        @else
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item">
                                <button class="btn text-white " type="button" class="btn-warning" data-toggle="modal" data-target="#loginModal">
                                    Login
                                </button>
                            </li>

                            <li class="nav-item">
                                <a href="{{route('ereporthub.formregister')}}" class="btn btn-outline-purple">Register</a>
                            </li>
                        </ul>
                        @endif
                        
                    </div>

                </div>
            </div>
        </nav>

        <div class="text-center">
            <h2 class="medium text-white mt-3">Report Services</h2>
            <p class="italic text-white mb-5">Tell us About Your Report</p>
        </div>

        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>

    </section>

    {{-- Section Card Report --}}
    <div class="row justify-content-center">
        <div class="col-lg-6 col-10 col">
            <div class="content shadow">
                @if ($errors->any())

                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" >{{$error}}</div>
                    @endforeach
                @endif

                @if (Session::has('pengaduan'))
                    <div class="alert alert-{{Session::get('type')}}">{{Session::get('pengaduan')}}</div>
                @endif

                <div class="card mb-3">Create Your Report Here</div>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <textarea name="isi_laporan" placeholder="Write Your Report Here" class="form-control" rows="4">
                            {{ old('isi_laporan') }}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-custom mt-2">Send</button>
                </form>

            </div>
        </div>
    </div>

    <!-- Hitung Pengaduan -->

    <div class="pengaduan mt-5">
        <div class="bg-purple">
            <div class="text-center">
                <h5 class="medium text-white mt-3">Report Total</h5>
                <h2 class="medium text-white">10</h2>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <div class="mt-5">
        <hr>
        <div class="text-center">
            <p class="italic text-secondary"> Copyright &copy; 2024. All rights reserved.</p>
        </div>
    </div>
{{-- Penutup Body --}}

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Login First</h3>
                <p>Please Login With Registered Account</p>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">Login</button>
                </form>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-2" >
                        {{ Session::get('pesan') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


    @section('js')
        @if (Session::has('pesan'))
            <script>
                $('#loginModal').modal('show');
            </script>
        @endif
    @endsection