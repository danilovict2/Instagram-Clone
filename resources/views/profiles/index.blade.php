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
                <a href="/p/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div style="padding-right: 25px"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div style="padding-right: 25px"><strong>23k</strong> followers</div>
                <div style="padding-right: 25px"><strong>212</strong> following</div>
            </div>
            <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src= "/storage/{{ $post->image }}" class="w-200">
                    </a>

                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
