@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('product.update', $product->id) }}" method="POST">
              @csrf
              @method('POST')
              <label for="name">Nome:</label><br>
              <input type="text" name="name" value="{{ $product->name }}">
              @error('name')
              <div class="alert-danger">{{ $message }}</div>
              @enderror<br><br>


              <label for="desc">Descrizione:</label><br>
              <input type="text" name="desc" value="{{ $product->desc }}">
              @error('desc')
              <div class="alert-danger">{{ $message }}</div>
              @enderror<br><br>


              <label for="price">Prezzo:</label><br>
              <input type="text" name="price" value="{{ $product->price }}">
              @error('price')
              <div class="alert-danger">{{ $message }}</div>
              @enderror<br><br>



              <label for="img">Immagine:</label>
              <input type="file" name="img" >
              @error('img')
              <div class="alert-danger">{{ $message }}</div>
              @enderror<br><br>



              <input type="submit" name="submit" value="UPDATE">
            </form>
        </div>
    </div>
</div>
@endsection
