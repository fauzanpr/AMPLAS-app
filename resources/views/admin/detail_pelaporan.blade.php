@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pelaporan">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Pelaporan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Akun Terlapor : </b></span>
                        <span>1</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Jumlah Laporan : </b></span>
                        <span>4</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Jenis Pelaporan : </b></span>
                        <li style=" margin-left: 110px;">Tidak professional</li>
                        <li style=" margin-left: 110px;">Pembayaran tidak sesuai</li>
                        <li style=" margin-left: 110px;">Pelayanan buruk</li>
                        <li style=" margin-left: 110px;">Penipuan</li>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection