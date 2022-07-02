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
<div class="page-body">
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
<div class="bookmark">
<ul>

<form class="form-inline search-form">

</form>
</li>
</ul>
</div>
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
<div class="card-header">
<h5>Add User</h5>
</div>
<div class="card-body">
<div class="dt-ext table-responsive">
<div>
<div class="mx-auto pull-right">
<div class="">
<!-- <form action="{{url('admin/users')}}" method="POST" role="search">
          {{csrf_field()}}
          <div class="input-group">
         
            <input type="text" class="form-control"   name="search" placeholder="Search for . . ">
            <span class="input-group-btn">
             <button type="submit" class="btn btn-info">
          Search
        </button>
            </span>
            <span class="input-group-btn">
             <button type="submit" class="btn btn-danger" onclick="resetForm();">
          reset
        </button>
            </span>
            
            
          </div>
        </form>  -->
</div>
</div>
</div>
<table class="table">
<thead>
  
<tr>
<th>S.no</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Phone</th>
<th>Status</th>
<th>Registration Date</th>
<th>Action</th> 
</tr>
</thead>

<tbody>
<tr>
  <?php $i=1; ?>
@foreach($data as $user)
<td>{{ $i++ }}</td>
<td>{{$user->firstname }}</td>
<td>{{$user->lastname }}</td>
<td>{{$user->email }}</td>
<td>{{$user->mobile }}</td>
<td>@if($user->status == '0')
  <label class="py-2 px-3 btn-primary">Active</label>
  @elseif($user->status == '1')
  <label class="py-2 px-3 btn-danger">Disable</label>
  @endif
</td>
  <td>{{$user->created_at}}</td>
<td>
          <a href="delete/{{$user->slug}}" class="button delete-confirm"><i class="fa fa-trash"></i></a>
          <a href="users/views/{{$user->slug}}"><i class="fa fa-eye"></i></a>
          <a href="users/edit/{{$user->slug}}"><i class="fa fa-pencil"></i></a>
        </td>
</tr>
@endforeach
<?php $i++;?>
</tbody>

</table>
</div>
{{ $data->links() }}
</div>
</div>
</div>
</div>
</div>
<!-- Container-fluid Ends-->
</div>
@include('admin::pages.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script>
$('.delete-confirm').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Are you sure?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
  
</script>

<script>
$(document).ready(function(){
    $(".reset-btn").click(function(){
        $("#myForm").trigger("reset");
    });
});
</script>

<script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script>
  
@include('admin::pages.script')

