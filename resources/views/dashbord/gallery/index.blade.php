@extends('dashbord.layouts.master')
@section('body')
<div class="container-fluid mt-5 text-warning">
    <div class="row">
        <div class="col-8 offset-2">
            @if (session('delete'))
                <h5 id="session-message" class="alert alert-success text-center">{{session('delete')}}</h5>
            @endif
            @if (session('update'))
            <h5 id="session-message" class="alert alert-success text-center">{{session('update')}}</h5>
        @endif
            <table class="table table-dark table-hover ">
                <tr>
                    <th>id</th>
                    <th>caption</th>
                    <th>image</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
                @foreach ($gallery as $item)
                <tr>
                    <td>{{$item->id}}</td>
                   <td>{{$item->caption}}</td>
                     <td><img src="{{asset('images/gallery/'.$item->image)}}" width="50"></td>
                    <td>
                        <form action="{{route('gallery.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('gallery.edit',$item->id)}}" method="get">
                            @csrf
                          
                            <input type="submit" value="update" class="btn btn-success">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <a href="{{route('gallery.create')}}" class="btn btn-success">create</a>
         <div class="mt-2">
            {{$gallery->links()}}
         </div>
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
                messageElement.style.transition = 'opacity 0.2s';
                messageElement.style.opacity = '0';
                setTimeout(() => {
                    messageElement.remove();
                }, 200);
            }, 2000); // 5000 میلی‌ثانیه (5 ثانیه)
        }
    });
</script>
@endsection