@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(session()->has('status'))
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
            </svg>
            <div class="alert alert-success d-flex align-self-center" role="alert" style="width: 81%;">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                    {{session('status')}}
                </div>
            </div>
        @endif
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    @foreach($posts as $post)
                    <div class="container m-1">
                    <span class="fs-2">{{$post->title}}</span>
                    <div style="float: right;">
                        <a type="button" href="{{url('/post/edit', $post->id)}}" class="btn btn-warning m-1">Edit</a>
                        <a type="button" href="{{url('/post/delete', $post->id)}}" class="btn btn-danger">Delete</a>
                    </div><br>
                    <span class="text-small text-muted">{{date('- F jS, Y', strtotime($post->created_at))}}</span>
                    <div class="fs-5 mt-4">{{$post->body}}</div>
                    <span class="text-small text-muted">by {{$post->user->name}}</span>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
