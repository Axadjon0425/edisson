@extends('layouts.frontApp')

@section('content')
 <!--=============================Our================================-->
 <div class="container-fluid" id="AboutUs" v-on:mouseover="toggleOff" v-on:click="searchActiveOff" style="margin-bottom: 100px;">
    <div class="container">
        <div class="AboutUsTitle">
            <h1>Our Services</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                <li>Our Services</li>
            </ul>
        </div>
    </div>
</div>
<!--========================Our Services===========================-->
<div class="container-fluid" id="OurServices" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <div class="OurServices_Row">
            @foreach ($service as $s)
            <div class="OurServices_BlockOne">
                <div></div>
                <img src="{{ asset('upload/services/'.$s->photo ) }}" alt="">
                <a href="#" id="">{{ $s->name }}</a>
                <p>{{ $s->type }}</p>
                <a href="{{route('service.learnMore', [$s->id] )}}" id="a" >Learn more</a>
            </div>
            @endforeach


        </div>
        
    
    </div>
</div>
@endsection