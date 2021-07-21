@extends('layouts.frontApp')
@section('content')
    <div class="container-fluid" id="LearnMore">
        <div class="container">
            <div class="container-fluid" id="weAre" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    @foreach ($service as $s)
                    <div class="WeAre_Row" style="height: auto; margin:40px 0;">
                        <div class="weAre_blockOne" style="height: auto; padding: 50px 30px">
                            <h3>{{ $s->name }}</h3>
                            <p>{{ $s->description }}</p>
                            <a href="{{ route('index') }}">Orqaga qaytish</a>
                        </div>
                        <div class="weAre_blockTwo">
                            <img src="{{  asset('upload/services/'.$s->photo)  }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection