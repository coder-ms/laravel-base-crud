@extends('layouts.app')
@section('content')
<section id="gifts_list" class="py-5">
    <div class="container">
        <div class="row row-cols-4 g-5">
            @foreach ($gifts as $gift)
            <div class="col p-1">
            <a href="{{ route('gifts.show', $gift->id) }}">
                <div class="my-card">
                    <div class="img_wrapper">
                        <img  src="{{ $gift['image'] }}" alt="{{ $gift['title'] }}">
                    </div>
                    <div class="text_wrapper ps-3">
                        <h4>
                            {{ $gift['title'] }}
                        </h4>
                        <p>{{$gift->name}}  {{$gift->surname}}</p>
                    </div>
                </div>
            </a>
            </div>

            @endforeach
        </div>
    </div>

</section>

@endsection
