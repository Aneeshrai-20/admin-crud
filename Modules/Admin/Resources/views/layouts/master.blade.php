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
@include('admin::pages.dashboard')


@yield('contant')

@include('admin::pages.footer')
@include('admin::pages.script')


</body>
     
      </html>