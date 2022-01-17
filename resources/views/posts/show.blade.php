@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class=" d-flex align-items-center">
                    <div class="pe-3">
                        <img src="/storage/{{$post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width:50px" alt="">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/profile/"{{$post->user->id}}> 
                            <span class="text-dark">  {{$post->user->username}}</a></span>
                            <a class="pe-3" href="">Follow</a>
                        
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                </p>
            </div>

        </div>
    </div>

    

</div>
@endsection