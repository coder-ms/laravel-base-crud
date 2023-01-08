@extends('layouts.app')

@section('page_title')
    {{ $gift->title }}
@endsection

@section('content')
    <section class="container py-5" id="single_gift">
        <div class="row justify-content-center align-items-center">
            <div class="img-section col-4 my-5">
                <img class="gift" src="{{ $gift->image }}">
                <div class="flake">
                    <img src="{{ Vite::asset('resources/img/fiocco.png') }}" alt="fiocco">
                </div>
            </div>

            <div class="text-section col-6 offset-2">
                <h2>{{ $gift->title }}</h2>
                <div>Type: {{ $gift->type }}</div>
                <div>Receiver: {{ $gift->name }} {{ $gift->surname }}</div>
                <h5 class="mt-3">Overview:</h5>
                <p>{{ $gift->description }}</p>
                <button type="submit" class="edit"><a
                        href="{{ route('gifts.edit', ['gift' => $gift->id]) }}">edit</a></button>
                <button type="submit" class="list"><a href="{{ route('gifts.index') }}">gift list</a></button>
                <form action="{{ route('gifts.destroy', ['gift' => $gift->id]) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <!-- <button type="button" class="del" id="delete-button">delete</button> -->
                    <button type="button" class="del" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button>
                    <div class="modal fade centered" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-2 bg-white">
                                <div class="modal-body">
                                    <h4 class="text-danger">Are you sure?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="del"data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="modal_bg">Yes, delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>
@endsection
