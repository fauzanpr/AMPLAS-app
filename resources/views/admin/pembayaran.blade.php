@extends('layouts.adminLayout')
@section('container')
<thead>
    <tr class="bg-primary text-white">
        <th>Pembayaran</th>
        <th>Detail</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>data</td>
        <td>
            <a class="btn btn-warning col-md-4" href="#" role="button">Detail</a>
        </td>
        <td class="col-sm-3">
            <a class="btn btn-success col-md-4" href="#" role="button">Kirim</a>
        </td>
    </tr>
</tbody>
@endsection