@extends('main')

@section('content')
    <section class="contact-hero" id="hero">
        <div class="container">

            <div class="hero hero-contact">
                <h1>İdeyaların var?</h1>
                <div class="google-map">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3038.297671898199!2d49.849082976010216!3d40.402255971441974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDDCsDI0JzA4LjEiTiA0OcKwNTEnMDYuMCJF!5e0!3m2!1sen!2saz!4v1750264558473!5m2!1sen!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>


        </div>

    </section>
    <section id="form">
        <div class="container">
            <form action="" method="post">
                <div class="form-left">
                    <div class="form-left-top">
                        <h3>İlk addımı sən at Qalanı  <span><b>BİZLİKDİR!</b></span> </h3>
                        <p>Layihə, əməkdaşlıq, ya da sadəcə maraq? Söhbətə buradan başlayaq!</p>
                    </div>

                    <div class="form-left-center">
                        <div class="info">
                            <div class="address">
                                <h5>Ünvan</h5>
                                <p>Atatürk prospekti 2a</p>
                            </div>
                            <div class="email">
                                <h5>Email</h5>
                                <p>contact@jobing.az</p>
                            </div>
                        </div>
                        <div class="phone">
                            <a href="tel:+707307230">070 730 72 30</a>
                        </div>
                    </div>

                    <div class="form-left-footer">
                        <div class="socials-contact">
                            <a href="#">Facebook</a>
                            <a href="#">Twitter</a>
                            <a href="#">LinkedIn</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                </div>

                <div class="form-right">
                    <ul>
                        <li>Mesaj Göndər</li>
                    </ul>
                    <div class="form-top" >
                        <input type="text" placeholder="Ad">
                        <input type="email" placeholder="Email">
                    </div>

                    <input type="text" placeholder="Müraciət başlığı">
                    <textarea placeholder="Mesaj yaz"></textarea>
                    <button class="send" type="submit">Göndər <img src="{{asset('icons/arrow-top-right (1).svg')}}" alt=""></button>
                </div>
            </form>
        </div>
    </section>
@endsection
