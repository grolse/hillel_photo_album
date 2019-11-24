@extends('layouts.app')
@section('content')
    <form action="{{route('upload_image')}}" method="post" enctype="multipart/form-data">
        @csrf
        <img src="{{storage_path() . '/app/public/Capture.PNG'}}"/>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <input type="file" name="image"/>
        <input type="submit" value="Upload"/>
    </form>
@endsection
