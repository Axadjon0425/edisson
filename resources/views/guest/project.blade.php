@extends('layouts.frontApp')
@section('content')
    <!--========================Featured Works=========================-->
    <div class="container-fluid" id="Featured" v-on:mouseover="toggleOff" v-on:click="searchActiveOff" style="background: white; margin: 50px 0;">
        <div class="container">
                <div class="featuredRow">
                    <div class="featuredBlockOne">
                        <div class="img">
                            <img src="assets/images/project-01-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 01</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockTwo">
                        <div class="img">
                            <img src="assets/images/project-02-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 03</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockThree">
                        <div class="img">
                            <img src="assets/images/project-03-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 03</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockFour">
                        <div class="img">
                            <img src="assets/images/project-04-768x511.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 04</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockFive">
                        <div class="img">
                            <img src="assets/images/project-05-300x200.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 05</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockSix">
                        <div class="img">
                            <img src="assets/images/project-06-768x512.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 06</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockOne">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-07-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 07</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockTwo">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-08-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 08</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                    <div class="featuredBlockThree">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-09-600x400.jpeg" alt="">
                        </div>
                        <div class="div">
                            <h4>Our project 09</h4>
                            <a href="#" class="btn btn-primary">view project</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection