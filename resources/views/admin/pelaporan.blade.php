@extends('layouts.adminLayout')
@section('container')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-error">
    <p>{{ $message }}</p>
</div>
@endif
<thead>
    <tr class="bg-primary text-white">
        <th>ID User</th>
        <th>Email User</th>
        <th>Total Pelaporan</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
<<<<<<< HEAD
    <tr>
        <td>1</td>
        <td>4</td>
        <td>
            <a class="btn btn-warning col-md-6" href="/admin/pelaporan/detail_pelaporan" role="button">Detail</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>2</td>
        <td>
            <a class="btn btn-warning col-md-6" href="/admin/pelaporan/detail_pelaporan" role="button">Detail</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>2</td>
        <td>
            <a class="btn btn-warning col-md-6" href="/admin/pelaporan/detail_pelaporan" role="button">Detail</a>
        </td>
    </tr>
=======
    @foreach ($reports as $report)
        <tr>
            <td>{{$report[0]->reported_account}}</td>
            <td>{{$report[0]->reportedAccount->email}}</td>
            <td>{{count($report)}}</td>
            <td>
                <a class="btn btn-warning col-md-6" href="{{route('reports.show', $report[0])}}" role="button">Detail</a>
            </td>
        </tr>
        
    @endforeach
>>>>>>> 3763fed8a1371a0e15ab62be84501e18213f608e
</tbody>

<!-- Modal Popup untuk OK-->
<div class="modal fade" id="modal_ok">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan memproses laporan?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success btn-sm" id="ok_link">OK</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript untuk popup modal OK-->
<script type="text/javascript">
    function confirm_modal_ok(ok_url)
    {
        $('#modal_ok').modal('show', {backdrop: 'static'});
        document.getElementById('ok_link').setAttribute('href' , ok_url);
    }
</script>
@endsection