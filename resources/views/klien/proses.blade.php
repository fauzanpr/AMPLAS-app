@extends('layouts.klienLayout')
@section('container')
<style>
    p {
        color: grey;
    }

    #heading {
        text-transform: uppercase;
        color: green;
        font-weight: normal;
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;

        /*stacking fieldsets above each other*/
        position: relative;
    }

    .form-card {
        text-align: left;
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        color: #2C3E50;
        background-color: #ECEFF1;
        font-size: 16px;
        letter-spacing: 1px;
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid green;
        outline-width: 0;
    }

    /*Next Buttons*/
    #msform .action-button {
        width: 100px;
        background: green;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92;
    }

    /*Previous Buttons*/
    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right;
    }

    /*The background card*/
    .card {
        
        border: none;
        position: relative;
    }

    /*FieldSet headings*/
    .fs-title {
        font-size: 25px;
        color: green;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left;
    }

    .purple-text {
        color: green;
        font-weight: normal;
    }

    /*Step Count*/
    .steps {
        z-index: 2;
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right;
    }

    /*Field names*/
    .fieldlabels {
        z-index: 2;
        color: gray;
        text-align: left;
    }

    /*Icon progressbar*/
    #progressbar {
        z-index: 2;
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        z-index: 2;
        color: green;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400;
    }

    /*Icons in the ProgressBar*/
    #progressbar #account:before {
        font-family: FontAwesome;
        content: "";
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "";
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "";
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "";
    }

    /*Icon ProgressBar before any progress*/
    #progressbar li:before {
        width: 40px;
        height: 40px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 7px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 15px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/
    #progressbar li.active:before,
    #progressbar li.active:after {
        background: green;
    }

    /*Animated Progress Bar*/
    .progress {
        z-index: 2;
        height: 30px;
    }

    .progress-bar {
        z-index: 2;
        background-color: green;
    }

    /*Fit image in bootstrap div*/
    .fit-image {
        width: 100%;
        object-fit: cover;
    }
</style>
<div class="d-flex">
    <div class="col-6">
        <img src="https://img.idxchannel.com/media/500/images/idx/2019/08/14/Televisi.jpg" width="200px" alt="gambar">
    </div>
    <div class="col-4">
        <table class="table border-bottom">
            <tr>
                <h3 class="col-10 font-weight-bold text-dark">Televisi Tidak Hidup</h3>
            </tr>
            <tr>
                <td class="col-3 font-weight-bold text-dark">Tukang</td>
                <td>Angga Syahputra</td>
            </tr>
            <tr>
                <td class="col-3 font-weight-bold text-dark">Kerusakan</td>
                <td>Televisi tidak bisa menyala meskipun sudah ditancapkan ke stop kontak</td>
            </tr>
            <tr>
                <td class="col-3 font-weight-bold text-dark">Deskripsi</td>
                <td>Awalnya TV saya bisa nyala. Tapi setelah hujan badai geluduk yang menyambar, saya rasa TV saya
                    terkena efeknya. Awalnya TV nya ngeblur, lama-lama black screen dan berakhir malah tidak bisa nyala
                    sama sekali.</td>
            </tr>
        </table>
    </div>
</div>
<!-- progressbar -->
<ul id="progressbar" class="mx-5 ml-5 pl-5 mr-5 pr-5">
    <li class="active" id="account"><strong class="ml-4 pl-5">Disetujui</strong></li>
    <li class="active" id="personal"><strong class="ml-5 ">Proses Pengerjaan</strong></li>
    <li class="active" id="payment"><strong class="ml-5 pl-5">Selesai</strong></li>
    <li id="confirm"><strong class="ml-5 pl-4">Pembayaran</strong></li>
</ul>
<div align="right" class="mx-5 mb-5 mt-3 px-2">
    <button class="btn btn-danger col-md-2" style="right:10px; left:9px;" data-toggle="modal"
        data-target="#form1">Batalkan</button>
    <button class="btn btn-primary col-md-2" style=" right:10px; left:9px;" data-toggle="modal"
        data-target="#form2">Selesai</button>
</div>
{{-- Batalkan modal --}}
<div class="modal fade" id="form1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross d-flex">
                <h3 class="text-dark col-11 justify-content-left mt-2" align="left">Batalkan</h3>
                <i class="fa fa-times ml-3 mt-1"></i>
            </div>
            <div class="card-body text-center">
                <div class="comment-box text-center">
                    <form action="">
                        <div class="comment-area">
                            <textarea class="form-control"
                                placeholder="Masukkan alasan anda melakukan pembatalan pekerjaan" rows="4"></textarea>
                        </div>
                        <div class="text-center mt-4 " onclick="alert('Silakan tunggu pengecekan oleh admin')"><button
                                class="btn btn-primary send px-5 font-weight-bold">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Selesai modal --}}
<div class="modal" id="form2" role="dialog" tabindex="-1" aria-hidden="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross d-flex">
                <h3 class="text-dark col-11 justify-content-left mt-2" align="left">Selesai</h3>
                <i class="fa fa-times ml-3 mt-1"></i>
            </div>
            <div class="card-body">
                <div class="comment-box">
                    <form action="">
                        <div class="comment-area">
                            <label for="nom">Pembayaran</label>
                            <input type="number" name="nom" class="form-control mb-2"
                                placeholder="Masukkan nominal yang telah Anda sepakati dengan tukang" rows="1">
                        </div>
                        <div class="comment-area">
                            <p class="mb-2" rows="1">Silakan melakukan transfer ke rekening pihak AMPLAS berikut : </p>
                            <p class="form-control mb-2" rows="1">1234 5678 9012 0987</p>
                        </div>
                        <div class="comment-area">
                            <label for="pay">Upload Bukti Pembayaran</label>
                            <input class="form-control mb-2" type="file" name="pay">
                        </div>
                        <div class="text-center mt-4 " onclick="alert('Silakan tunggu pengecekan oleh admin')"> <button
                                class="btn btn-primary send px-5 font-weight-bold">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection