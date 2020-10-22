@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content p-2">
            @foreach ($products as $product)
                <div class="card my-card">
                    <img src="{{$product ->img}}" class="card-img-top" alt="img">
                    <div class="my-card-body ">
                        <h5 class="card-title">
                            {{$product ->name}}
                        </h5>
                        <p class="card-text my-card-desc">
                            {{$product ->desc}}
                        </p>
                        <p class="card-text my-card-text">
                           prezzo: {{$product ->price}}
                        </p>
                        @auth
                            <div>
                                <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary">modifica</a>
                                <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger">elimina</a>
                            </div>
                        @endauth
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

