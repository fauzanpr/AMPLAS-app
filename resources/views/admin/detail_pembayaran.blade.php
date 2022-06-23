@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pembayaran">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card mb-5" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Pembayaran
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>ID Pekerjaan : </b></span>
                        <span>1</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nama Pekerjaan : </b></span>
                        <span>AC tidak menyala</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Nominal Pembayaran : </b></span>
                        <span>Rp 500.000,-</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px; margin-left: 50px"><b>Bukti Pembayaran : </b></span><br>
                        <span style="margin-left: 50px"><img style="max-width: 200px; max-height: 300px;" src="https://masmedia.xyz/wp-content/uploads/2020/12/Contoh-Bukti-Transfer-BRI-Asli-atau-Palsu.jpg" alt=""></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection