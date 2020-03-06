@extends('layouts.app')

@section('content')
<div class="container">
   @foreach($posts as $post)

   <div class="row py-5">
    <div class="col-5 offset-2 d-flex justify-content-end">
       <img src="/storage/{{ $post->image }}" style="max-width: 500px;">
    </div>
    <div class="col-4">
       <div class="row">
          <div>
             <div class="d-flex align-items-center">
                <div class="pr-3">
                   <img src="{{ $post->user->profile->profileImage() }}"
                    class="w-100 rounded-circle" style="max-width:40px;">
                </div>
                <div>
                   <div class="font-weight-bold"><a class="text-decoration-none"
                       href="/profile/{{ $post->user->id }}">
                      <span class="text-dark">{{$post->user->username}}</span>
                   </a>
                </div>
                </div>
             </div>
          </div>
          
       </div>
       <hr>
       <div class="description d-flex align-content-between">
          <div>
          <p>
             <span class="font-weight-bold ">
                <a class="text-decoration-none" href="/profile/{{ $post->user->id }}">
                   <span class="text-dark">{{$post->user->username}}</span>
                </a>
             </span>
             {{$post->caption}}
          </p>
          </div>
          
       </div>

       <div class="created-at">
        <a href="/p/{{$post->id}}" class="text-decoration-none text-dark">
           <span class="text-muted">{{ $post->created_at->diffForHumans() }}</span>
        </a>
      </div>
       
    </div>
</div>
   @endforeach
   <div class="row">
      <div class="col-12 d-flex justify-content-center">
         {{$posts->links()}}
      </div>
   </div>

</div>
@endsection
