<section id="d3">
     <div class="container-fluid gallery mt">
        <div class="row ">
            <h1 class="text-center">گالری</h1>
            <div class="x"></div>
            <div class="col-10 offset-1 mt-5">
              <div class="row">
               @foreach ($gallery as $item)
               <div class="col-4 mt-2"> 
                <a class="example-image-link" href="{{asset('images/gallery/'.$item->image)}}" data-lightbox="example-1"  data-title="{{$item->caption}}"><img class="example-image ex" src="{{asset('images/gallery/'.$item->image)}}" alt="image-1" /></a>
            </div>
               @endforeach
              </div>
            </div>
        </div>
        </div>
     </div>
 </section>