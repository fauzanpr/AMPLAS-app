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
        <th>Pembayaran</th>
        <th>Detail</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>data</td>
        <td>
            <a class="btn btn-warning col-md-4" href="/admin/pembayaran/detail_pembayaran" role="button">Detail</a>
        </td>
        <td class="col-sm-3">
            <a href="#" onClick="confirm_modal_kirim('');" class="btn btn-success col-md-4" role="button">Kirim</a>
        </td>
    </tr>
</tbody>

<!-- Modal Popup untuk Kirim-->
<div class="modal fade" id="modal_kirim">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan mengirim pembayaran?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success btn-sm" id="kirim_link">OK</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript untuk popup modal OK-->
<script type="text/javascript">
    function confirm_modal_kirim(kirim_url)
    {
        $('#modal_kirim').modal('show', {backdrop: 'static'});
        document.getElementById('kirim_link').setAttribute('href' , kirim_url);
    }
</script>
@endsection