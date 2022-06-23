@extends('layouts.klienLayout')
@section('container')
<style>
    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }

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

    /*Hide all except first fieldset*/
    #msform fieldset:not(:first-of-type) {
        display: none;
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

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000;
    }

    /*The background card*/
    .card {
        z-index: 0;
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
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right;
    }

    /*Field names*/
    .fieldlabels {
        color: gray;
        text-align: left;
    }

    /*Icon progressbar*/
    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
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
        height: 30px;
    }

    .progress-bar {
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
        <img src="../../assets/img/logo-amplas.png" width="200px" alt="gambar">
    </div>
    <div class="col-4">
        <table class="table border-bottom">
            <tr>
                <h3 class="col-4 font-weight-bold text-dark">Mesin Cuci Toshiba</h3>
            </tr>
            <tr>
                <td class="col-4 font-weight-bold text-dark">Tukang</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-4 font-weight-bold text-dark">Kerusakan</td>
                <td>Data</td>
            </tr>
            <tr>
                <td class="col-4 font-weight-bold text-dark">Deskripsi</td>
                <td>Data</td>
            </tr>
        </table>
    </div>
</div>
<!-- progressbar -->
<ul id="progressbar" class="mx-5 ml-5 pl-5 mr-5 pr-5">
    <li class="active" id="account"><strong class="ml-4 pl-5">Disetujui</strong></li>
    <li id="personal"><strong class="ml-5 ">Proses Pengerjaan</strong></li>
    <li id="payment"><strong class="ml-5 pl-5">Selesai</strong></li>
    <li id="confirm"><strong class="ml-5 pl-4">Pembayaran</strong></li>
</ul>
<div align="right" class="mx-5 mb-5 mt-3 px-2">
    <a href="#"  class="btn btn-danger col-md-2" style="right:10px; left:9px;"
        role="button">Batalkan</a>
    <a href="#" class="btn btn-primary col-md-2" style=" right:10px; left:9px;"
        role="button">Selesai</a>
</div>
<script>
    $(document).ready(function(){
    
    var current_fs, next_fs, previous_fs; //fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    
    setProgressBar(current);
    
    $(".next").click(function(){
    
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();
    
    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    next_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(++current);
    });
    
    $(".previous").click(function(){
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show();
    
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
    step: function(now) {
    // for making fielset appear animation
    opacity = 1 - now;
    
    current_fs.css({
    'display': 'none',
    'position': 'relative'
    });
    previous_fs.css({'opacity': opacity});
    },
    duration: 500
    });
    setProgressBar(--current);
    });
    
    function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
    .css("width",percent+"%")
    }
    
    $(".submit").click(function(){
    return false;
    })
    
    });
</script>
@endsection