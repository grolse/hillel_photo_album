@extends('layouts.app')
@section('content')
        @foreach($images as $image)
            <img src="{{$image->file_name}}"/>
        @endforeach
@endsection
