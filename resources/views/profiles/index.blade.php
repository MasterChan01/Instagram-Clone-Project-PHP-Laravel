@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/SanaImg.jpg" class="rounded-circle  w-75 p-2">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <button>Add New Post</button>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>153</strong> posts</div>
                <div class="pe-5"><strong>2.3M</strong> followers</div>
                <div class="pe-5"><strong>120</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}   </div>
            <div class="pt-1 font-weight-bold"><strong><a href="https://christiangarciacpe.netfy.blog/">{{ $user->profile->url }}</a></strong></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/Sanaimg2.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="/img/Sanaimg2.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="/img/Sanaimg2.jpg" class="w-100" alt="">
        </div>
    </div>

</div>
@endsection
