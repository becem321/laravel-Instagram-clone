@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
   <div class="row">
       
       <div class="col-8 offset-2">
           <h1>Edit Profile</h1>
        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label">Title</label>
       
                <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>


            <label for="url" class="col-md-4 col-form-label">url</label>
       
                <input id="url" name="url" type="text" class="form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>


            <label for="description" class="col-md-4 col-form-label">description</label>
       
                <input id="description" name="description" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    <input type="file" id="image" name="image" class="form-controle-file pl-3">
                    @error('image')
                        <strong>{{ $message }}</strong>
                     @enderror
                 
                 </div>
                
        </div>
        <div class="row pt-4">
            <button class="btn btn-primary">Save Profile</button>
        </div>
       </div>
       
   </div>
   
</form>
</div>
@endsection
