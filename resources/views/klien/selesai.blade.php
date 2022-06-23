@extends('layouts.klienLayout')
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
        <td>data</td>
        <td>data</td>
        <td>data</td>
        <td class="col-sm-3">
            <a href="#"  class="btn btn-success col-md-4" role="button">Detail</a>
        </td>
    </tr>
</tbody>

<!-- Modal Popup untuk tolak-->
<div class="modal fade" id="modal_tolak">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan menolak pembatalan?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success btn-sm" id="tolak_link">OK</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Popup untuk terima-->
<div class="modal fade" id="modal_terima">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan menerima pembatalan?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-success btn-sm" id="terima_link">OK</a>
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript untuk popup modal OK-->
<script type="text/javascript">
    function confirm_modal_tolak(tolak_url) {
        $('#modal_tolak').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('tolak_link').setAttribute('href', tolak_url);
    }

    function confirm_modal_terima(terima_url) {
        $('#modal_terima').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('terima_link').setAttribute('href', terima_url);
    }
</script>
@endsection