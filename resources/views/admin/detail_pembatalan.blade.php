@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pembatalan">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Pembatalan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Job : </b></span>
                        <span>{{ $cancel->id }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama : </b></span>
                        <span>{{ $cancel->job_name }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Tanggal Mulai : </b></span>
                        <span>{{ $cancel->start_date }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Tanggal Selesai : </b></span>
                        <span>{{ $cancel->finish_date }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama Pengguna : </b></span>
                        <span>{{ $client->name }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama Tukang : </b></span>
                        <span>{{ $tukang->name }}</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Status : </b></span>
                        <span>
                            @if($cancel->status == 1)
                            Diproses
                            @elseif($cancel->status == 2)
                            Pembatalan Diterima
                            @else
                            Pembatalan Ditolak
                            @endif
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection