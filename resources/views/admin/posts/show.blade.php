
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
                    <div class="card-header">HN000{{ $post->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/posts') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        @if (Route::has('login')) @auth <a href="{{ url('/admin/posts/' . $post->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/posts' . '/' . $post->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>@else @endauth @endif
                        <br/>
                        <br/>


                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    
                                    <tr>
                                        <th>ID</th><td>HN000{{ $post->id }}</td>
                                    </tr>
                                    <tr><th> รูปสัตว์เลี้ยง </th><td> <img src="{{ URL::to('/') }}/{{ $post->image }}" hight="300" width="500" /></td></tr>
                                    <tr><th> วันที่ทำประวัติ </th><td> {{ $post->created_at }} </td></tr>
                                    <tr><th> ชื่อสัตว์เลี้ยง </th><td> {{ $post->title }} </td></tr>
                                    <tr><th> ชื่อเจ้าของสัตว์เลี้ยง </th><td> {{ $post->cus_name }} </td></tr>
                                    <tr><th> เลขประจำตัวประชาชน </th><td> {{ $post->user_id }} </td></tr>
                                    <tr><th> ประเภท </th><td> {{ $post->category }} </td></tr>
                                    <tr><th> Line Id </th><td> {{ $post->line_id }} </td></tr>
                                    <tr><th> เบอร์โทรศัพท์ </th><td> {{ $post->opd_phone }} </td></tr>
                                    <tr><th> สี/ตำหนิ </th><td> {{ $post->color }} </td></tr>
                                    <tr><th> เพศ </th><td> {{ $post->sex }} </td></tr>
                                    <tr><th> พันธุ์ </th><td> {{ $post->breed }} </td></tr>
                                    <tr><th> อายุ </th><td> {{ $post->year }} </td></tr>
                                    <tr><th> สถานะการทำวัคซีน </th><td> {{ $post->opd_vaccine }} </td></tr>
                                    <tr><th> สถานะการทำหมัน </th><td> {{ $post->Sterilization }} </td></tr>
                                    <tr><th> การนัดรักษา </th><td> {{ $post->appointment }} </td></tr>
                                    <tr><th> วันที่นัดรักษา </th><td> {{ $post->appointment_date }} </td></tr>
                                    <tr><th> รายละเอียดการนัดรักษา </th><td><textarea readonly class="form-control" rows="10", cols="100" id="appointment_details" name="appointment_details">{{ $post->appointment_details }}</textarea></td></tr>
                                    <tr><th> ประวัติการรักษา </th><td><textarea readonly class="form-control" rows="10", cols="100" id="opd_details" name="opd_details">{{ $post->opd_details }}</textarea></td></tr>
                                </tbody>
                            </table>
                        </div>

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