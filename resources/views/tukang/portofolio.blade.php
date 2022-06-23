@extends('layouts.tukangLayout')
@section('container')
<thead>
    <tr class="bg-primary text-white">
        <th>Nama Portofolio</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>Sertifikat dari Samsung Tech Institute</td>
        <td class="col-sm-3">
            <a href="{{ route('tukang.detail_portofolio') }}" class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
    <tr>
        <td>Sertifikasi PT Jasa Pemeriksaan Kelistrikan Indonesia</td>
        <td class="col-sm-3">
            <a href="{{ route('tukang.detail_portofolio') }}" class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
</tbody>
@endsection