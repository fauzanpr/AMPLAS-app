@extends('layouts.main_logged_in')
@section('container')
<style>
    .cross {
        padding: 10px;
        color: #087cfc;
        cursor: pointer;
        font-size: 23px;
    }

    .cross i {
        margin-top: -5px;
        cursor: pointer;
    }

    .comment-box {
        padding: 5px
    }

    .comment-area textarea {
        resize: none;
        border: 1px solid ##087cfc
    }

    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #ffffff;
        outline: 0;
        box-shadow: 0 0 0 1px #087cfc !important
    }

    .send {
        color: #fff;
        background-color: #087cfc;
        border-color: #087cfc
    }

    .send:hover {
        color: #fff;
        background-color: #087cfc;
        border-color: #087cfc
    }

    .rating {
        display: inline-flex;
        margin-top: -10px;
        flex-direction: row-reverse;
    }

    .rating>input {
        display: none
    }

    .rating>label {
        position: relative;
        width: 50px;
        font-size: 50px;
        color: #087cfc;
        cursor: pointer;
    }

    .rating>label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }

    .rating>label:hover:before,
    .rating>label:hover~label:before {
        opacity: 1 !important
    }

    .rating>input:checked~label:before {
        opacity: 1
    }

    .rating:hover>input:checked~label:before {
        opacity: 0.4
    }
</style>
<div class="container">
    <div class="d-flex">
        <div class="col-sm-5 mt-3 mr-4">
            <div class="rating-block pb-4">
                <h4 class="font-weight-bold text-dark">Rata-Rata Penilaian Pengguna</h4>
                <h2 class="bold padding-bottom-7">3 <small>/ 5</small></h2>
                <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-primary btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
                <button type="button" class="btn btn-default btn-grey btn-sm" aria-label="Left Align">
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <div class="col-sm-5 px-3 pb-3 pt-3">
            <h4 class="font-weight-bold text-dark">Ringkasan Penilaian</h4>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">5 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="5" style="width: 0%">
                            <span class="sr-only">0% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">4 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="5" style="width: 25%">
                            <span class="sr-only">25% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">3 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="2"
                            aria-valuemin="0" aria-valuemax="5" style="width: 50%">
                            <span class="sr-only">66% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">2</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">2 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2"
                            aria-valuemin="0" aria-valuemax="5" style="width: 25%">
                            <span class="sr-only">25% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">1</div>
            </div>
            <div class="pull-left">
                <div class="pull-left" style="width:35px; line-height:1;">
                    <div style="height:9px; margin:5px 0;">1 <span class="glyphicon glyphicon-star"></span></div>
                </div>
                <div class="pull-left" style="width:180px;">
                    <div class="progress" style="height:9px; margin:8px 0;">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1"
                            aria-valuemin="0" aria-valuemax="5" style="width: 0%">
                            <span class="sr-only">0% Complete (danger)</span>
                        </div>
                    </div>
                </div>
                <div class="pull-right" style="margin-left:10px;">0</div>
            </div>
        </div>
        <div class="mr-5 mt-5">
            <button class="btn btn-primary col-12 mt-5" data-toggle="modal" data-target="#form">Tambah
                Penilaian</button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12">
            <hr />
            <div class="review-block shadow">
                <div class="row">
                    <div class="col-sm-2 mx-4">
                        <img src="{{ asset('assets/faces/face21.jpg') }}" class="img-rounded">
                        <div class="review-block-name"><a href="#">Fauzan Pradana</a></div>
                        <div class="review-block-date">June 22, 2022<br />1 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">Tukang kurang ramah</div>
                        <div class="review-block-description">Tukang bekerja dengan baik namun jika dilihat dari segi keramahan, tukang kurang ramah dan cenderung diam ketika ditanya.
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2 mx-4">
                        <img src="{{ asset('assets/faces/face24.jpg') }}" class="img-rounded">
                        <div class="review-block-name"><a href="#">Taufik Anwar</a></div>
                        <div class="review-block-date">June 21, 2022<br />2 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">Tukang kerjanya jelek</div>
                        <div class="review-block-description">Mesin cuci saya diperbaiki satu minggu yang lalu tapi sekarang sudah rusak lagi. Tukang kerjanya ga baik. Masa udah rusak lagi. Sekarang dichat juga slowrespon. -_-
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2 mx-4">
                        <img src="{{ asset('assets/faces/face25.jpg') }}" class="img-rounded">
                        <div class="review-block-name"><a href="#">Daffa Aqila</a></div>
                        <div class="review-block-date">June 21, 2022<br />2 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">Tukang Kerjanya Rapi</div>
                        <div class="review-block-description">Tukang bekerja dengan baik. Baru diorder sorenya langsung datang. Cepet banget benerin AC nya. Semoga sukses selalu buat pak tukangnya.</div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-2 mx-4">
                        <img src="{{ asset('assets/faces/face23.jpg') }}" class="img-rounded">
                        <div class="review-block-name"><a href="#">Atmayanti</a></div>
                        <div class="review-block-date">June 19, 2022<br />4 day ago</div>
                    </div>
                    <div class="col-sm-9">
                        <div class="review-block-rate">
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-primary btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                            <button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="review-block-title">Tukang lumayan</div>
                        <div class="review-block-description">Yaa dari segi perbaikan menurutku kurang. Soalnya AC ku jadi bunyi klotak-klotak abis diperbaiki. Tapi gapapa lah tukangnya ganteng jadi gapapa ehehe.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  Rating modal  --}}
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="text-right cross d-flex">
                <h3 class="text-dark col-11 justify-content-left" align="left">Rating Form</h3>
                <i class="fa fa-times ml-3 mt-1"></i>
            </div>
            <div class="card-body text-center">
                <div class="comment-box text-center">
                    <form action="">
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">???</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">???</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">???</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">???</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">???</label>
                        </div>
                        <div class="comment-area">
                            <textarea class="form-control mb-2" placeholder="Masukkan judul penilaian" rows="1"></textarea>
                        </div>
                        <div class="comment-area">
                            <textarea class="form-control" placeholder="Masukkan deskripsi penilaian anda" rows="4"></textarea>
                        </div>
                        <div class="text-center mt-4 "> <button
                                class="btn btn-primary send px-5 font-weight-bold">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
@endsection