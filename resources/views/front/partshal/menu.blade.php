<section id="d1">
    <div class="menu">
        <ul>
            <li><a href="#d1">صفحه اصلی</a>
            <div class="cover"></div>
            </li>
            <li><a href="#d2">درباره</a>
                <div class="cover"></div>
            </li>
            <li><a href="#d3">گالری</a>
                <div class="cover"></div>
            </li>
            <li><a href="#d4">محصولات</a>
                <div class="cover"></div>
            </li>
            <li><a href="#d5">تماس با ما</a>
                <div class="cover"></div>
            </li> 
            <li><a href="#d6">ادرس</a>
                <div class="cover"></div>
            </li> 
        </ul>
        <div class="logo">
            <img src="{{asset('front/image/logo2.jpeg')}}" alt="">
        </div>
    </div>
    <div class="container-fluid mt-5">
     <div class="row ">
        <div class="col-12 d-flex justify-content-around ">
            <div class="im">
                <img src="{{asset('images/menu/'.$menu->image)}}" alt="">
            </div>
            <div class="c2 mt-3">
                <h2>{{$menu->title1}}</h2>
               <p>{{$menu->p}}</p>
                <h2>{{$menu->title}}</h2>
                <p class="mt-3">{{$menu->description}}</p>
            </div>
        </div>
     </div>
    </div>    
</section>
@section('js')
<script>
    var flag=true;
    $('.menu ul li').hover(function(){
         if(flag==true){
            $('.cover',this).css({'transform':'scale(1,1)','transition':'0.5s'});
           flag=false;
         }else if(flag==false){
            $('.cover',this).css({'transform':'scale(0,0)','transition':'0.5s'});
            flag=true;
         }
    });

 </script>
   <script>
    $('form#cancat').submit(function(event){
     event.preventDefault(); // جلوگیری از رفتار پیش‌فرض فرم
 
     let alldata = $(this).serialize(); // جمع‌آوری داده‌ها
     let url = $(this).attr('action'); // دریافت URL
 
     $.ajax({ // استفاده صحیح از $.ajax
         url: url,
         type: "POST",
         data: alldata,
         success: function(response) {
             // پاک‌سازی ورودی‌ها
             $('input[name=name]').val('');
             $('input[name=email]').val(''); // اصلاح نام ورودی
             $('textarea[name=com]').val(''); // اصلاح نام textarea
             alert('پیغام شما با موفقیت ثبت شد'); 
         },
         error: function(xhr, status, error) {
             alert('خطا در ثبت پیغام: ' + error); // مدیریت خطا
         }
     });
 });  
  </script>
@endsection