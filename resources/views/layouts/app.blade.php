<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Smile Pet Clinic</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
   
    <!-- Styles -->
      <!-- Custom fonts for this theme -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
 
  <!-- Theme CSS -->

    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            
                <a class="navbar-brand" href="{{ url('/admin/posts') }}">
                Smile Pet Clinic
                </a>
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-clinic-medical fa-2x text-gray-300"></i>
          
        </div>

                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/admin/posts') }}">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="posts/create">เพิ่มประวัติการรักษา</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ประเภทการนัดรักษา
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="นัดฉีดวัคซีน" type="submit"><i class="fa fa-calendar"></i> นัดฉีดวัคซีน <span class="badge badge-danger badge-counter">{{ $appointment }}</span></button>                                  
        </form>
        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="ฉีดกระตุ้นภูมิคุ้มกัน" type="submit"><i class="fa fa-calendar"></i> ฉีดกระตุ้นภูมิคุ้มกัน <span class="badge badge-danger badge-counter">{{ $appointment1 }}</span></button>                                  
        </form>
        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="นัดกำจัดเห็บถ่ายพยาธิ" type="submit"><i class="fa fa-calendar"></i> นัดกำจัดเห็บถ่ายพยาธิ <span class="badge badge-danger badge-counter">{{ $appointment2 }}</span></button>                                  
        </form>
        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="นัดรักษาต่อเนื่อง" type="submit"><i class="fa fa-calendar"></i> นัดรักษาต่อเนื่อง <span class="badge badge-danger badge-counter">{{ $appointment3 }}</span></button>                                  
        </form>
          
          
        </div>
      </li>
      

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         วันที่นัดรักษา
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="{{ date('Y-m-d') }}" type="submit"><i class="fa fa-calendar-day"></i> การนัดรักษาวันนี้ <span class="badge badge-danger badge-counter">{{ $count_date }}</span></button>                                  
        </form>
        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="{{ date('Y-m') }}" type="submit"><i class="fa fa-calendar-week"></i> การนัดรักษาเดือนนี้</button>                                  
        </form>
        <form method="GET" action="{{ url('/admin/posts') }}"  role="search">                                       
        <button class="dropdown-item" name="search" value="{{ date('Y') }}" type="submit"><i class="fa fa-calendar-alt"></i> การนัดรักษาทั้งหมด</button>                                  
        </form>
          
        
        </div>
      </li>
      
    </ul>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
    <form method="GET" action="{{ url('/admin/posts') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="ค้นหาระเบียบประวัติ..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
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
