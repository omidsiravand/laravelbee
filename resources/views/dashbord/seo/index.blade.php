@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid mt-5 text-warning">
        <div class="row">
            <div class="col-8 offset-2">
                @if (session('delete'))
                    <h5 class="alert alert-success text-center">{{session('delete')}}</h5>
                @endif
                <table class="table table-dark table-hover ">
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>description</th>
                        <th>keywords</th>
                        <th>outhor</th>
                        <th>delete</th>
                    </tr>
                    @foreach ($query as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{Str::limit($item->description,50)}}</td>
                        <td>{{Str::limit($item->keywords,50)}}</td>
                        <td>{{$item->outhor}}</td>
                        <td>
                            <form action="{{route('destroy.seo',$item->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="{{route('admin.index')}}" class="btn btn-success">create</a>
             <div class="mt-2">
                {{$query->links()}}
             </div>
            </div>
        </div>
    </div>
@endsection