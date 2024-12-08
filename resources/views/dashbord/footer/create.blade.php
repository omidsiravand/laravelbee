@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid  text-warning">
        <div class="row">
        <div class="col-6 offset-3">
            @if (session('create'))
                <h5 id="session-message" class="text-success text-center">{{session('create')}}</h5>
            @endif
            <form action="{{route('footer.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="telgram">telgram</label>
                    <input type="link" name="telgram" id="telgram" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('telgram')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="insta">insta</label>
                    <input type="link" name="insta" id="insta" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('insta')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="watsap">watsap</label>
                    <input type="link" name="watsap" id="watsap" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('watsap')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="youtuob">youtuob</label>
                    <input type="link" name="youtuob" id="youtuob" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('youtuob')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="p">p</label>
                   <textarea name="p" id="p" style="border: none; background-color: rgba(0, 0, 0, 0.253);" class="form-control border-bottom border-warning border-2 border-top text-white"></textarea>
                    @error('p')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>   
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="h1">h1</label>
                    <input type="text" name="h1" id="h1" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('h1')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="send" class="btn btn-warning form-control mt-4">
             </form>
             <a href="{{route('footer.index')}}" class="btn btn-info mt-2">show</a>
        </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const messageElement = document.getElementById('session-message');
        if (messageElement) {
            // بعد از 5 ثانیه، پیغام را پاک کن
            setTimeout(() => {
                messageElement.style.transition = 'opacity 0.3s';
                messageElement.style.opacity = '0';
                setTimeout(() => {
                    messageElement.remove();
                }, 300);
            }, 3000); // 5000 میلی‌ثانیه (5 ثانیه)
        }
    });
</script>
@endsection