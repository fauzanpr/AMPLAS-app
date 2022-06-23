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
        <th>ID Portofolio</th>
        <th>ID User</th>
        <th class="col-4">Nama Portofolio</th>
        <th>Aksi</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>6</td>
        <td align="left">Pusat Servis LG</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>1</td>
        <td align="left">Sertifikat dari Samsung Tech Institute</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>4</td>
        <td align="left">Pelatihan dan Sertifikasi Pekerja Kontruksi Semen Gresik</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>3</td>
        <td align="left">Sertifikasi PT PLN (PERSERO)</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>1</td>
        <td align="left">Sertifikasi PT Jasa Pemeriksaan Kelistrikan Indonesia</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>5</td>
        <td align="left">Sertifikasi PT Pembangunan Perumahan</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>7</td>
        <td>2</td>
        <td align="left">Pelatihan dan Sertifikasi Pekerja Kontruksi Semen Gresik</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>8</td>
        <td>1</td>
        <td align="left">Sertifikasi PT Jasa Pemeriksaan Kelistrikan Indonesia</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>9</td>
        <td>2</td>
        <td align="left">Sertifikasi PT Pembangunan Perumahan</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
    <tr>
        <td>10</td>
        <td>6</td>
        <td align="left">Sertifikat dari Samsung Tech Institute</td>
        <td>
            <a class="btn btn-warning col-md-3" href="/admin/portofolio/detail_portofolio" role="button">Detail</a>
            <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" role="button">Tolak</a>
            <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" role="button">Terima</a>
        </td>
    </tr>
</tbody>

<!-- Modal Popup untuk tolak-->
<div class="modal fade" id="modal_tolak">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">
            <div class="modal-header">
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan menolak portofolio?</h5>
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
                <h5 class="modal-title" style="text-align:center;">Anda yakin akan menerima portofolio?</h5>
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
    function confirm_modal_tolak(tolak_url)
    {
        $('#modal_tolak').modal('show', {backdrop: 'static'});
        document.getElementById('tolak_link').setAttribute('href' , tolak_url);
    }
    function confirm_modal_terima(terima_url)
    {
        $('#modal_terima').modal('show', {backdrop: 'static'});
        document.getElementById('terima_link').setAttribute('href' , terima_url);
    }
</script>
@endsection