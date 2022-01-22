@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-3 p-4">
            <img src="/storage/{{$user->profile->profileImage()}}" class="rounded-circle w-100" alt="">
        </div >
    
        <div class="col-9 pt-5">

            <div class="d-flex justify-content-between align-items-baseline ">  
                <div class="d-flex align-items-center pb-2">
                <div class="h4">{{$user->username}}</div>

                <follow-button></follow-button>
 
                
                
            </div>
            @can('update',$user->profile)
            <a href="/p/create">Add New Post</a>

            @endcan
            
                
            </div> 
            @can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

            @endcan
            <div class="d-flex" >
                <div class="pe-4"> <strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-4"> <strong>14</strong> followers</div>
                <div class="pe-4"> <strong>133</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold"><strong>{{ $user->profile->title}}</strong> </div>
            <div>{{ $user->profile->description  }}</div>
            <div><a href="#">{{  $user->profile->url  }}</a>
        </div>
    </div>
    <div class="row pt-5">
        @foreach ($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{ $post->image }}" alt="" class="w-100">
            </a>
        </div>
        @endforeach
     

    </div>
    
  
</div>
@endsection
