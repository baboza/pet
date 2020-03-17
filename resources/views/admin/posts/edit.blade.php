<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Smile Pet Clinic</title>


  <link rel="stylesheet" href="https://fontawesome.com/v4.7.0/assets/font-awesome/css/font-awesome.css>
</head>

<body id="page-top">

@extends('layouts.app')

@section('content')
    
        <div class="row">
            

            <div class="col">
                <div class="card">
                    <div class="card-header">Edit Post #{{ $post->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/posts/' . $post->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{ csrf_field() }}



              



<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'ชื่อสัตว์เลี้ยง' }}</label>
    <input class="form-control" name="title" type="text" id="title" required value="{{ isset($post->title) ? $post->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cus_name') ? 'has-error' : ''}}">
    <label for="cus_name" class="control-label">{{ 'ชื่อเจ้าของสัตว์เลี้ยง' }}</label>
    <input class="form-control" name="cus_name" type="text" required id="cus_name" value="{{ isset($post->cus_name) ? $post->cus_name : ''}}" >
    {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'เลขประจำตัวประชาชาชน' }}</label>
    <input class="form-control" readonly name="user_id" type="text" id="user_id" required value="{{ isset($post->user_id) ? $post->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('opd_phone') ? 'has-error' : ''}}">
    <label for="opd_phone" class="control-label">{{ 'เบอร์โทรศัพท์' }}</label>
    <input class="form-control" name="opd_phone" type="text" id="opd_phone" required value="{{ isset($post->opd_phone) ? $post->opd_phone : ''}}" >
    {!! $errors->first('opd_phone', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('line_id') ? 'has-error' : ''}}">
    <label for="line_id" class="control-label">{{ 'Line Id' }}</label>
    <input class="form-control" name="line_id" type="text" id="line_id" required value="{{ isset($post->line_id) ? $post->line_id : ''}}" >
    {!! $errors->first('line_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'ประเภท' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"สุนัข": "สุนัข", "แมว": "แมว", "อื่นๆ": "อื่นๆ"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->category) && $post->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('color') ? 'has-error' : ''}}">
    <label for="color" class="control-label">{{ 'สี/ตำหนิ' }}</label>
    <input class="form-control" name="color" type="text" required id="color" value="{{ isset($post->color) ? $post->color : ''}}" >
    {!! $errors->first('color', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('sex') ? 'has-error' : ''}}">
    <label for="sex" class="control-label">{{ 'เพศ' }}</label>
    <select name="sex" class="form-control" id="sex" >
    @foreach (json_decode('{"ผู้": "ผู้", "เมีย": "เมีย"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->sex) && $post->sex == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('sex', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('breed') ? 'has-error' : ''}}">
    <label for="breed" class="control-label">{{ 'พันธุ์' }}</label>
    <input class="form-control" name="breed" type="text" required id="breed" value="{{ isset($post->breed) ? $post->breed : ''}}" >
    {!! $errors->first('breed', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'อายุ' }}</label>
    <input class="form-control" name="year" type="text" required id="year" value="{{ isset($post->year) ? $post->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('Sterilization') ? 'has-error' : ''}}">
    <label for="Sterilization" class="control-label">{{ 'สถานะการทำหมัน' }}</label>
    <select name="Sterilization" class="form-control" id="Sterilization" >
    @foreach (json_decode('{"ยังไม่ทำหมัน": "ยังไม่ทำหมัน", "ทำหมันแล้ว": "ทำหมันแล้ว"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->Sterilization) && $post->Sterilization == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Sterilization', '<p class="help-block">:message</p>') !!}
</div>

@if (Route::has('login')) @auth
<div class="form-group {{ $errors->has('opd_vaccine') ? 'has-error' : ''}}">
    <label for="opd_vaccine" class="control-label">{{ 'สถานะการทำวัคซีน' }}</label>
    <select name="opd_vaccine" class="form-control" id="opd_vaccine" >
    @foreach (json_decode('{"ยังไม่ทำวัคซีน": "ยังไม่ทำวัคซีน", "HCPCh": "HCPCh", "HCPCh+RV": "HCPCh+RV", "DHPPi+L": "DHPPi+L", "DHPPi+LR": "DHPPi+LR", "RV": "RV"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->opd_vaccine) && $post->opd_vaccine == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('opd_vaccine', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group {{ $errors->has('appointment') ? 'has-error' : ''}}">
    <label for="appointment" class="control-label">{{ 'การนัดรักษา' }}</label>
    <select name="appointment" class="form-control" id="appointment" >
    @foreach (json_decode('{"ยังไม่มีการนัดรักษา": "ยังไม่มีการนัดรักษา", "นัดฉีดวัคซีน": "นัดฉีดวัคซีน", "ฉีดกระตุ้นภูมิคุ้มกัน": "ฉีดกระตุ้นภูมิคุ้มกัน", "นัดกำจัดเห็บถ่ายพยาธิ": "นัดกำจัดเห็บถ่ายพยาธิ", "นัดรักษาต่อเนื่อง": "นัดรักษาต่อเนื่อง"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($post->appointment) && $post->appointment == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('appointment', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('appointment_date') ? 'has-error' : ''}}">
    <label for="appointment_date" class="control-label">{{ 'วันที่นัดรักษา' }}</label>
    <input class="form-control" name="appointment_date" type="date" data-date-format="dd-mm-yyyy" id="appointment_date" value="{{ isset($post->appointment_date) ? $post->appointment_date : ''}}" >
    {!! $errors->first('appointment_date', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('appointment_details') ? 'has-error' : ''}}">
    <label for="appointment_details" class="control-label">{{ 'รายละเอียดการนัดรักษา' }}</label>
    
    <textarea  class="form-control" rows="10", cols="130" id="appointment_details" name="appointment_details" >{{ isset($post->appointment_details) ? $post->appointment_details : ''}}</textarea>
</div>


<div class="form-group {{ $errors->has('opd_details') ? 'has-error' : ''}}">
    <label for="opd_details" class="control-label">{{ 'ประวัติการรักษา' }}</label>
    
    <textarea  class="form-control" rows="10", cols="130" id="opd_details" name="opd_details" >{{ isset($post->opd_details) ? $post->opd_details : ''}}</textarea>
</div>
@else @endauth @endif

<div class="form-group">
    <input class="btn btn-primary" type="submit">
</div>



                        </form>

                    </div>
                </div>
            </div>
        </div>
    
@endsection


  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/freelancer.min.js') }}"></script>

</body>

</html>