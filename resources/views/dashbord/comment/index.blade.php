@extends('dashbord.layouts.master')
@section('body')
<div class="container-fluid mt-5 text-warning">
    <div class="row">
        <div class="col-8 offset-2">
            @if (session('delete'))
                <h5 id="session-message" class="alert alert-success text-center">{{session('delete')}}</h5>
            @endif
            <table class="table table-dark table-hover ">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>comment</th>
                    <th>delete</th>
                </tr>
                @foreach ($comment as $item)
                <tr>
                    <td>{{$item->id}}</td>
                   <td>{{$item->name}}</td>
                   <td>{{$item->email}}</td>
                   <td>{{Str::limit($item->comment,50)}}</td>
                    <td>
                         <form action="{{route('comment.delete',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-danger">
                        </form>
                    </td>
              
                </tr>
                @endforeach
            </table>
         <div class="mt-2">
            {{$comment->links()}}
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