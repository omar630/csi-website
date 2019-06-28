<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMREC-CSI</title>
    <link rel="stylesheet" href="{{url('/css/qwert.css')}}">
    <!-- animate--->
    <link rel="stylesheet" href="{{url('/css/animate.css')}}">
    <!--animate on scroll-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">

   <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>

    <!---animate on scroll jQuery-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       $(function() {
          AOS.init();
            });
          </script>
<!----google fonts-->
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

<script type="text/javascript" src="{{URL::asset('/js/myScript.js')}}"></script>   


<style>
    </style>
</head>
<body>
    @include('navbar')
    @include('auth/login')
    @yield('content')
    @include('layouts.footer')
</body>

</html>
