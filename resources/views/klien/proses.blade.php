@extends('layouts.klienLayout')
@section('container')
<div class="d-flex">
    <div class="col-6">
        <img src="../../assets/img/logo-amplas.png" alt="gambar">
    </div>
    <div class="col-6">
        <table class="table table-striped">
            <tr>
                <td class="col-6">Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-6">Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-6">Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-6">Data</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-6">Data</td>
                <td>Data</td>
            </tr>
        </table>
    </div>
</div>
<div>
    <div class="progress" style="height:15px; margin:14px 0;">
        <div class="progress-bar bg-success progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 60%">
            <span class="sr-only">80% Complete (danger)</span>
        </div>
    </div>
</div>
<div>
    <a href="#" onClick="confirm_modal_tolak('');" class="btn btn-danger col-md-3" style="right:10px; left:9px;" role="button">X</a>
    <a href="#" onClick="confirm_modal_terima('');" class="btn btn-primary col-md-3" style=" right:10px; left:9px;" role="button">X</a>
</div>
@endsection