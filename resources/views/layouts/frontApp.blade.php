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
    <div class="loader">
        <img src="{{ asset('frontend/images/spinner.gif') }}" alt="Loading..." >
    </div>
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
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About us</a></li>
                        <li><a href="{{ route('ourTeam') }}">Our team</a></li>
                        <li><a href="{{ route('service') }}">Our services</a></li>
                        <li><a href="{{ route('project') }}">Projects</a></li>
                        <li><a href="{{ route('contactUs') }}">Contact us</a></li>
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
                        <li><a href="{{ route('index') }}">Home</a></li>
                        <li><a href="{{ route('aboutUs') }}">About us</a></li>
                        <li><a href="{{ route('ourTeam') }}">Our team</a></li>
                        <li><a href="{{ route('service') }}">Our services</a></li>
                        <li><a href="{{ route('project') }}">Projects</a></li>
                        <li><a href="{{ route('contactUs') }}">Contact us</a></li>
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


    @yield('content')



    <!--========================Footer=================================-->
    <div class="container-fluid" id="Footer" id="MultiBrand" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
        <div class="container">
            <div class="FooterRow">
                <div class="FooterBoxOne">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('frontend/images/Edisson2.png') }}" alt="logo"></a>
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
    <script>
    window.addEventListener("load", function () {
    const loader = document.querySelector(".loader");

    loader.className += " hidden";
});
    </script>
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
                mobilNavbar() {
                    this.clickBars = !this.clickBars
                }
            },
        })
    </script>
</body>

</html>
