@extends('layouts.klienLayout')
@section('container')
<div class="container-xl px-4 mt-4">
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Foto Profil</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" width="250px" src="{{ asset('assets/faces/face23.jpg') }}" alt="">
                    <!-- Profile picture help block-->
                    <div class="small font-italic text-muted mb-4">JPG or PNG tidak lebih dari 5 MB</div>
                    <!-- Profile picture upload button-->
                    <button class="btn btn-primary" type="button">Unggah foto profil</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Detail Akun</div>
                <div class="card-body">
                    <form href="{{ route('klien.profile') }}">
                        <div class="mb-3">
                            <label class="small mb-1" for="name">NIM</label>
                            <input class="form-control" id="name" type="text" placeholder="Masukkan nomer induk anda">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Nama</label>
                            <input class="form-control" id="name" type="text" placeholder="Masukkan nama anda">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="date_of_birth">Tanggal Lahir</label>
                            <input class="form-control" id="date_of_birth" type="date" placeholder="Masukkan tanggal lahir anda">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="gender">Jenis Kelamin</label>
                            <input class="form-control" id="gender" type="text" placeholder="Masukkan jenis kelamin">
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="last_education">Pendidikan Terakhir</label>
                            <input class="form-control" id="last_education" type="text" placeholder="Masukkan pendidikan terakhir">
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="desa">Desa</label>
                                <input class="form-control" id="desa" type="text" placeholder="Masukkan desa">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="kecamatan">Kecamatan</label>
                                <input class="form-control" id="kecamatan" type="text" placeholder="Masukkan kecamatan">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label class="small mb-1" for="kabupaten">Kabupaten</label>
                                <input class="form-control" id="kabupaten" type="text" placeholder="Masukkan kabupaten">
                            </div>
                            <div class="col-md-6">
                                <label class="small mb-1" for="provinsi">Provinsi</label>
                                <input class="form-control" id="provinsi" type="text" placeholder="Masukkan provinsi">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="small mb-1" for="phone">Pendidikan Nomor Telepon</label>
                            <input class="form-control" id="phone" type="text" placeholder="Masukkan pendidikan nomor telepon">
                        </div>
                        <a href="{{ route('klien.profile') }}">
                            <button class="btn btn-primary" type="button">Simpan</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- link css -->
@endsection