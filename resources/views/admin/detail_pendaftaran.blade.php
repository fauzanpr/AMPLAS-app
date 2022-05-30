@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pendaftaran">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header bg-primary text-white">
                Detail Pendaftaran
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>NIK: </b>222222222</li>
                    <li class="list-group-item"><b>Nama: </b>Budi K</li>
                    <li class="list-group-item"><b>Tanggal Lahir: </b>20 Juni 2022</li>
                    <li class="list-group-item"><b>Jenis Kelamin: </b>Laki-laki</li>
                    <li class="list-group-item"><b>Pendidikan Terakhir: </b>SMA</li>
                    <li class="list-group-item"><b>Desa/kelurahan: </b>Bandung</li>
                    <li class="list-group-item"><b>Kecamatan: </b>Bandung</li>
                    <li class="list-group-item"><b>Kabupaten: </b>Tulungagung</li>
                    <li class="list-group-item"><b>Provinsi: </b>Jawa Timur</li>
                    <li class="list-group-item"><b>Nomor Telepon: </b>0888888888888</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection