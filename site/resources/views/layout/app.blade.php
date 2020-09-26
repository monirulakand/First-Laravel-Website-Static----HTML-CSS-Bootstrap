<html>  
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>

@include('layout.menu')
    
@yield('content')

@include('layout.footer')
<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>