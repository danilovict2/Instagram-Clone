@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle" style="height: 170px">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">
                        <div class="h4">{{ $user->username }}</div>
                        <follow-button user_id = "{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit your profile</a>
                @endcan
                <div class="d-flex">
                    <div style="padding-right: 25px"><strong>{{ $postsCount }}</strong> posts</div>
                    <div style="padding-right: 25px"><strong>{{ $followersCount }}</strong> followers</div>
                    <div style="padding-right: 25px"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4" style="font-weight: bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="https://{{ $user->profile->url }}">{{ $user->profile->url }}</a></div>
            </div>
            <div class="row pt-5">
                @foreach ($user->posts as $post)
                    <div class="col-4 pb-4">
                        <a href="/p/{{ $post->id }}">
                            <img src="/storage/{{ $post->image }}" class="w-200">
                        </a>

                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
