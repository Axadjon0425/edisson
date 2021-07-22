@extends('layouts.frontApp')
@section('content')
            <!--=========================Carusel================================-->
            <div class="container-fluid" id="carusel">
                <div class="carusel">
    
    
                    <div class="classOne">
                        <div class="CaruselText">
                            <h1>Ko'p markali noutbuklar xizmati</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, </p>
                        </div>
                        <a href="#" class="btn btn-primary">Batafsil ma'lumot</a>
                    </div>
    
    
                    <div class="classTwo">
                        <div class="CaruselText">
    
                            <h1>10 yillik tajriba</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, </p>
    
                        </div>
    
                        <a href="#" class="btn btn-primary">Batafsil ma'lumot</a>
                    </div>
    
    
                    <div class="classThree">
                        <div class="CaruselText">
    
                            <h1>Tez va tezkor tuzatish</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea minus illo voluptatibus
                                dolore architecto amet officiis, dolore architecto amet officiis, </p>
    
                        </div>
    
                        <a href="#" class="btn btn-primary">Batafsil ma'lumot</a>
                    </div>
    
    
    
                </div>
            </div>
            <!--=========================Why Choose Us=========================-->
            <div class="container-fluid" id="Choose">
    
                <div class="container">
                    <div class="chooseTitle">
                        <h1>Nega bizni tanlashingiz kerak</h1>
                        <p>Eng tezkor ta'mirlash xizmati eng arzon narx bilan!</p>
                    </div>
                    <div class="chooseRow">
                        <div class="chooseBlockOne">
                            <div class="icon">
                                <i class="fas fa-money-bill    "></i>
                            </div>
                            <h4>Tuzatilmasa pul olinmaydi</h4>
                            <p>Biz o'z xizmatimizga shunchalik ishonamizki, agar biz muammoni hal qila olmasak, siz to'lamaysiz. Al ta'mirlash 30 kunlik kafolat bilan ta'minlanadi.</p>
                        </div>
                        <div class="chooseBlockTwo">
                            <div class="icon">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </div>
                            <h4>Tez ta'mirlash jarayoni</h4>
                            <p>Bizning kompaniyamiz ishonchli va bizning ishimiz ishonchli. Siz har doim ishonishingiz mumkin bo'lgan muammosiz xizmatni taqdim etamiz.</p>
                        </div>
                        <div class="chooseBlockThree">
                            <div class="icon">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <h4>30 kunlik kafolat</h4>
                            <p>Bu shuni anglatadiki, agar sizda takrorlanib turadigan muammo bo'lsa, uni bepul olib keling va ta'mirlang *!</p>
                        </div>
                    </div>
                </div>
    
            </div>
            <!--==== ====================Who We Are============================-->
            <div class="container-fluid" id="weAre">
                <div class="container">
                    <div class="WeAre_Row">
                        <div class="weAre_blockOne">
                            <h3>Biz kimmiz</h3>
                            <p>Edisson - Qo'qonda tashkil etilgan, Kompyuterlarni ta'mirlash va xizmat ko'rsatishga ixtisoslashgan, biz kafolatlangan noutbuklar va kompyuterlarni ta'mirlaymiz.</p>
                        </div>
                        <div class="weAre_blockTwo">
                            <img src="{{ asset('frontend/images/service-02.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--========================Our Services===========================-->
            <div class="container-fluid" id="OurServices">
                <div class="container">
                    <div class="OurServicesTitle">
                        <h3>Bizning xizmatlarimiz</h3>
                        <p>Biz Qo'qondagi eng yaxshi noutbuklarni ta'mirlash bo'yicha xizmat ko'rsatuvchi kompaniyamiz va sizning uyingizda ofisingizda tizimingizni eng arzon narxlarda ta'mirlaymiz.</p>
                    </div>
                    <div class="OurServices_Nav">
                        <ul class="OurServices_NavUl">
                            <li class="filter active" data-filter="All">Barchasi</li>
                            <li class="filter" data-filter="Kompyuter">Kompyuter</li> 
                        </ul>
                    </div>
                    <div class="OurServices_Row">
                        @foreach ($service as $s)
                        <div class="OurServices_BlockOne {{ $s->name }}">
                            <div></div>
                            <img src="{{ asset('upload/services/'.$s->photo ) }}" alt="">
                            <a href="#" id="">{{ $s->name }}</a>
                            <p>{{ Str::limit($s->description, 50) }}</p>
                            <a href="{{ route('service.learnMore', [$s->id]) }}" id="a">Batafsil ma'lumot</a>
                        </div>
                        @endforeach
                    </div>
                
                </div>
            </div>
            <!--========================Featured Works=========================-->
            <div class="container-fluid" id="Featured">
                <div class="container">
                        <div class="featuredTitle">
                            <h3>Tanlangan asarlar</h3>
                            <p>Barcha turdagi xizmatlar bitta tom ostida</p>
                        </div>
                        <div class="featuredRow">
                            <div class="featuredBlockOne">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-01-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 01</h4>
                                    <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                            <div class="featuredBlockTwo">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-02-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 02</h4>
                                      <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                            <div class="featuredBlockThree">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-03-600x400.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 03</h4>
                                      <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                            <div class="featuredBlockFour">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-04-768x511.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 04</h4>
                                      <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                            <div class="featuredBlockFive">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-05-300x200.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 05</h4>
                                      <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                            <div class="featuredBlockSix">
                                <div class="img">
                                    <img src="{{ asset('frontend/images/project-06-768x512.jpg') }}" alt="">
                                </div>
                                <div class="div">
                                    <h4>Bizning loyihamiz 06</h4>
                                      <a href="{{ route('project') }}" class="btn btn-primary">loyihani ko'rish</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!--========================Counter================================-->
            <div class="container-fluid" id="counter">
                <div class="container">
                    <div class="box">
                        <div class="icon"><i class="far fa-smile"></i></i></div>
                        <div class="counter">2750</div>
                        <div class="text">Baxtli mijozlar</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
                        <div class="counter">1250</div>
                        <div class="text">NOUTBUK TA'MIRLANGAN</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-desktop" aria-hidden="true"></i></div>
                        <div class="counter">950</div>
                        <div class="text">KOMPYUTER TA'MIRLANGAN</div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fab fa-windows"></i></div>
                        <div class="counter">450</div>
                        <div class="text">OS O'RNATILDI</div>
                    </div>
                </div>
                
            </div>
            <!--========================Latest from Our Blog===================-->
            <div class="container-fluid" id="LatestBlog">
                <div class="container">
                    <div class="latestBlogTitle">
                        <h3>Bizning blogimizdan so'nggi yangiliklar</h3>
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
                                    <a>maintenance</a>
                                </div>
                                <a id="aTwo">{{ $o->name }}</a>
                                <p>{{ $o->text }}</p>
                            </div>
                        </div>
                        @endforeach
                       
                </div>
                
            </div>
        </div>
            <!--========================CrauselTwo=============================-->
            <div class="container-fluid" id="caruselTwo">
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
            <div class="container-fluid" id="MultiBrand">
                <div class="container">
                    <div class="MultiBrandRow"> 
    
                        <div class="MultiBrandBlock_One">
                            <h3>Ko'p tovar</h3>
                            <h3>Ta'mirlash va xizmat ko'rsatish</h3>
                            <p>Bizning kompyuterlarimiz, noutbuklarimiz va printerlarimizsiz hayotni tasavvur qilib bo'lmaydi! Shunday qilib, agar bu apparat yoki dasturiy ta'minot bilan bog'liq muammolar bo'lsa va siz mening kompyuterimni kim darhol tuzatadi deb o'ylayotgan bo'lsangiz, bizning sertifikatlangan mutaxassislarimiz bularning barchasini hal qilishadi. Kompyuterlarni ta'mirlash, noutbuklarni ta'mirlash xizmatlaridan tortib, printerlarni ta'mirlash xizmatlariga qadar Bizning mutaxassis barcha muammolarni aniqlay oladi va dasturiy ta'minotni o'rnatishdan tortib, anakartni ta'mirlashgacha hamma narsani amalga oshiradi..</p>
                        </div>
    
                        <div class="MultiBrandBlock_Two">
                            <h3>BEPUL narx taklifini oling</h3>
                            <form action="">
                                <input type="text" name="" id="" placeholder="Ismingiz (majburiy)">
                                <input type="email" name="" id="" placeholder="YSizning elektron pochtangiz (majburiy)">
                                <textarea name="" id="" cols="45" rows="5" placeholder="Ba'zi tafsilotlarni bering"></textarea>
                                <input class="btn btn-primary" type="submit" name="" id="" value="Iqtibos oling">
                            </form>
                       </div>
    
                    </div>
                </div>
            </div>
@endsection
