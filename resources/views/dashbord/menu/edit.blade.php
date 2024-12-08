@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid  text-warning">
        <div class="row">
        <div class="col-6 offset-3">
            @if (session('create'))
                <h5 class="text-success text-center">{{session('create')}}</h5>
            @endif
            <form action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="title1">title1</label>
                    <input type="text" name="title1" id="title1" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);" value="{{$menu->title1}}">
                    @error('title1')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="p">p</label>
                    <input type="text" name="p" id="p" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);"value="{{$menu->p}}">
                    @error('p')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);"value="{{$menu->title}}">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="description">description</label>
                  <textarea name="description" id="description" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);resize: none;">{{$menu->description}}"</textarea>
                  @error('description')
                  <p class="text-danger">{{$message}}</p>
              @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    <img src="{{asset('images/menu/'.$menu->image)}}" width="50" alt="">
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="send" class="btn btn-warning form-control mt-4">
             </form>
             <a href="{{route('menu.index')}}" class="btn btn-info mt-2">show</a>
        </div>
        </div>
    </div>
@endsection