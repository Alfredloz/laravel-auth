@extends('layouts.panel-dash')
@section('content')
<div class="card">
    <div class="card-header">
      <h3>{{ $post->title }}</h3>
    </div>
    <div class="card-body">
      <blockquote class="blockquote mb-0">
        <p>{{ $post->body }}</p>
        <footer class="blockquote-footer">slug: {{ $post->slug }}</cite></footer>
      </blockquote>
    </div>
  </div>
@endsection