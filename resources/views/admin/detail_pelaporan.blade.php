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
            </div>
        </div>
    </div>
</div>
@endsection