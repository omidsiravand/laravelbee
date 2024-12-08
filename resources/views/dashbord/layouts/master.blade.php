<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    
    @yield('css')
</head>

<body class="bg-dark">
  <div class="menu">
    <ul>
        <li><a href="{{route('company.index')}}" target="_blank">نمایش وبسایت</a></li>
        <li><a href="{{route('show.seo')}}">سئو</a></li>
        <li><a href="{{route('menu.index')}}">صفحه اصلی</a></li>
        <li><a href="{{route('about.index')}}">درباره</a></li>
        <li><a href="{{route('gallery.index')}}">گالری</a></li>
        <li><a href="{{route('category.index')}}">دسته بندی</a></li>
        <li><a href="{{route('product.index')}}">محصولات</a></li>
        <li><a href="{{route('comment.index')}}">کامنت</a></li>
        <li><a href="{{route('footer.index')}}">ادرس</a></li>

        <li><form action="{{route('logout')}}" method="post">
           @csrf
           <input type="submit" value="logouts" class="btn btn-danger">    
        </form></li>
    </ul>
  </div>
  <div class="container-fluid">
    @yield('body')
   </div>
  {{-- js--}}
  <script src="{{asset('jquery-3.7.1.min.js')}}"></script>
  <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js')}}"></script>
  @yield('js')
</body>
</html>