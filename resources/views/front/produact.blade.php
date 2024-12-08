@extends('front.layouts.masterfront')
@section('body')
<section id="z1" style="background: url('{{asset('front/image/bee3.avif')}}');"></section>
<div class="container-fluid d-flex">
 <div class="p1">
     <ul>
        @foreach ($category as $item)
        <li><a href="{{route('index.pro',$item->id)}}">{{$item->title}}</a></li>
        @endforeach
        
     </ul>
     <div>
         <img src="{{asset('front/image/bee9.jpeg')}}" alt="">
     </div>
 </div>
 <div class="p2">
   
 @foreach ($product as $item)
 <div>
    <img src="{{asset('images/product/'.$item->image)}}" alt="">
    <p>{{$item->title}}</p>
    <a href="#" class="btn btn-info w-25">خرید</a>
</div>
 @endforeach
     
 </div>
</div>
<div class="row mt-5">
   <div class="offset-6"> {{$product->links()}}</div>
</div>
@endsection