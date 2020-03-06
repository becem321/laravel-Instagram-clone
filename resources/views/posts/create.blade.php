@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
   <div class="row">
       
       <div class="col-8 offset-2">
           <h1>Add New Post</h1>
        <div class="form-group row">
            <label for="caption" class="col-md-4 col-form-label">Post Caption</label>

       
                <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" id="image" name="image" class="form-controle-file pl-3">
                    @error('caption')
                        <strong>{{ $message }}</strong>
                     @enderror
                 
                 </div>
                
        </div>
        <div class="row pt-4">
            <button class="btn btn-primary">Add New Post</button>
        </div>
       </div>
       
   </div>
   
</form>
</div>
@endsection
