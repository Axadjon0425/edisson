@extends('layouts.frontApp')
@section('content')
            <!--=========================Carusel================================-->
            <div class="container-fluid" id="carusel" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="carusel">
    
    
                    <div class="classOne">
                        <div class="CaruselText">
                            <h1>multi-brand laptop service</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, </p>
                        </div>
                        <a href="#" class="btn btn-primary">laearn more</a>
                    </div>
    
    
                    <div class="classTwo">
                        <div class="CaruselText">
    
                            <h1>10 Yeras of exparience</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, </p>
    
                        </div>
    
                        <a href="#" class="btn btn-primary">laearn more</a>
                    </div>
    
    
                    <div class="classThree">
                        <div class="CaruselText">
    
                            <h1>Fast & Quick Fix</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, dolore architecto amet officiis, </p>
    
                        </div>
    
                        <a href="#" class="btn btn-primary">laearn more</a>
                    </div>
    
    
    
                </div>
            </div>
            <!--=========================Why Choose Us=========================-->
            <div class="container-fluid" id="Choose" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    
                <div class="container">
                    <div class="chooseTitle">
                        <h1>Why Choose Us</h1>
                        <p>fastest repair service with best price!</p>
                    </div>
                    <div class="chooseRow">
                        <div class="chooseBlockOne">
                            <div class="icon">
                                <i class="fas fa-money-bill    "></i>
                            </div>
                            <h4>no fix no fee</h4>
                            <p>We are so confident with our service that if we can’t fix the problem, you don’t pay. All
                                repairs come with a 30 day guarantee.</p>
                            <a href="#">read more <i class="fas fa-arrow-right    "></i></a>
                        </div>
                        <div class="chooseBlockTwo">
                            <div class="icon">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </div>
                            <h4>Quick Repair Process</h4>
                            <p>Our company is reliable, and our work is trusted. We provide worry-free service you can always count on.</p>
                            <a href="#">read more <i class="fas fa-arrow-right    "></i></a>
                        </div>
                        <div class="chooseBlockThree">
                            <div class="icon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <h4>Quick Repair Process</h4>
                            <p>Our company is reliable, and our work is trusted. We provide worry-free service you can always count on.</p>
                            <a href="#">read more <i class="fas fa-arrow-right    "></i></a>
                        </div>
                    </div>
                </div>
    
            </div>
            <!--==== ====================Who We Are============================-->
            <div class="container-fluid" id="weAre" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    <div class="WeAre_Row">
                        <div class="weAre_blockOne">
                            <h3>who we are</h3>
                            <p>Ostrya is an established New York based company, specialised in Computer Repairs and Services, We repair out of warranty laptops and Computer.</p>
                            <a href="#">view services</a>
                        </div>
                        <div class="weAre_blockTwo">
                            <img src="{{ asset('frontend/images/service-02.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--========================Our Services===========================-->
            <div class="container-fluid" id="OurServices" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    <div class="OurServicesTitle">
                        <h3>our services</h3>
                        <p>We are one of the best laptop repairing service provider company in New <br> York and repair your system at your home/office at very cheapest price</p>
                    </div>
                    <div class="OurServices_Nav">
                        <ul>
                            <li><a href="#">All</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Network Support</a></li>
                            <li><a href="#">Software</a></li>
                        </ul>
                    </div>
                    <div class="OurServices_Row">

                        @foreach ($service as $s)
                            
                        @endforeach
                        <div class="OurServices_BlockOne">
                            <div></div>
                            <img src="{{ asset('upload/services/'.$s->photo ) }}" alt="">
                            <a href="#" id="">{{ $s->name }}</a>
                            <p>{{ $s->type }}</p>
                            <a href="#" id="a">Learn more</a>
                        </div>
                    </div>
                
                </div>
            </div>
            <!--========================Featured Works=========================-->
            <div class="container-fluid" id="Featured" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                        <div class="featuredTitle">
                            <h3>Featured Works</h3>
                            <p>All Kinds of Service under One roof</p>
                        </div>
                        <div class="featuredRow">
                            <div class="featuredBlockOne">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-01-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 01</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                            <div class="featuredBlockTwo">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-02-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 03</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                            <div class="featuredBlockThree">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-03-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 03</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                            <div class="featuredBlockFour">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-04-768x511.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 04</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                            <div class="featuredBlockFive">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-05-300x200.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 05</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                            <div class="featuredBlockSix">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-06-768x512.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Our project 06</h4>
                                    <a href="#" class="btn btn-primary">view project</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!--========================Counter================================-->
            <div class="container-fluid" id="counter" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    <div class="box">
                        <div class="icon"><i class="far fa-smile"></i></i></div>
                        <div class="counter">2750</div>
                        <div class="text">HAPPY CUSTOMERS</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                        <div class="counter">1250</div>
                        <div class="text">LAPTOP REPAIRED</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        <div class="counter">950</div>
                        <div class="text">COMPUTER REPAIRED</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fab fa-windows"></i></div>
                        <div class="counter">450</div>
                        <div class="text">OS INSTALLED</div>
                    </div>
                </div>
                
            </div>
            <!--========================Latest from Our Blog===================-->
            <div class="container-fluid" id="LatestBlog" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    <div class="latestBlogTitle">
                        <h3>Latest from Our Blog</h3>
                    </div>
                    <div class="latestBlogRow">
                        @foreach ($ourBlog as $o)
                        <div class="latestBlog_Block">
                            <div class="img">
                                <div></div>
                                <img src="{{ asset('upload/our_blog/'.$o->photo) }}" alt="">
                            </div>
                            <div class="text" style="width: 100%;">
                                <div id="a">
                                    <span>in </span>
                                    <a href="#">maintenance</a>
                                </div>
                                <a href="#" id="aTwo">{{ $o->name }}</a>
                                <p>{{ $o->text }}</p>
                            </div>
                        </div>
                        @endforeach
                       
                </div>
                
            </div>
        </div>
            <!--========================CrauselTwo=============================-->
            <div class="container-fluid" id="caruselTwo" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="caruselTwo">
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-01.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-02.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-04.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-06.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-08.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/client-10.jpg" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-04.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-06.jpg') }}" alt="img">
                    </div>
                    <div class="box">
                        <img src="{{ asset('frontend/images/client-08.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
            <!--========================Multi Brand============================-->
            <div class="container-fluid" id="MultiBrand" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
                <div class="container">
                    <div class="MultiBrandRow"> 
    
                        <div class="MultiBrandBlock_One">
                            <h3>Multi Brand</h3>
                            <h3>Repair & Services</h3>
                            <p>Life without our Pc’s, laptops & printers is just unimaginable! So if these are ailing with hardware or software issues and you are wondering who will fix my PC instantly Our certified experts will resolve them all. From computer repair services, laptop repair services to printer repair services Our expert shall detect all concerns and accomplish everything from software installation to motherboard repair.</p>
                        </div>
    
                        <div class="MultiBrandBlock_Two">
                            <h3>Get a FREE Quote</h3>
                            <form action="">
                                <input type="text" name="" id="" placeholder="Your Name(required)">
                                <input type="email" name="" id="" placeholder="Your Email(required)">
                                <textarea name="" id="" cols="45" rows="5" placeholder="Give Some Details"></textarea>
                                <input class="btn btn-primary" type="submit" name="" id="" value="Get a Quote">
                            </form>
                       </div>
    
                    </div>
                </div>
            </div>
@endsection
