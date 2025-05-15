@extends('main')

@section('content')
    <section class="contact-hero" id="hero">
        <div class="container">

            <div class="hero hero-contact">
                <h1>Get In Touch</h1>
                <div class="google-map">
                    <iframe id="gmap_canvas"
                            src="https://maps.google.com/maps?q=hollwood&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
                    </iframe>
                </div>
            </div>


        </div>

    </section>
    <section id="form">
        <div class="container">
            <form action="" method="post">
                <div class="form-left">
                    <div class="form-left-top">
                        <h3>LET'S MAKE YOUR BRAND <span>BRILLIANT!</span> </h3>
                        <p>If you would like to work with us or just want to get in touch, we’d love to hear from
                            you!</p>
                    </div>

                    <div class="form-left-center">
                        <div class="info">
                            <div class="address">
                                <h5>Address</h5>
                                <p>Besòs 1, 08174 Sant Cugat del Vallès, Barcelona</p>
                            </div>
                            <div class="email">
                                <h5>Email</h5>
                                <p>Support@uithemez.com</p>
                            </div>
                        </div>
                        <div class="phone">
                            <a href="tel:+18408412569">+1 840 841 25 69</a>
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
                        <li>Send a message</li>
                    </ul>
                    <div class="form-top" >
                        <input type="text" placeholder="Name">
                        <input type="email" placeholder="Email">
                    </div>

                    <input type="text" placeholder="Subject">
                    <textarea placeholder="Message"></textarea>
                    <button class="send" type="submit">Let's Talking <img src="./assets/icons/arrow-top-right (1).svg" alt=""></button>
                </div>
            </form>
        </div>
    </section>
@endsection
