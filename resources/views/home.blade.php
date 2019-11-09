@extends('layouts.app')

@section('content')
@include('pages.header') 
        
   

    <div class="content">
        <div class="links">
            <a href="{{url('post')}}">Post</a>
            <a href= "{{url('category')}}" >Category</a>
        </div>
    </div>


@include('pages.footer')
@endsection
