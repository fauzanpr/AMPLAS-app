@extends('layouts.tukangLayout')
@section('container')
@extends('layouts.tukangLayout')
@section('container')
<thead>
	<tr class="bg-primary text-white">
		<th>Nama Pekerjaan</th>
		<th>Kerusakan</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td>Kulkas tidak hidup</td>
		<td align="left">Kulkas tidak bisa menyala meskipun sudah terhubung ke saluran listrik</td>
		<td class="col-sm-3">
			<a href="{{ route('tukang.detail_job_masuk') }}" class="btn btn-success" role="button">Detail</a>
			<a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger" role="button">Tolak</a>
			<a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary" role="button">Terima</a>
		</td>
	</tr>
	<tr>
		<td>AC tidak hidup</td>
		<td align="left">AC tidak bisa menyala</td>
		<td class="col-sm-3">
			<a href="{{ route('tukang.detail_job_masuk') }}" class="btn btn-success" role="button">Detail</a>
			<a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger" role="button">Tolak</a>
			<a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary" role="button">Terima</a>
		</td>
	</tr>
</tbody>

<!-- Modal Popup untuk tolak-->
<div class="modal fade" id="modal_tolak">
	<div class="modal-dialog">
		<div class="modal-content" style="margin-top:100px;">
			<div class="modal-header">
				<h5 class="modal-title" style="text-align:center;">Anda yakin akan menolak pekerjaan?</h5>
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
				<h5 class="modal-title" style="text-align:center;">Anda yakin akan menerima pekerjaan?</h5>
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