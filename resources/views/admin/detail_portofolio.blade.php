@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/portofolio">Kembali</a>
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
                        <span style="width: 50px;"><b>ID User : </b></span>
                        <span>6</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Nama Portofolio : </b></span>
                        <span>Pusat Servis LG</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Deskripsi : </b></span>
                        <span>Merupakan sertifikat yang didapatkan setelah bekerja di LG service center selama lebih dari 2 tahun dan dapat mempertahankan pelayanan yang baik</span>
                    </li>
                    <li class="list-group-item">
                        <span style="width: 50px;"><b>Bukti Sertifikat : </b></span><br>
                        <span><img src="https://1.bp.blogspot.com/-T7zX-I9lAcE/W2xiTk-SVKI/AAAAAAAADZo/l7QPtvrH5oQ-XNmAmIR-B-f_ukYX9iyogCLcBGAs/s640/index5__1533829683_112.215.242.113.jpg" alt=""></span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection