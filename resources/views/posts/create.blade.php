@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1> </div>
                <div class="row mb-3">
                    <label for="caption" class="col-md-4 col-form-label ">{{ __('Post Caption') }}</label>


                    <input id="caption" type="text" name ="caption" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                    @error('caption')
                    
                        <strong>{{ $message }}</strong>
                    
                    @enderror

                </div>
                <div class="row p-2">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if ($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong> {{$errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="row">
                    <button class="btn btn-primary p-1">Add Post</button>
                </div>

            </div>
        </div>

    </form>

</div>
@endsection