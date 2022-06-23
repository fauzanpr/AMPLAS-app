@extends('layouts.adminLayout')
@section('container')
<a class="btn btn-success" href="/admin/pelaporan">Kembali</a>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Detail Pelaporan
            </div>
            <div class="card-body">
<<<<<<< HEAD
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
=======
                <table class="table table-bordered">
                    <thead>
                        <th>Report Type</th>
                        <th>Jumlah</th>
                    </thead>
                    <tbody>
                        @foreach ($details as $detail)
                            <tr>
                                <td><span>{{ $detail[0]->reportType->report_type_name }}</span></td>
                                <td>{{ count($detail) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
>>>>>>> 3763fed8a1371a0e15ab62be84501e18213f608e
            </div>
        </div>
    </div>
</div>
@endsection