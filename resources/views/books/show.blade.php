@extends('layouts.template')

@section('title', $book->judul)

@section('content')
    <div class="blog-post my-4">
        <h1 class="display-4">{{ $book->judul }}</h1>
        <p class="blog-post-meta">ISBN: {{ $book->isbn }}</p>
        <p class="blog-post-meta">Penerbit: {{ $book->penerbit }}</p>
        <p class="blog-post-meta">Halaman: {{ $book->halaman }}</p>
        <p class="blog-post-meta">Kategori: {{ $book->kategori }}</p>
        <p class="blog-post-meta">Diterbitkan: {{ $book->created_at->format('d M Y H:i') }}</p>
        <p class="blog-post-meta">Diperbarui: {{ $book->updated_at->format('d M Y H:i') }}</p>
    </div>
@endsection
