@extends('layouts.tukangLayout')
@section('container')
<a class="btn btn-success" href="{{ route('tukang.order_proses') }}">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card mb-5" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Pekerjaan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Nama Pekerjaan:</b></span>
                        <span>Kulkas Tidak Hidup</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Kerusakan : </b></span>
                        <span>Kulkas tidak bisa menyala meskipun sudah terhubung ke saluran listrik</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Deskripsi : </b></span>
                        <span>Kulkas saya tiba-tiba mati setelah dinyalakan semalaman. Usia pemakaian Kulkas saya sudah cukup lama yaitu 2,5 tahun. Saya minta dicek apakah memungkinakn untuk diperbaiki?</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection