@extends('layouts.app')

@section('content')
    <div class="container-md list-unstyled mb-4" id="home">
        <h1 class="text-center my-4 fs-1">Home</h1>

        <div id="carouselExampleIndicators" class="carousel carousel-dark slide  w-50 m-auto" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($giftIntro as $gift)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <a href="{{ route('gifts.show', $gift->id) }}">
                            <img class="d-block m-auto img-fluid" src="{{ $gift->image }}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="mb-0">{{ $gift->title }}</h5>
                                <p class="mb-0">{{ $gift->name }} {{ $gift->surname }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <button class="d-block mt-4 m-auto show_all_btn">
            <a href="{{route('gifts.index')}}">Show All</a>
        </button>
    </div>
@endsection
