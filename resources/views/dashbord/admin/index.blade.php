@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid  text-warning">
        <div class="row">
        <div class="col-6 offset-3">
            @if (session('create'))
                <h5 id="session-message" class="text-success text-center">{{session('create')}}</h5>
            @endif
            <form action="{{route('seo.store')}}" method="post" >
                @csrf
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="description">description</label>
                  <textarea name="description" id="description" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);resize: none;"></textarea>
                  @error('description')
                  <p class="text-danger">{{$message}}</p>
              @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="keywords">keywords</label>
                  <textarea name="keywords" id="keywords"  class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.233);resize: none;"></textarea>
                  @error('keywords')
                  <p class="text-danger">{{$message}}</p>
              @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="outhor">outhor</label>
                    <input type="text" name="outhor" id="outhor"  class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.336);">
                    @error('outhor')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
                <input type="submit" value="send" class="btn btn-warning form-control mt-4">
             </form>
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