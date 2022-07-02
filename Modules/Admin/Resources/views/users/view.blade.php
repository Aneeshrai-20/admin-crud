<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Module Admin</title>
@include('admin::pages.style')
</head>
<body>
@include('admin::pages.navbar')
@include('admin::pages.header')

@if($a == "view")
<div class="page-body">
<div class="container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-6">
<h3>User Management</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item">User Management</li>
<li class="breadcrumb-item active"></li>
</ol>
</div>
<div class="col-sm-6">
<!-- Bookmark Start-->

<!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header pb-0">
<h5>User Management</h5>
</div>
<div class="card-body">
<form class="needs-validation"   >
@csrf
  <div class="row g-3">
    <div class="col-md-6">
    <input type="hidden" name="slug" value="{{$slug}}">
      <label class="form-label" for="validationCustom01"> First Name</label>
      <input class="form-control" id="validationCustom01" type="text"  name="name" value="{{ $user->firstname }}" disabled>
    </div>
    <div class="col-md-6">
      <label class="form-label" for="validationCustom01"> Last Name </label>
      <input class="form-control" id="validationCustom01" type="text"  name="name" value="{{ $user->lastname }}" disabled>
    </div>
    
    <div class="col-md-6 mb-3">
      <label class="form-label" for="validationCustomUsername">Enter Email</label>
      <div class="input-group">
        <input class="form-control"  type="email"  name="email" value="{{ $user->email }}" disabled>
      
      </div>
    </div>
    <div class="col-md-6">
      <label class="form-label" for="validationCustom03">Phone</label>
      <input class="form-control" id="validationCustom03" type="number" name="mobile" value="{{ $user->mobile }}" disabled >
      <div class="invalid-feedback">Please provide a valid city.</div>
      
</div><a href="{{ url('admin/users') }}" class="btn btn-primary  ">previous page</a>
    </div>
  </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>
@elseif( $a == "add")
<div class="page-body">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-6">
<h3>User Management</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item">User Management</li>
<li class="breadcrumb-item active">Add User</li>
</ol>
</div>
<div class="col-sm-6">
<!-- Bookmark Start-->

<!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header pb-0">
<h5>User Management</h5>
</div>
<div class="card-body">
<form class="needs-validation" novalidate="" action="{{url('admin/store')}}" method="post" enctype="multipart/form-data">
<div class="row g-3">
    <div class="col-md-6">
      @csrf
      <label class="form-label" for="validationCustom01">First Name</label>
      <input class="form-control" id="validationCustom01" type="text" required="" name="firstname">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
    </div>  
    <label class="form-label" for="validationCustom01">Last Name</label>
      <input class="form-control" id="validationCustom01" type="text" required="" name="lastname">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('name'))
      <span class="text-danger">{{ $errors->first('name') }}</span>
      @endif
    </div>  
    <div class="col-md-6 mb-3">
      <label class="form-label" for="validationCustomUsername">Enter Email</label>
      <div class="input-group">
        <input class="form-control" id="validationCustomUsername" type="email"  required="" name="email">
        <div class="valid-feedback">Looks good!</div>
        </div>
        @if ($errors->has('email'))
          <span class="text-danger">{{ $errors->first('email') }}</span>
      @endif
    </div>
    <div class="col-md-6">
      <label class="form-label" for="validationCustom03">mobile</label>
      <input class="form-control" id="validationCustom03" type="number" required="" name="mobile">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('mobile'))
          <span class="text-danger">{{ $errors->first('mobile') }}</span>
      @endif
    </div>
    
    <div class="col-md-6  mb-3 ">
      <label class="form-label" for="validationCustom03">password</label>
      <input class="form-control" id="validationCustom03" type="password" required="" name="password">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('password'))
          <span class="text-danger">{{ $errors->first('password') }}</span>
      @endif
    </div>
    <div class="mb-3">
    <div class="form-check">
      <div class="checkbox p-0">
        <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
      </div>
      <div class="invalid-feedback">You must agree before submitting.</div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>
@else($a == "update")
<div class="page-body">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-6">
<h3>User Management</h3>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item">User Management</li>
<li class="breadcrumb-item active">Edit User</li>
</ol>
</div>
<div class="col-sm-6">
<!-- Bookmark Start-->

<!-- Bookmark Ends-->
</div>
</div>
</div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header pb-0">
<h5>User Management</h5>
</div>
<div class="card-body">
<form class="needs-validation" novalidate="" action="{{url('admin/update')}}" method="post" enctype="multipart/form-data">
  <div class="row g-3">
    <div class="col-md-6">
      @csrf
      <input type="hidden" name="slug" value="{{$slug}}">
      <label class="form-label" for="validationCustom01">First Name</label>
      <input class="form-control" id="validationCustom01" type="text" required="" name="firstname" value="{{$user->firstname}}">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('firstname'))
      <span class="text-danger">{{ $errors->first('firstname') }}</span>
      @endif
    </div>  
    <label class="form-label" for="validationCustom01">Last Name</label>
      <input class="form-control" id="validationCustom01" type="text" required="" name="lastname"  value="{{$user->lastname}}">
      <div class="valid-feedback">Looks good!</div>
      @if ($errors->has('lastname'))
      <span class="text-danger">{{ $errors->first('last name') }}</span>
      @endif
    </div>  
    <div class="col-md-6 mb-3">
      <label class="form-label" for="validationCustomUsername">Enter Email</label>
      <div class="input-group">
        <input class="form-control" id="validationCustomUsername" type="email" aria-describedby="inputGroupPrepend" required="" name="email" value="{{ $user->email }}">
        <div class="invalid-feedback">Please choose a Email.</div>
      </div>
      @error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
    </div>
    <div class="col-md-6">
      <label class="form-label" for="validationCustom03">mobile</label>
      <input class="form-control" id="validationCustom03" type="number" required="" name="mobile" value="{{ $user->mobile }}">
      
    </div>
    @error('mobile')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
<br><br>
<div class="form-group">
  <select name="status" class="form-control" value="{{ $user->status }}">
    <option value="0">Active</option>
    <option value="1">Disable</option>

  </select>

</div>
    <div class="mb-3">
    <div class="form-check">
      <div class="checkbox p-0">
        <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
        <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
      </div>
      <div class="invalid-feedback">You must agree before submitting.</div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
  </div>
  </div>
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>
@endif
@include('admin::pages.footer')
@include('admin::pages.script')
