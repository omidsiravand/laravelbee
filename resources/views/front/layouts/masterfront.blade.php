
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   @yield('seo')
    <!-- endmeta telgarm -->
     <!-- linkfont -->
      <link rel="stylesheet" href="{{asset('front/bootstrap-5.3.3-dist/fontawesome-pro-6.5.0-web/css/all.min.css')}}">
     <!--end linkfont -->


    <!-- css -->
     <link rel="stylesheet" href="{{asset('front/style.css')}}">
    <!-- css -->
   <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('front/bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
   <!-- bootstrap -->
    <!-- link lightbox -->
     <link rel="stylesheet" href="{{asset('front/lightbox/dist/css/lightbox.min.css')}}">
    <!--end link lightbox -->
    <!-- link slider -->
     <link rel="stylesheet" href="{{asset('front/slider/engine1/style.css')}}">
    <!--end link slider -->
     @yield('css')
    
</head>
<body>
   @yield('body')
    

    <!-- js -->
     <script src="{{asset('front/jquery-3.7.1.min.js')}}"></script>
     <script src="{{asset('front/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('front/lightbox/dist/js/lightbox-plus-jquery.min.js')}}"></script>
     <!-- js slider -->
      <script src="{{asset('front/slider/engine1/jquery.js')}}"></script>
      <script src="{{asset('front/slider/engine1/wowslider.js')}}"></script>
      <script src="{{asset('front/slider/engine1/script.js')}}"></script>

@yield('js')

</body>
</html>