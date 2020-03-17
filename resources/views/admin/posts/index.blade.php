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
        
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h3 style="color:rgb(41, 121, 226);">นัดฉีดวัคซีน</h3></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><form method="GET" action="{{ url('/admin/posts') }}"  role="search">  <button class="dropdown-item" name="search" value="นัดฉีดวัคซีน" type="submit">{{ $appointment }}</button> </form></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-syringe fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><h3 style="color:rgb(41, 121, 226);">ฉีดกระตุ้นภูมิคุ้มกัน</h3></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><form method="GET" action="{{ url('/admin/posts') }}"  role="search">  <button class="dropdown-item" name="search" value="ฉีดกระตุ้นภูมิคุ้มกัน" type="submit">{{ $appointment1 }}</button> </form></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-medkit fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h3 style="color:rgb(41, 121, 226);">นัดกำจัดเห็บถ่ายพยาธิ</h3></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><form method="GET" action="{{ url('/admin/posts') }}"  role="search">  <button class="dropdown-item" name="search" value="นัดกำจัดเห็บถ่ายพยาธิ" type="submit">{{ $appointment2 }}</button> </form></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-pills fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h3 style="color:rgb(41, 121, 226);">นัดรักษาต่อเนื่อง</h3></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><form method="GET" action="{{ url('/admin/posts') }}"  role="search">  <button class="dropdown-item" name="search" value="นัดรักษาต่อเนื่อง" type="submit">{{ $appointment3 }}</button> </form></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-md fa-3x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        <div class="row">
          
        
            <div class="col">
                <div class="card">
                    <div class="card-header bg-secondary"><h4 class="page-section-heading text-white text-uppercase mb-0">ระเบียบประวัติการรักษา</h4>
                    
                   

                    
                    </div>
                    
                    
                        <div class="table-responsive">
                            <table class="table" id="myTable">
                                <thead>
                                    <tr>
                                    <th>รูปสัตว์เลี้ยง</th><th>HN</th><th>ชื่อสัตว์</th><th>ชื่อเจ้าของสัตว์เลี้ยง</th><th>ประเภท</th><th>เบอร์โทรศัพท์</th><th>พันธุ์</th><th>เพศ</th><th>การนัดรักษา</th><th>วันที่นัด</th><th>รายละเอียดนัดรักษา</th>@if (Route::has('login')) @auth<th>Actions</th>@else @endauth @endif
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $item)
                                    <tr>
                                        @if(!empty($item->image))
                                        <td><a href="{{ url('/admin/posts/' . $item->id) }}" title="View Post"><img src="{{ URL::to('/') }}/{{ $item->image }}" hight="100" width="50" /></a></td>
                                        @else
                                        <td><a href="{{ url('/admin/posts/' . $item->id) }}" title="View Post"><img src="{{ URL::to('/') }}/files/File_2019-10-04157018742181892.jpg" hight="100" width="50" /></a></td>
                                        @endif
                                        <td><a href="{{ url('/admin/posts/' . $item->id) }}" title="View Post">HN000{{ $item->id }}</a></td>
                                        
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->cus_name }}</td>
                                        <td>{{ $item->category }}</td>
                                        <td><a href="tel:{{ $item->opd_phone }}">{{ $item->opd_phone }}</a></td>
                                        <td>{{ $item->breed }}</td>
                                        <td>{{ $item->sex }}</td>
                                      
                                        <td> @if(!empty($item->appointment))
                                        {{ $item->appointment }}
                                        @else
                                        <span>ยังไม่มีการนัดหมาย</span>
                                        @endif
                                        </td>

                                        <td> @if(!empty($item->appointment_date))
                                        {{ $item->appointment_date }}
                                          @else
                                          <span>ยังไม่มีการนัดหมาย</span>
                                          @endif
                                          </td>

                                          <td> @if(!empty($item->appointment_details))
                                          {{ $item->appointment_details }}
                                        @else
                                        <span>ยังไม่มีการนัดหมาย</span>
                                        @endif
                                        </td>
                                        
                                        
                                        @if (Route::has('login')) @auth <td>
                                           
                                            <a href="{{ url('/admin/posts/' . $item->id . '/edit') }}" title="Edit Post"><button class="btn btn-primary btn-sm">OPD</button></a>

                                            <form method="POST" action="{{ url('/admin/posts' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)">Del</button>
                                            </form>
                                        </td>@else @endauth @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $posts->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>






        <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">จำนวนสัตว์ทั้งหมดในทะเบียนประวัติ {{$allrecord}} ตัว</h6>
                </div>
                <div class="card-body">
                  <h6 class=" font-weight-bold text-primary">สุนัข <i class="fas fa-dog fa-2x text-gray-300"></i><span class="float-right">{{ $dog }} ตัว</span></h6>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ $dog_av }}%" aria-valuenow="{{ $dog_av }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h6 class=" font-weight-bold text-primary">แมว <i class="fas fa-cat fa-2x text-gray-300"></i><span class="float-right">{{ $cat }} ตัว</span></h6>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $cat_av }}%" aria-valuenow="{{ $cat_av }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h6 class=" font-weight-bold text-primary">อื่นๆ <i class="fas fa-paw fa-2x text-gray-300"></i><span class="float-right">{{ $all }} ตัว</span></h6>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $all_av }}%" aria-valuenow="{{ $all_av }}" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  
                </div>
              </div>
    
@endsection





<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
    
    
        <div class="container">
        <div class="row">
            

            <div class="col">
                <div class="card">
                    <div class="card-header">เพิ่มประวัติการรักษา</div>
                    <div class="card-body">
                        
        
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/admin/posts') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('admin.posts.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
      </div>
    </div>
  </div>








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