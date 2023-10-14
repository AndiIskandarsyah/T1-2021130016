@extends('layouts.template')

@section('title', 'Landing Page')

@section('content')

        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="row mb-2">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic"></h1>
                    <p class="lead my-3"></p>
                    <p class="lead mb-0">
                        <a href="" class="text-white fw-bold">
                            Continue reading...
                        </a>
                    </p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>


    {{-- Articles Card --}}
    <div class="row mb-2">

            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0"></h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto"></p>
                        <a href="" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">

                    </div>
                </div>
            </div>


        {{$books->links()}}
    </div>
@endsection
