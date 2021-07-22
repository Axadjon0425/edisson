@extends('layouts.frontApp')
@section('content')
    <!--========================Featured Works=========================-->
    <div class="container-fluid" id="Featured" v-on:mouseover="toggleOff" v-on:click="searchActiveOff" style="background: white; margin: 50px 0;">
        <div class="container">
                <div class="featuredRow">
                    <div class="featuredBlockOne">
                        <div class="img">
                            <img src="{{asset('frontend/images/project-01-600x400.jpg')}}" alt="">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 01</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, unde! Maxime mollitia fugiat dolore animi rem quis illum voluptate obcaecati ad sed reiciendis rerum, praesentium odio laborum quos quibusdam. Dolor!</p>
                        </div>
                    </div>
                    <div class="featuredBlockTwo">
                        <div class="img">
                            <img src="{{asset('frontend/images/project-02-600x400.jpg')}}" alt="">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 03</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum assumenda fugit, libero ipsum suscipit rem eos voluptatum quasi, tempore molestias dolor sapiente nisi cum. Iste, doloribus neque! Praesentium, molestias asperiores!</p>
                        </div>
                    </div>
                    <div class="featuredBlockThree">
                        <div class="img">
                            <img src="{{asset('frontend/images/project-03-600x400.jpg')}}" alt="photo">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 03</h4>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident eveniet repellat reiciendis sequi iusto maxime perferendis earum voluptatum harum fuga ex dolorum sit quia accusamus, dolorem ea libero sapiente. Aperiam.</p>
                        </div>
                    </div>
                    <div class="featuredBlockFour">
                        <div class="img">
                            <img src="{{asset('frontend/images/project-04-768x511.jpg')}}" alt="photo">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 04</h4>
                           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores numquam sequi, doloremque quidem recusandae quas a veniam maiores, quos nam dignissimos, blanditiis ipsam ex eum aliquam porro inventore corrupti saepe.</p>
                        </div>
                    </div>
                    <div class="featuredBlockFive">
                        <div class="img">
                            <img src="{{asset('frontend/images/project-05-300x200.jpg')}}" alt="photo">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 05</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum provident, magnam voluptas a repellat vitae iusto delectus nam, dolor accusamus non fugiat porro quisquam aut ducimus exercitationem laborum excepturi tempore.</p>
                        </div>
                    </div>
                    <div class="featuredBlockSix">
                        <div class="img">
                            <img src=" {{asset('frontend/images/project-06-768x512.jpg') }}" alt="photo">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 06</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis quisquam molestias tempora fuga quidem, voluptate adipisci expedita aliquam ab perferendis voluptates debitis dolores excepturi totam esse nulla nesciunt quam est.</p>
                        </div>
                    </div>
                    <div class="featuredBlockOne">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-07-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 07</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellendus eos nobis nostrum dolore cupiditate unde rerum nesciunt? Quod ad velit labore neque quia blanditiis atque voluptatum dolorem perspiciatis accusantium?</p>
                        </div>
                    </div>
                    <div class="featuredBlockTwo">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-08-600x400.jpg" alt="">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 08</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellendus eos nobis nostrum dolore cupiditate unde rerum nesciunt? Quod ad velit labore neque quia blanditiis atque voluptatum dolorem perspiciatis accusantium?</p>
                        </div>
                    </div>
                    <div class="featuredBlockThree">
                        <div class="img">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-09-600x400.jpeg" alt="">
                        </div>
                        <div class="div">
                            <h4>Bizning loyihamiz 09</h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur repellendus eos nobis nostrum dolore cupiditate unde rerum nesciunt? Quod ad velit labore neque quia blanditiis atque voluptatum dolorem perspiciatis accusantium?</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection