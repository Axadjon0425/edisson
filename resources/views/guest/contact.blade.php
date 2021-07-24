@extends('layouts.frontApp')
@section('content')
    <!--=============================Contact Us================================-->
    <div class="container-fluid" id="AboutUs" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
        <div class="container">
            <div class="AboutUsTitle">
                <h1>Biz bilan bog'lanish</h1>
                <ul>
                    <li><a href="index.html">Bosh sahifa</a></li>
                    <li><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li>Biz bilan bog'lanish</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================Google Map================================-->
    <div class="container-fluid" id="GoogleMap" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">

        <iframe class="Map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3032.2128389125755!2d70.95985281476665!3d40.536886656247965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38baef867427e2c1%3A0xaa5d8bbb9bee93!2sLife%20Tech!5e0!3m2!1sen!2s!4v1624855764742!5m2!1sen!2s"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
    <!--==============================Conatct==================================-->
    <div class="container-fluid" id="contact" v-on:mouseover="toggleOff" v-on:click="searchActiveOff">
        <div class="container">
            <div class="ContactRow">
                <div class="ContactForm">
                    <h3>Bizga xabar yuboring</h3>
                    <form action="">
                        <input type="text" placeholder="To'liq ismingiz*">
                        <input type="email" name="" id="" placeholder="Sizning elektron manzilingiz*">
                        <input type="text" placeholder="Mavzu">
                        <textarea name="" id="" cols="30" rows="5" placeholder="Xabar"></textarea>
                        <input type="submit" value="Xabar yuboring" class="btn btn-primary"> 
                    </form>
                </div>
                <div class="ContactInfo">
                    <h3>Aloqa haqida ma'lumot</h3>
                    <p>Varius porttitor ullamcorper mattis ultricies hymenaeos arcu lorem viverra quisque vivamus cubilia ipsum augue sodales habitant gravida consequat, pede arcu, mauris. Lobortis non dictumst tempus blandit consectetuer venenatis mollis quis nibh ultrices diam quisque magnis .</p>
                    <ul>
                        <li><span>location</span>No.320, Fifth Avenue New York, NY 90210</li>
                        <li><span>PHONE</span>(123) 456-7890</li>
                        <li><span>Fax</span>(123) 456-7890</li>
                        <li><span>Email</span>info@yourdin.com </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection