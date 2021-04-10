@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <div style="border:1px soli red; width:100%; height: 500px">
                        <img src="{{ $post->get_image}}" alt="{{ $post->title }}"
                        style="width: 100%;height: 100%">
                    </div>
                    <div style="border:1px soli red; width:100%; height: 500px">

                        {!! $post->iframe !!}
                    </div>
                    <p class="card-text">
                        {{ $post->get_excerpt }} <br>
                        <a class="mt-2 btn btn-outline-primary" href="{{ route('post', $post) }}">
                        Leer Mas
                        </a>
                    </p>
                    <p class="text-muted mb-8">
                        <em>
                            &ndash; {{ $post->user->name }}
                        </em>

                        {{ $post->created_at->format('d M Y') }}
                    </p>

                </div>
            </div>
            @endforeach
           {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
