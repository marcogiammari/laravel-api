@extends('layouts.app')
@section('content')
    <div class="jumbotron px-5 mb-4 bg-light rounded-3">
        <div class="container py-5">

            <h1 class="display-5 fw-bold">
                Laravel Portfolio
            </h1>

            <div id="jumbo-carousel" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#jumbo-carousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#jumbo-carousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#jumbo-carousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/id/1/1200/400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/2/1200/400" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/id/3/1200/400" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#jumbo-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#jumbo-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            @guest
                <div class="text-center pt-5">
                    <h2>Welcome to my portfolio</h2>
                    <p>Log in to see the projects</p>
                </div>
            @endguest
            @auth
                <div class="row flex-nowrap overflow-auto py-5">
                    @include('partials.gallery')
                </div>
            @endauth
        </div>
    </div>
@endsection
