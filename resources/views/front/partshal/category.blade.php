<section id="d4">
      <div class="row mt-10">
        <h1 class="text-center mt-5">محصولات</h1>
    <div class="x"></div>
        <div class="catecory">
           @foreach ($category as $item)
           <div class="col-4 mt ">
            <img src="{{asset('images/category/'.$item->image)}}" class="im" alt="">
            <h3 class="mt-2">{{$item->title}}</h3>
            <a href="{{route('index.pro',$item->id)}}" class="Shopping mt-3">بیشتر</a>
        </div>
           @endforeach
         
        </div>
      </div>
</section>