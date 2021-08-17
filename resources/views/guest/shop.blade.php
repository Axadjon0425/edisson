@extends('layouts.frontApp')
@section('content')
     <!--=============================Our================================-->
 <div class="container-fluid" id="AboutUs" style="margin-bottom: 100px;">
    <div class="container">
        <div class="AboutUsTitle">
            <h1>Do'kon</h1>
            <ul>
                <li><a href="index.html">Bosh sahifa</a></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                <li>Do'kon</li>
            </ul>
        </div>
    </div>
</div>
<!--========================Our Services===========================-->
<div class="container-fluid" id="OurServices" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <div class="OurServices_Row">
            @foreach ($shop as $shop)
            <div class="OurServices_BlockOne">
                <div></div>
                <img src="{{ asset('upload/shop/'.$shop->photo ) }}" alt="">
                <a href="{{route('shopBuy', [$shop->id] )}}" id="" style="margin-left: 0;">{{ $shop->name }}</a>
                <p style="margin-left: 0;">{{ $shop->price.'$' }}</p>
                <a href="{{route('shopBuy', [$shop->id] )}}" id="a" style="margin-left: 0;">Sotib olish</a>
            </div>
            @endforeach


        </div>
        
    
    </div>
</div>
@endsection