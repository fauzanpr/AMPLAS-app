@extends('layouts.tukangLayout')
@section('container')
<thead>
    <tr class="bg-primary text-white">
        <th>Nama Pekerjaan</th>
        <th>Tanggal Mulai</th>
        <th>Tanggal Selesai</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>AC tidak hidup</td>
        <td>17/06/2022</td>
        <td>19/06/2022</td>
        <td class="col-sm-3">
            <a href="{{ route('tukang.detail_job') }}" class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
    <tr>
        <td>Kulkas tidak dingin</td>
        <td>10/06/2022</td>
        <td>12/06/2022</td>
        <td class="col-sm-3">
            <a href="{{ route('tukang.detail_job') }}" class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
    <tr>
        <td>Kipas angin tidak bisa berputar</td>
        <td>07/06/2022</td>
        <td>09/06/2022</td>
        <td class="col-sm-3">
            <a href="{{ route('tukang.detail_job') }}" class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
</tbody>
@endsection