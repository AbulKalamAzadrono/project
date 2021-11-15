@extends('layouts/backend/app')
@push('css')
    <style>
        hr{
            background: #000000;
            width: 75%;
            height: 1px;
        }
        .p_certificate{
            font-size: 14px;
        }
        .border_certificate{

            border-bottom: 2px black dashed ;
        }
    </style>
@endpush

@section('content')

    <section class="content-wrapper mt-5">

        <h1 class="text-center">Approve of Bangladesh Technical Education Board</h1>
        <img class="rounded mx-auto d-block" src="{{asset("backend/images/dewanict.png")}}" alt="logo">
        <p class="text-center">BANGLADESH GOVERNMENT APPROVE</p>
        <p class="text-center">(REGD.NO:0123654)</p>
        <h1 class="text-center font-weight-bold">CERTIFICATE</h1>
        <div class="row">
            <div class="col-md-3 ml-5 mb-3">
                <img src="{{asset('backend/images/avatar.png')}}" alt="Student" height="100px" width="100px">
            </div>
                <div class="offset-md-5 col-md-3">
                    <div>Roll No <span class="border_certificate  ml-2">21117044</span></div>
                    <div> Reg. No <span class="border_certificate  ml-2">20137044</span></div>
                    <div>Issue Date <span class="border_certificate  ml-2">20.01.2020</span></div>
                </div>
        </div>
        <div class="row ml-5">
           <div class="col-md-12">
               <div><i>This is certify that</i> <span class="ml-2"><i class="border_certificate"><b>Rono Mahedi</b></i></span></div>
               <div><i>Father's Name</i> <span class="ml-2"><i class="border_certificate"><b>Moyen Uddin</b></i></span></div>
               <div><i>Mother's Name</i> <span class="ml-2"><i class="border_certificate"><b>Lima Islam</b></i></span></div>
               <div><i>He/She has successfully completed</i> <span class="ml-2"><i class="border_certificate"><b>Web Development</b></i></span></div>
               <div><i>Institute Name</i> <span class="ml-2"><b class="border_certificate"><span>Akram Computer</span></b></span><i> Institute Code no</i> <span><b class="border_certificate"><span> 155 </span></b></span></div>
               <div><i>Held from</i> <span class="ml-2"> <b class="border_certificate"><span>01.06.2019</span></b></span> <i> TO </i><span class="ml-2"> <b class="border_certificate"><span> 01.06.2019 </span></b></span><i> His/Her grade was </i><span class="border_certificate"><i><b> A </b> </i></span> <i> at under the "Dewan ICT" </i></div>
           </div>
        </div>
        <div class="row mx-5 mt-5">
            <div class="col-md-4">
                <hr>
                <p class="text-center">DIRECTOR</p>
            </div>
            <div class="col-md-4">
                <hr>
                <p class="text-center">EXAM CONTROLLER</p>
            </div>
            <div class="col-md-4">
                <hr>
                <p class="text-center">CHAIRMAN</p>
            </div>
        </div>
        <p class="text-center p_certificate">This Certificate may be verified at www.dewanict.com using the Certificate holder's registration number</p>
    </section>
@endsection
