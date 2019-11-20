@extends('layouts.app')
@section('content')
    <form action="{{route('upload_image')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image"/>
        <input type="submit" value="Upload"/>
    </form>
@endsection
