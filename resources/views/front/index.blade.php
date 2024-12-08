@extends('front.layouts.masterfront')
@section('seo')
     <!-- meta -->
     <title>{{$seo->title}}</title>
     <meta name="description" content="{{$seo->description}}">
     <meta name="keywords" content="{{$seo->keywords}}">
     <meta name="outhor" content="{{$seo->outhor}}">
     <meta name="robots" content="index,follow">
     <!-- meta -->
     <!-- metatelgarm -->
     <meta property="og:title" content="{{$seo->title}}" />
     <meta property="og:site_name" content="{{$seo->title}}"/>
     <meta property="og:description" content="{{$seo->description}}" />

@endsection
@section('body')
     <!-- d1 -->
@include('front.partshal.menu')
<!-- end d1 -->

 <!-- slider -->
@include('front.partshal.slider')
  
  <!-- end slider -->

<!-- d2 -->
@include('front.partshal.about')
<!--end d2 -->

<!-- d3 -->
@include('front.partshal.gallery')

<!--end d3 -->

<!-- d4 -->
@include('front.partshal.category')

<!--end d4 -->

<!-- d5 -->
@include('front.partshal.Communication')
<!--end d5 -->

<!-- d6 -->
@include('front.partshal.footer')
<!--end d6 -->
@endsection