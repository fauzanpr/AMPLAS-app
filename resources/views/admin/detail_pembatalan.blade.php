@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pembatalan">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card mb-5" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Pembatalan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Job : </b></span>
                        <span>2</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Tukang : </b></span>
                        <span>2</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama Tukang : </b></span>
                        <span>Ahmad Kurniawan</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Klien : </b></span>
                        <span>3</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama Klien : </b></span>
                        <span>Daffa Aqila</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Alasan Pembatalan : </b></span>
                        <span>Tukang tidak merespon dalam waktu yang lama</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection