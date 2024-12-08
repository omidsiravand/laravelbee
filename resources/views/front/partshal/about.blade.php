<section id="d2">
    <section class="container-fluid mt-4">
        <div class="row">
            <div class="text-center mt-4">
                <h1>درباره</h1>
                <div class="x"></div>
               </div>
            <div class="col-12 d-flex justify-content-around">      
               <div class="About overflow-auto">
                <p class="text-center">{{$about->description}}</p>
               </div>
               <div class="im mt-4">
                <img src="{{asset('images/about/'.$about->image)}}" alt="">
               </div>
            </div>
        </div>
     </section>
    </section>