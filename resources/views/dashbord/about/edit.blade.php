@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid  text-warning">
        <div class="row">
        <div class="col-6 offset-3">
            <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="description">description</label>
                  <textarea name="description" id="description" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);resize: none;">{{$about->description}}</textarea>
                  @error('description')
                  <p class="text-danger">{{$message}}</p>
              @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    <img src="{{asset('images/about/'.$about->image)}}" width="50">
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="send" class="btn btn-warning form-control mt-4">
             </form>
        </div>
        </div>
    </div>
@endsection
