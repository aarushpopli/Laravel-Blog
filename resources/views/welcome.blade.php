@extends('layouts.dash')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        @foreach($posts as $post)
                        <div class="container m-1">
                            <span class="fs-2">{{$post->title}}</span>
                            <br>
                            <span class="text-small text-muted">{{date('- F j, Y', strtotime($post->created_at))}}</span>
                            <div class="fs-5">{{$post->body}}</div>
                            <span class="text-small text-muted">by {{$post->user->name}}</span>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination justify-content-center p-3">
            {{$posts->links()}}
        </div>
    </div>
</body>
@endsection