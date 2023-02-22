@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post</div>
                <form method="POST" action="/post/edit/{{$post->id}}">
                    @csrf
                    <div class="container p-4">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$post->title}}"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" rows="5" placeholder="Body">{{$post->body}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" value="Update" id="liveToastBtn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
