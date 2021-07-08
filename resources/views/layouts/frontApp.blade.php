<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostrya</title>
    <!-----------------Wow.js--------------------->
    <link rel="stylesheet" href="{{ asset('frontend/style/animate.css') }}">
    <!--==============Slider====================-->
    <link rel="stylesheet" href="{{asset('frontend/slick-1.8.1/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/slick-1.8.1/slick/slick-theme.css')}}">
    <!--==============Booptstrapt=================-->
    <link rel="stylesheet" href="{{asset('frontend/boots/css/bootstrap.min.css')}}">
    <!--==============Icon=========================-->
    <link rel="stylesheet" href="{{asset('frontend/icons/css/all.min.css')}}">
    <!--==============CSS=========================-->
    <link rel="stylesheet" href="{{asset('frontend/style/style.css')}}">
    <!--==============Mobil=========================-->
    <link rel="stylesheet" href="{{asset('frontend/style/mobil.css')}}">
    <!--==============Fonts===========================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;1,700&display=swap"
          rel="stylesheet">

</head>

<body>


<div id="app">
    <!--==============================================Header==============================================-->
    <div class="container-fluid" id="header">
        <div class="container">
            <div class="header">
                <div class="header_wrapper">
                    <div class="header_logo">
                        <a href="#"><img src="{{ asset('frontend/images/Edisson.png') }}" alt="logo"></a>
                    </div>
                    <div v-on:click="mobilNavbar" class="bars">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <div class="header_right">
                        <div class="header_info">
                            <div class="header_infoLeft">
                                <i class="fas fa-phone-alt"></i>
                                <div class="header_text">
                                    <small>Contact us</small>
                                    <strong>(99)0067134</strong>
                                </div>
                            </div>
                            <div class="header_infoRight">
                                <i class="far fa-clock"></i>
                                <div class="header_text">
                                    <small>Working time</small>
                                    <strong>Mon - Sat: 10:00 - 18:00</strong>
                                </div>
                            </div>
                        </div>
                        <a href="#">Make An Appointment</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid" id="mobil_Nav">
        <div class="container" id="mobilNav">
            <div class="mobilNav" :class="clickBars ? 'mobilActiv' : ' ' ">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li v-on:click="mobilActive" :class="mobilA ? 'active' : ' ' ">
                            <a>Pages <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                <div class="down-item">
                                    <ul>
                                        <li><a href="aboutUs.html">About us</a></li>
                                        <li><a href="OurTeam.html">Our team</a></li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li><a href="ourServeces.html">Our services</a></li>
                        <li><a href="Projects.html">Projects</a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--==============================Navbar============================-->
    <div class="navbar">
        <div class="container">

            <div class="nav_wrapper">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>

                        <li v-on:mouseover="toggle" :class="activer ? 'active' : ' ' ">
                            <a href="#">Pages
                                <div class="down-item">
                                    <ul>
                                        <li><a href="aboutUs.html">About us</a></li>
                                        <li><a href="OurTeam.html">Our team</a></li>
                                    </ul>
                                </div>
                            </a>
                        </li>
                        <li><a href="ourServeces.html">Our services</a></li>
                        <li><a href="Projects.html">Projects</a></li>
                        <li><a href="Contact.html">Contact us</a></li>
                    </ul>
                </nav>

                <div class="search">
                    <div :class="search ? 'searchActive' : ' ' " v-on:click="searchActive" id="searchIcon">
                        <i class="fa fa-search" aria-hidden="true"></i>

                    </div>

                    <div :class="search ? 'searchActive' : ' ' ">
                        <input type="search" name="" id="" placeholder="Search...">

                    </div>
                </div>
            </div>


        </div>

    </div>

{{--    @yield('content')--}}

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



    <!--========================Footer=================================-->
    <div class="container-fluid" id="Footer" id="MultiBrand" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
        <div class="container">
            <div class="FooterRow">
                <div class="FooterBoxOne">
                    <div class="logo">
                        <a href="#"><img src="https://iwebdc.com/demo/ostrya/wp-content/themes/ostrya/assets/images/logo-transparent.png" alt="logo"></a>
                    </div>
                    <div class="text">
                        <p>Being the best in our field means that we are committed to every project, we have ingenious ideas that become reality and we make every client happy.</p>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="FooterBoxTwo">
                    <div class="title">
                        <h3>Our Services</h3>
                    </div>
                    <div class="link">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Laptop Repiar</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Computer Repiar</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Cloud Services</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Hardware Update</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Apple Products Repair</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>Data Backup & Recovery</a></li>
                        </ul>
                    </div>
                </div>
                <div class="FooterBoxThree">
                    <div class="title">
                        <h3>Latest news</h3>
                    </div>
                    <div class="news">
                        <div class="newsOne">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/post-07-150x150.jpg" alt="img">
                            <div class="text">
                                <a href="#">Why Your Computer Hates You</a>
                                <span>Jan 14, 2021</span>
                            </div>
                        </div>
                        <div class="newsTwo">
                            <img src="https://iwebdc.com/demo/ostrya/wp-content/uploads/2016/11/post-06-150x150.jpg" alt="img">
                            <div class="text">
                                <a href="#">Easy Tips To Computer Repair</a>
                                <span>Jan 14, 2021</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="FooterBoxFour">
                    <div class="title">
                        <h3>Contact Us</h3>
                        <p>Ostrya is the simple and easy to use WordPress Theme. </p>
                    </div>
                    <div class="contact">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>   No.320, Fifth Avenue New York,br NY 90210</li>
                            <li><i class="fas fa-phone-alt"></i>  (123) 456-7890</li>
                            <li><i class="fas fa-print"></i>  (123) 456-7777</li>
                            <li><i class="fas fa-envelope"></i>  <a href="#">info@yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

    <!--Vue.js==================-->
    <script src="{{asset('frontend/js/vue.js')}}"></script>
    <!--Wow.js==================-->
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <!--Bootsrap================-->
    <script src="{{asset('frontend/boots/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('frontend/boots/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/boots/js/bootstrap.min.js')}}"></script>
    <!--Icons==================-->
    <script src="{{asset('frontend/icons/js/all.js')}}"></script>
    <!--JQurey=================-->
    <script src="{{asset('frontend/js/jQuery.min.js')}}"></script>
    <!--Slider=================-->
    <script src="code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('frontend/slick-1.8.1/slick/slick.min.js')}}"></script>
    <!--Counter===================-->
    <script>
        $(document).ready(function (){
            $(".counter").counterUp({
                delay: 10,
                time: 1200
            });
        })
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!--JavaScript=============-->
    <script src="{{asset('frontend/js/javasgript.js')}}"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                activer: false,
                search: false,
                mobilA: false,
                clickBars: false
            },
            methods: {
                toggle() {
                    this.activer = true

                },
                toggleOff() {
                    this.activer = false
                },
                searchActive() {
                    this.search = true
                },
                searchActiveOff() {
                    this.search = false
                },
                mobilActive() {
                    this.mobilA = !this.mobilA
                },
                mobilNavbar() {
                    this.clickBars = !this.clickBars
                }
            },
        })
    </script>
</body>

</html>
