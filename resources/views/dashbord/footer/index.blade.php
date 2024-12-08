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
                    <th>telgram</th>
                    <th>insta</th>
                    <th>watsap</th>
                    <th>youtube</th>
                    <th>p</th>
                    <th>h1</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
                @foreach ($footer as $item)
                <tr>
                    <td>{{$item->id}}</td>
                   <td>{{$item->telgram}}</td>
                   <td>{{$item->insta}}</td>
                   <td>{{$item->watsap}}</td>
                   <td>{{$item->youtuob}}</td>
                   <td>{{Str::limit($item->p,30)}}</td>
                   <td>{{$item->h1}}</td>
                     
                    <td>
                        <form action="{{route('footer.destroy',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
                    <td>
                        <form action="{{route('footer.edit',$item->id)}}" method="get">
                            @csrf
                          
                            <input type="submit" value="update" class="btn btn-success">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
            <a href="{{route('footer.create')}}" class="btn btn-success">create</a>
         <div class="mt-2">
            {{$footer->links()}}
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