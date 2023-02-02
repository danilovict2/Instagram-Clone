@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                            style="max-width: 40px;">
                    </div>
                    <div style="padding-left: 5%">
                        <div style="font-weight: bold">
                            <a href="/profile/{{ $post->user_id }}" style="text-decoration: none">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                            <a href="#" style="padding-left: 5%">Follow</a>
                        </div>
                    </div>
                </div>
                <p class="pt-4">
                    <span style="font-weight: bold"><a href="/profile/{{ $post->user_id }}" style="text-decoration: none">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>
        </div>

    </div>
@endsection
