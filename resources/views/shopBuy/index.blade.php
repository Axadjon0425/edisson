@extends('layouts.frontApp')
@section('content')
    <style>
        .form-group{
            width: 100%;
            margin-bottom: 0;
        }
    </style>
    <div class="container-fluid" id="AboutUs"  style="margin-bottom: 50px;">
        <div class="container">
            <div class="AboutUsTitle">
                <h1>Sotib olish</h1>
                <ul>
                    <li><a href="index.html">Bosh sahifa</a></li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Sotib olish</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="contact">
        <div class="container">
            {{-- @foreach ($shop as $s) --}}
            <div class="ShopBuy" style="background: white; box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.445);">
                <img src="{{ asset('upload/shop/'.$shop->photo )}}" alt="product">
                <div class="block">
                    <h1>{{ $shop->name }}</h1>
                    <div class="text">
                    <span>{{ $shop->price.'$' }}</span>
                    <hr>
                    </div>
                    <p>{{ $shop->text }}</p>
                </div>
            </div>
            {{-- @endforeach --}}
            <div class="ContactRow">
                <div class="ContactForm" style="margin: 50px auto; max-width: 70%; ">
                    <h3>Sotib olish</h3>
                    {{-- @foreach ($shop as $s) --}}
                    <form action="{{ route('shopUser.store') }}" method="POST" id="js_shopBuyForm">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nomi:</label>
                            <input type="text" id="name" name="name" value="{{ $shop->name }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="firstname">Ismingiz:</label>
                            <input type="text" id="firstname" name="firstname"  placeholder="Ismingizni kiriting*" value="{{ old('firstname') }}">
                            @error('firstname')
                                <span class="text-danger" style="margin-top: -20px;">Ismingizni tog'ri kiriting!</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="lastname">Familyangiz:</label>
                            <input type="text" id="lastname" name="lastname" placeholder="Familyangizni kiriting*" value="{{ old('lastname') }}">
                            @error('lastname')
                                    <span class="text-danger" style="margin-top: -20px;">Familyangizni tog'ri kiriting!</span>
                            @enderror
                        </div>
                       
                        <div class="form-group">
                            <label for="phone">Raqamingiz:</label>
                            <input type="text" id="phone" name="phone" placeholder="Telefon raqamingiz*" value="{{ old('phone') }}">
                            @error('phone')
                            <span class="text-danger" style="margin-top: -20px;">Raqamni kiriting!</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Narxi:</label>
                            <input type="text" id="price" name="price" value="{{ $shop->price }}" readonly>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Jonatish</button>
                        </div>
                    </form>
                    {{-- @endforeach --}}
                  
                </div>
            </div>
            
        </div>
    </div>
@endsection