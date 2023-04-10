@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add song') }}</div>

                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Artist</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" name="file" class="form-control" accept="audio/*">
                        </div>
                        <div class="form-group">
                            <label>Chosse category</label>
                            <select class="form-control" name="category"></select>
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
