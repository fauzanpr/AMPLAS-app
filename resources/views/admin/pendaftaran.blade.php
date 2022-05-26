@extends('layouts.adminLayout')
@section('container')
<thead>
    <tr class="bg-primary text-white">
        <th>Pendaftaran</th>
        <th>User</th>
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
            <a class="btn btn-danger col-md-4" href="#" role="button">Tolak</a>
            <a class="btn btn-primary col-md-4" href="#" role="button">Terima</a>
        </td>
    </tr>
</tbody>
@endsection