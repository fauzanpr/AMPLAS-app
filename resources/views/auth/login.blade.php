@extends('layouts.auth_main')

@section('content')
<section class="vh-100">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4 mt-2">
                    @if(Session::has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ Session::get('error')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif(Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
                <div class="px-5 ms-xl-4 mt-5">
                    <span class="h1 fw-bold mb-0">Masuk</span>
                </div>

                <div class="px-5 ms-xl-4 mt-2">
                    <p>Belum punya akun? <a href="{{ route('register') }}" class="link-info">Registrasi</a></p>
                </div>
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 26rem;" action="{{ route('login') }}" method="POST">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><br></h3>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Alamat Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" required/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-check d-flex justify-content-start mb-4">
                            <input class="form-check-input" type="checkbox" value="" id="remember" />
                            <label class="form-check-label" for="remember"> Ingat saya</label>
                        </div>

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Masuk</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Lupa password?</a></p>

                    </form>
                </div>
            </div>
            <div class="col-sm-6 d-none d-flex align-items-center">
                <img src="{{ asset('assets/img/auth/man-sitting-on-pipe.jpg') }}"
                    alt="Login image" class="w-80 vh-60 " style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
@endsection