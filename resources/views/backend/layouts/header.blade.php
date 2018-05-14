<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Admin Theme v3</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('public/backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset('public/backend/css/styles.css') }}" rel="stylesheet">
  <link href="{{asset('public/backend/css/main.css') }}" rel="stylesheet">
  <!-- Toastr -->
  <link href="{{asset('public/backend/toastr/toastr.min.css') }}" rel="stylesheet">
  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="{{asset('public/backend/toastr/toastr.min.js')}}"></script>
  <script src="{{asset('public/backend/js/main.js')}}"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
 <div class="header">
  <div class="logo">
    <h1><a href="index.html">FASTSHIP</a></h1>
  </div>
</div>
<div class="page-content">
  <div class="loader-wrapper" style="display: block ;">
    <div class="sk-cube-grid">
      <div class="sk-cube sk-cube1"></div>
      <div class="sk-cube sk-cube2"></div>
      <div class="sk-cube sk-cube3"></div>
      <div class="sk-cube sk-cube4"></div>
      <div class="sk-cube sk-cube5"></div>
      <div class="sk-cube sk-cube6"></div>
      <div class="sk-cube sk-cube7"></div>
      <div class="sk-cube sk-cube8"></div>
      <div class="sk-cube sk-cube9"></div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-2">
     <div class="sidebar content-box" style="display: block;">
      <ul class="nav">
        <li class="current"><a href="/fs/cpanel/dashboard"> Dashboard</a></li>
        <li class="current"><a href="/fs/cpanel/pages">  Quản lý trang</a></li>
        <li class="current"><a href="/fs/cpanel/order">  Quản lý đơn hàng </a></li>
        <li class="current"><a href="/fs/cpanel/delivery">  Quản lý giao nhận </a></li>
        <li class="current"><a href="/fs/cpanel/email">  Quản lý email</a></li>
        <li class="current"><a href="/fs/cpanel/customer">  Quản lý khách hàng</a></li>
        <li class="current"><a href="/fs/cpanel/finance">  Quản lý tài chính</a></li>
        <li class="current"><a href="/fs/cpanel/users">  Quản lý quản trị viên</a></li>
        <li class="current"><a href="/fs/cpanel/statistical">  Quản lý thống kê</a></li>
        <li class="current"><a href="/fs/cpanel/news">  Quản lý tin tức</a></li>
        <li class="current"><a href="/fs/cpanel/partner">  Quản lý đối tác</a></li>
        <li class="current"><a href="/fs/cpanel/slides">  Quản lý trình chiếu</a></li>
        <li class="current"><a href="/fs/cpanel/branch">  Quản lý DC</a></li>
        <li class="current"><a href="/fs/cpanel/careers">  Tuyển dụng</a></li>
        <li class="current"><a href="/fs/cpanel/menu">  Quản lý menu</a></li>
        <li class="current"><a href="/fs/cpanel/settings">  Cài đặt</a></li>

      </ul>
    </div>
  </div>