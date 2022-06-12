@extends('layouts.auth_main')

@section('content')
<section class="vh-100">
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-6 text-black">
                <div class="px-5 ms-xl-4 mt-5">
                    <span class="h1 fw-bold mb-0">Registrasi</span>
                </div>
                <div class="px-5 ms-xl-4 mt-2">
                    <p>Sudah punya akun? <a href="{{ route('login') }}" class="link-info">Masuk</a></p>
                </div>
                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                    <form style="width: 26rem;" action="{{ route('register') }}" method="POST">
                        @csrf
                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><br></h3>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Alamat Email</label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" />
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="role">Jenis Akun</label>
                            <select name="role" class="form-select form-select-lg">
                                <option value="2" >Pekerja</option>
                                <option value="3" >Pengguna</option>
                            </select>                            
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" />
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>         
                        
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Konfirmasi Password</label>
                            <input type="password" id="confirm-password" name="password_confirmation" class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror" />
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>   

                        <div class="pt-1 mb-4">
                            <button class="btn btn-info btn-lg btn-block" type="submit">Registrasi</button>
                        </div>                       

                    </form>
                </div>
            </div>
            <div class="col-sm-6 d-none d-flex align-items-center">
                <img src="{{ asset('assets/img/auth/man-sitting-on-wooden-pipes.jpg') }}"
                    alt="Register image" class="w-80 vh-60 " style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>
@endsection