@extends('layouts.klienLayout')
@section('container')
<div class="row" style="width: 80%">
    <div style="width: 80%">
        <div>
            <img style="margin-left: 55%;" class="rounded" width="300px" src="{{ asset('assets/faces/face23.jpg') }}" alt="">
        </div>
        <table class="table border-bottom">
            <tr>
                <th>NIK</th>
                <td>3504160809110001</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>Atmayanti</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>06/11/2001</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>Perempuan</td>
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
            <a href="{{ route('klien.edit_profil') }}">
                <button class="btn btn-primary text-white" style="width:200px;">
                    Edit profil
                </button>
            </a>
        </div>
    </div>
</div>
@endsection