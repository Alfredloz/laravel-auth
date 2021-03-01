@extends('layouts.app')
@section('content')
    <div class="post_box">
        <h2>Post Utente</h2>
        @foreach ($posts as $post)
        <div class="card post_card">
            <div class="card-header">
              <h3>{{ $post->title }}</h3>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>{{ $post->body }}</p>
                <footer class="blockquote-footer"> slug: {{ $post->slug }}</footer>
              </blockquote>
            </div>
        </div>
        @endforeach
    </div>
@endsection