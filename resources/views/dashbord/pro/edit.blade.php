@extends('dashbord.layouts.master')
@section('body')
    <div class="container-fluid  text-warning">
        <div class="row">
        <div class="col-6 offset-3">
            <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);" value="{{$product->title}}">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);">
                    <img src="{{asset('images/product/'.$product->image)}}" width="50" alt="">
                    @error('image')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
             
                <div class="form-group">
                    <div class="octagon"></div>
                    <label for="category_id">category_id</label>
                   <select name="category_id" id="category_id" class="form-control border-bottom border-warning border-2 border-top text-white" style="border: none; background-color: rgba(0, 0, 0, 0.253);"value="">
                    @foreach ($catecory as $title => $id)
                     <option value="{{ $id }}" @if ($product->category_id == $id) selected @endif> {{ $title }}</option>
        @endforeach
                   </select>
                    @error('category_id')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <input type="submit" value="send" class="btn btn-warning form-control mt-4">
             </form>
         
        </div>
        </div>
    </div>
@endsection