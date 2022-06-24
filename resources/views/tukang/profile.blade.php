@extends('layouts.tukangLayout')
@section('container')
<div class="row" style="width: 80%">
    <div style="width: 80%">
        <div>
            <img style="margin-left: 55%;" class="rounded" width="300px" src="{{ asset('assets/faces/face19.jpg') }}" alt="">
        </div>
        <table class="table border-bottom">
            <tr>
                <th>Nama</th>
                <td>Angga Syahputra</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>11/11/2001</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>Laki-Laki</td>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <td>SLTA</td>
            </tr>
            <tr>
                <th>Desa</th>
                <td>Kesambi</td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <td>Bandung</td>
            </tr>
            <tr>
                <th>Kabupaten</th>
                <td>Tulungagung</td>
            </tr>
            <tr>
                <th>Provinsi</th>
                <td>Jawa Timur</td>
            </tr>
            <tr>
                <th>Nomor Telepon</th>
                <td>+62345678901</td>
            </tr>
        </table>
    </div>
    <div align="center">
        <div class="mt-4 mb-5" >
            <a href="{{ route('tukang.edit_profil') }}">
                <button class="btn btn-primary text-white" style="width:200px;">
                    Edit profil
                </button>
            </a>
        </div>
    </div>
</div>
@endsection