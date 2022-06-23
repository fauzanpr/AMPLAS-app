@extends('layouts.tukangLayout')
@section('container')
<a class="btn btn-success" href="{{ route('tukang.portofolio') }}">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 70%;">
            <div class="card-header bg-primary text-white">
                Detail Portofolio
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>ID Portofolio : </b></span>
                        <span>1</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Nama Portofolio : </b></span>
                        <span>Sertifikat dari Samsung Tech Institute</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Deskripsi : </b></span>
                        <span>Sertifikat dari Samsung Tech Institute</h4>
                        <p class="card-text">Sertifikat yang dikeluarkan oleh PT SEIN (Samsung Electronics Indonesia)
                            pada tahun 2021 sebagai bukti telah menyelesaikan pelatihan sebagai teknisi elektronika selama 720 jam.
                            Sertifikat ini dikeluarkan setelah peserta mengikuti UJK (Uji Kompetensi Keahlian).</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Bukti Sertifikat : </b></span><br>
                        <span><img src="https://asset.kompas.com/crops/E4h8wRAXDWxM9ON62V7S02HtQJU=/113x68:857x564/750x500/data/photo/2021/11/17/6194723c42a54.jpg" alt=""></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.tukangLayout')
@section('container')
<a class="btn btn-success" href="{{ route('tukang.order_selesai') }}">Kembali</a>
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
                        <span>AC Tidak Hidup</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Kerusakan : </b></span>
                        <span>AC tidak bisa menyala meskipun sudah terhubung ke saluran listrik</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Deskripsi : </b></span>
                        <span>AC saya tiba-tiba mati setelah dinyalakan semalaman. Usia pemakaian AC saya sudah cukup
                            lama yaitu 2,5 tahun. Saya minta dicek apakah memungkinakn untuk diperbaiki?</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Tanggal Mulai : </b></span>
                        <span>17/06/2022</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Tanggal Selesai : </b></span>
                        <span>19/06/2022</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection