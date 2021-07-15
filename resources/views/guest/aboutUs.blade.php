@extends('layouts.frontApp')
@section('content')
<!--==============================About Us==========================-->
<div class="container-fluid" id="AboutUs" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <div class="AboutUsTitle">
            <h1>About Us</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>
  <!--==== ====================We are Leading Company============================-->
<div class="container-fluid" id="weAre" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <div class="WeAre_Row">
            <div class="weAre_blockOne">
                <h3>We are Leading Company</h3>
                <p>Proin sagittis feugiat elit finibus pretium. Donec et tortor non purus vulputate tincidunt. Cras congue posuer egestas. Aenean varius ex ut tortor laoreet.</p>
                <a href="#">view services</a>
            </div>
            <div class="weAre_blockTwo">
                <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-07.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--=========================Why Choose Us=========================-->
<div class="container-fluid" id="AboutChoose" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">

    <div class="container">
        <div class="AboutChooseRow">
            <div class="chooseBlockOne">
                <div class="icon">
                    <i class="fa fa-wrench" aria-hidden="true"></i>
                </div>
                <h4>Honest Services</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
                
            </div>
            <div class="chooseBlockTwo">
                <div class="icon">
                    <i class="fas fa-cog"></i>
                </div>
                <h4>Quick Repair Process</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
            <div class="chooseBlockThree">
                <div class="icon">
                    <i class="fas fa-history"></i>
                </div>
                <h4>On time delivery</h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore mque.</p>
            </div>
            <div class="chooseBlockFour">
                <div class="icon">
                    <i class="far fa-heart"></i>
                </div>
                <h4>We are pasionate</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>

</div>
<!--=========================About Company=========================-->
<div class="container-fluid" id="Company" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <hr>
        <div class="companyRow">
            <div class="companyBlockOne">
                <h3>About Company</h3>
                <p>We can guarantee to give you a FREE honest, friendly advice about any repairs fixes you need.</p>
            </div>
            <div class="companyBlockTwo">
                <a href="#">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/service-01.jpg" alt="">
                    <div class="title">
                        <h4>Our History</h4>
                        <p>Leading Computer Service Company</p>
                    </div>
                </a>
            </div>
            <div class="companyBlockThree">
                <a href="#">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/service-03.jpg" alt="">
                    <div class="title">
                        <h4>Our Mission</h4>
                        <p>We are the Expert on this Field, Fast and Reliable Service.</p>
                    </div>
                </a>
            </div>
            <div class="companyBlockFour">
                <a href="#">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/project-05.jpg" alt="">
                    <div class="title">
                        <h4>Expanding Goal</h4>
                        <p>Our experts have been featured in press numerous times.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</div>
<!--========================AboutCounter================================-->
<div class="container-fluid" id="AboutCounter" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
    <div class="container">
        <div class="box">
            <div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
            <div class="counter">2460</div>
            <div class="text">LAPTOP REPAIRED</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></i></div>
            <div class="counter">1850</div>
            <div class="text">DESKTOP REPAIRED</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-child"></i></div>
            <div class="counter">5200</div>
            <div class="text">Satisfied Customers</div>
        </div>
        <div class="box">
            <div class="icon"><i class="fas fa-trophy"></i></div>
            <div class="counter">15</div>
            <div class="text">Awards won</div>
        </div>
    </div>
    
</div>
<!--========================Staff===========================-->
<div class="container-fluid" id="Staff">
    <div class="container">
        <div class="StaffTitle">
            <h3>Experienced Staff</h3>
            <p>Our experts have been featured in press numerous times.</p>
        </div>
        <div class="StaffRow">
            <div class="StaffBlock">
                <div class="img">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-01.jpg" alt="staff">
                    
                    <div class="social">
                        <div class="list">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h4>Robert Morgan</h4>
                    <span>Founder & CEO</span>
                    <p>Lorem ipsum per inceptos himenaeos. Curabitur quis enim nunc, nec posuere velit.</p>
                </div>
            </div>
            <div class="StaffBlock">
                <div class="img">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-02.jpg" alt="staff">
                    <div class="social">
                        <div class="list">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram    "></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h4>Taylor White</h4>
                    <span>VP SALES & MARKETING</span>
                    <p>Quisque vestibulum posuere neque, ut viverra massa dignissim ligula eget.</p>
                </div>
            </div>
            <div class="StaffBlock">
                <div class="img">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-04.jpg" alt="staff">
                    <div class="social">
                        <div class="list">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h4>Michelle Carter</h4>
                    <span>SERVICE MANAGER</span>
                    <p>Curabitur posuere quis enim nunc, nec enim nunc posuere velit.</p>
                </div>
            </div>
            <div class="StaffBlock">
                <div class="img">
                    <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-03.jpg" alt="staff">
                    <div class="social">
                        <div class="list">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-tumblr" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="title">
                    <h4>Michelle Carter</h4>
                    <span>SERVICE MANAGER</span>
                    <p>Curabitur posuere quis enim nunc, nec enim nunc posuere velit.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection