@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Song</div>

                <div class="card-body">
                    <form action="{{route('ringstones.store')}}" method="post" enctype="multipart/form-data">>@csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
                            @error('title')
                               <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
                            @error('description')
                               <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" class="form-control @error('file') is-invalid @error" accept="audio/*">
                            @error('file')
                               <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Chosse category</label>
                            <select class="form-control @error('category') is-invalid @enderror" name="category">
                                <option value="">Select category</option>
                                @@foreach (App\Category::all() as $category)
                                <option value="{{$category->id}}">
                                    {{$category->name}}</option>
                                @endforeach
                        
                            </select>
                            @error('category')
                            <span class="invalid-feedback" role="alert">
                             <strong>{{$message}}</strong>
                            </span>
                         @enderror  

                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit"></button>
                        </div>
                    </form>      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
