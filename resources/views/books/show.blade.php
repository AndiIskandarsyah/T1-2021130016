@extends('layouts.template')

@section('title', $book->judul)

@section('content')
    <div class="blog-post my-4">
        <h1 class="display-5 fw-bold">{{ $book->isbn }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->judul }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->halaman }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->kategori }}</h1>
        <h1 class="display-5 fw-bold">{{ $book->penerbit }}</h1>
        <p class="blog-post-meta">{{ $book->updated_at }}</p>
    </div>
@endsection
