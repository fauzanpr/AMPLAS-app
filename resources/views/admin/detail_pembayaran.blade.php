@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pembayaran">Kembali</a>
<div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header bg-primary text-white">
                    Detail Pembayaran
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Kode Pembayaran: </b>PP009999</li>
                        <li class="list-group-item"><b>ID klien: </b>KK009999</li>
                        <li class="list-group-item"><b>Jenis Pekerjaan: </b>Kuli Gergaji Batu</li>
                        <li class="list-group-item"><b>Nominal Pembayaran: </b>Rp 900.000</li>
                        <li class="list-group-item"><b>Bukti Pembayaran: </b><br><img width="300px"
                                src="https://asset.kompas.com/crops/SV5q4gPkeD8YJTuzO31BqTr9DEI=/192x128:1728x1152/750x500/data/photo/2021/03/06/60436a28b258b.jpg" alt="" srcset=""></li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
@endsection