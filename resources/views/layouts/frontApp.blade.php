<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edisson</title>
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


<div id="app" style="overflow: hidden !important">
    <div class="loader">
        <img src="{{ asset('frontend/images/spinner.gif') }}" alt="Loading..." >
    </div>
    <!--==============================================Header==============================================-->
    <div class="container-fluid" id="header">
        <div class="container">
            <div class="header">
                <div class="header_wrapper">
                    <div class="header_logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('frontend/images/Edisson.png') }}" alt="logo"></a>
                    </div>
                    <div v-on:click="mobilNavbar" class="bars">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </div>

                    <div class="header_right">
                        <div class="header_info">
                            <div class="header_infoLeft">
                                <i class="fas fa-phone-alt"></i>
                                <div class="header_text">
                                    <small>Biz bilan bog'lanish</small>
                                    <strong>(99)0067134</strong>
                                </div>
                            </div>
                            <div class="header_infoRight">
                                <i class="far fa-clock"></i>
                                <div class="header_text">
                                    <small>Ish vaqti</small>
                                    <strong>Du - Sha: 10:00 - 18:00</strong>
                                </div>
                            </div>
                        </div>
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
                        <li><a href="{{ route('index') }}" id="salom">Bosh sahifa</a></li>
                        <li><a href="{{ route('aboutUs') }}">Biz haqimizda</a></li>
                        <li><a href="{{ route('ourTeam') }}">Bizning jamoamiz</a></li>
                        <li><a href="{{ route('service') }}">Bizning xizmatlarimiz</a></li>
                        <li><a href="{{ route('project') }}">Loyihalar</a></li>
                        <li><a href="{{ route('contactUs') }}">Biz bilan bog'lanish</a></li>
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

                        <li class="@if(Request::segment(1) == 'index') {{ 'active' }} @endif">

                            <a href="{{ route('index') }}">Bosh sahifa</a>

                        </li>

                        <li class="@if(Request::segment(1) == 'aboutUs') {{ 'active' }} @endif">

                            <a href="{{ route('aboutUs') }}">Biz haqimizda</a>

                        </li>

                        <li class="@if(Request::segment(1) == 'ourTeam') {{ 'active' }} @endif">

                            <a href="{{ route('ourTeam') }}">Bizning jamoamiz</a>

                        </li>

                        <li class="@if(Request::segment(1) == 'services') {{ 'active' }} @endif">

                            <a href="{{ route('service') }}">Bizning xizmatlarimiz</a>

                        </li>

                        <li class="@if(Request::segment(1) == 'project') {{ 'active' }} @endif">

                            <a href="{{ route('project') }}">Loyihalar</a>

                        </li>

                        <li class="@if(Request::segment(1) == 'contactUs') {{ 'active' }} @endif">
                            
                            <a href="{{ route('contactUs') }}">Biz bilan bog'lanish</a>
                            
                        </li>
                        
                    </ul>
                </nav>

                </div>
            </div>


        </div>

    </div>

    <div style="overflow: hidden">

        @yield('content')
    
    </div>



    <!--========================Footer=================================-->
    <div class="container-fluid" id="Footer" id="MultiBrand">
        <div class="container">
            <div class="FooterRow">
                <div class="FooterBoxOne">
                    <div class="logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('frontend/images/Edisson2.png') }}" alt="logo"></a>
                    </div>
                   
                    <div class="social">
                        <ul>
                            <li><a href="https://sq-al.facebook.com/edisson.kokand/"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://t.me/edisson_kokand"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/edisson_kokand/"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="FooterBoxFour">
                    <div class="title">
                        <h3>Biz bilan bog'lanish</h3>
                    </div>
                    <div class="contact">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>   No.320, Fifth Avenue New York,br NY 90210</li>
                            <li><i class="fas fa-phone-alt"></i>  (123) 456-7890</li>
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
    <script src="{{ asset('js/function.js') }}"></script>
    <script src="{{ asset('frontend/js/javascript.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.filter').click(function(){
                $(this).addClass('active').siblings().removeClass('active');
                const value = $(this).attr('data-filter');

                if(value == 'All'){
                    $('.OurServices_BlockOne').show();
                }else{
                    $('.OurServices_BlockOne').not('.'+value).hide();
                    $('.OurServices_BlockOne').filter('.'+value).show();
                }

        })
    })

    $('.OurServices_NavUl').on('click', 'li', function () {
            $(this).addClass('active')
        })
    </script>
    
    <script>
        new Vue({
            el: '#app',
            data: {
                activer: false,
                clickBars: false
            },
            methods: {
                toggle() {
                    this.activer = true

                },
                toggleOff() {
                    this.activer = false
                },
                mobilNavbar() {
                    this.clickBars = !this.clickBars
                }
            },
        })
    </script>
</body>

</html>
