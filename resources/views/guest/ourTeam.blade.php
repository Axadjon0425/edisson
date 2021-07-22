@extends('layouts.frontApp')
@section('content')
       <!--==============================Our Team==========================-->
       <div class="container-fluid" id="AboutUs" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
        <div class="container">
            <div class="AboutUsTitle">
                <h1>Bizning jamoamiz</h1>
                <ul>
                    <li><a href="{{ route('index') }}">Bosh sahifa</a></li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Bizning jamoamiz</li>
                </ul>
            </div>
        </div>
    </div>
     <!--========================Experienced Staff===========================-->
     <div class="container-fluid" id="Staff">
        <div class="container">
            <div class="StaffRow">
                <div class="StaffBlock wow fadeInUp">
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
                <div class="StaffBlock wow fadeInUp">
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
                <div class="StaffBlock wow fadeInUp">
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
                <div class="StaffBlock wow fadeInUp">
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
            <div class="StaffRow">
                <div class="StaffBlock wow fadeInUp">
                    <div class="img">
                        <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-05.jpg" alt="staff">
                        
                        <div class="social">
                            <div class="list">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Stephen Carter</h4>
                        <span>SERVICE MANAGER</span>
                        <p>Cum penatibus et magnis quis enim nunc massa, nec enim nunc posuere velit.</p>
                    </div>
                </div>
                <div class="StaffBlock wow fadeInUp">
                    <div class="img">
                        <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-06.jpg" alt="staff">
                        <div class="social">
                            <div class="list">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Lynda Carter</h4>
                        <span>SUPPORT NINJA</span>
                        <p>Posuere ouisque vestibulum posuere neque, ut viverra massa tincidunt.</p>
                    </div>
                </div>
                <div class="StaffBlock wow fadeInUp">
                    <div class="img">
                        <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-07.jpg" alt="staff">
                        <div class="social">
                            <div class="list">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Henry Winkler</h4>
                        <span>SERVICE ENGINEER</span>
                        <p>Donec class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    </div>
                </div>
                <div class="StaffBlock wow fadeInUp">
                    <div class="img">
                        <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/team-08.jpg" alt="staff">
                        <div class="social">
                            <div class="list">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
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