@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/images/Instagram_logo.png" class="rounded-circle" style="height: 170px">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="#">Add new post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right: 25px"><strong>153</strong> posts</div>
                <div style="padding-right: 25px"><strong>23k</strong> followers</div>
                <div style="padding-right: 25px"><strong>212</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="/images/323818807_612146687581193_3474640052081855596_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/323818807_612146687581193_3474640052081855596_n.jpg" class="w-100">
            </div>
            <div class="col-4">
                <img src="/images/323818807_612146687581193_3474640052081855596_n.jpg" class="w-100">
            </div>
        </div>

    </div>
</div>
@endsection
