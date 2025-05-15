@extends('main')

@section('content')
    <section id="ourservices">
        <div class="container">
            <div class="ourservices">
                <div class="ourservices-header">
                    <div class="left">
                        <ul>
                            <li>Our Services</li>
                        </ul>
                    </div>
                    <div class="right ">
                        <h4>
                            As a tight-knit team of experts, we create memorable and emotional websites,
                            <span>
                  digital experiences, and native apps.
                </span>

                        </h4>
                        <button class=" hover-this play-button service-button">
                            <a href="./services.html">
                                Learn More

                            </a>
                            <i class="bi bi-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <div class="ourservices-cards">
                    <div class="ourservices-card">
                        <div class="ourservices-card-header">
                            <h3>Strategy and
                                Design</h3>
                            <i class="bi bi-bezier"></i>

                        </div>
                        <div class="ourservices-card-description">
                            <p>
                                We provide digital solutions as Website Design,Mobile App Design, Landing Page design, Illustration,
                                Animation increase company’s values
                            </p>
                            <div class="ourservices-card-img">
                                <figure>
                                    <img src="{{asset('images/card1.png')}}" alt="">
                                </figure>
                            </div>
                        </div>


                    </div>
                    <div class="ourservices-card">
                        <div class="ourservices-card-header">
                            <h3>Coding and
                                Implementation</h3>
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div class="ourservices-card-description">
                            <p>
                                We provide digital solutions as Website Design,Mobile App Design, Landing Page design, Illustration,
                                Animation increase company’s values
                            </p>
                            <div class="ourservices-card-img">
                                <figure>
                                    <img src="{{asset('images/card2.png')}}" alt="">
                                </figure>
                            </div>
                        </div>


                    </div>
                    <div class="ourservices-card">
                        <div class="ourservices-card-header">
                            <h3>SEO/Marketing and
                                Advertisment</h3>
                            <i class="bi bi-code-slash"></i>
                        </div>
                        <div class="ourservices-card-description">
                            <p>
                                We provide digital solutions as Website Design,Mobile App Design, Landing Page design, Illustration,
                                Animation increase company’s values
                            </p>
                            <div class="ourservices-card-img">
                                <figure>
                                    <img src="{{asset('images/card3.png')}}" alt="">
                                </figure>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="ourphilosopy">
                    <div class="left">
                        <figure>
                            <img src="{{asset('images/intro.png')}}" alt="">
                        </figure>

                    </div>
                    <div class="right">
                        <ul>
                            <li>Our Philosophy</li>
                        </ul>
                        <h4>
                            We help passionate Founders perfect theirs design & development game.
                            <span>
                  Let’s aim for the
                  top together!
                </span>

                        </h4>
                        <button class=" hover-this play-button service-button philosophy-button">
                            <a href="./services.html">
                                About Hubfolio
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </button>
                    </div>

                </div>
                <div class="ticker-wrap">
                    <div class="ticker">
                        <ul>
                            <li>AI-Driven Solutions</li>
                            <li>Flexible Price</li>
                            <li>User Centric</li>
                            <li>User Centric Design</li>
                            <li>AI-Driven Solutions</li>
                            <li>Flexible Price</li>
                            <li>User Centric</li>
                            <li>User Centric Design</li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>

    </section>

    <section id="featured-works">
        <div class="container">
            <div class="featured  container">
                <div class="featured-left">
                    <ul>
                        <li>Featured Works</li>
                    </ul>
                </div>
                <div class="featured-right">
                    <h4>
                        Our user-centered design encourages
                        <span>
                productivity & boosts revenue.
              </span>
                    </h4>
                </div>
            </div>
            <div class="featured-card-section">
                <div class="featured-cards">
                    <div class="featured-card">
                        <div class="featured-card-left">
                            <div class="top">
                                <h3>Unerio Residential
                                    Complex Landing page </h3>
                            </div>
                            <div class="bottom">
                                <p>This paragraph is short description to describe about this project, you can use it to improve SEO
                                    or highlight some key result of this project</p>

                                <div class="buttons">
                                    <button>
                                        Development
                                    </button>
                                    <button>
                                        UI/UX
                                    </button>
                                    <button>
                                        Ullustration
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="featured-card-right">
                            <img src="{{asset("images/testimonials1.jpg")}}" alt="">
                        </div>
                    </div>
                    <div class="featured-card">
                        <div class="featured-card-left">
                            <div class="top">
                                <h3>Archin Architecture Studio </h3>
                            </div>
                            <div class="bottom">
                                <p>This paragraph is short description to describe about this project, you can use it to improve SEO
                                    or highlight some key result of this project</p>

                                <div class="buttons">
                                    <button>
                                        Mobile Responsive
                                    </button>
                                    <button>
                                        UX design
                                    </button>

                                </div>
                            </div>

                        </div>
                        <div class="featured-card-right">
                            <img src="{{asset('images/testimonials2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="featured-card">
                        <div class="featured-card-left">
                            <div class="top">
                                <h3>Jorger Clarkson - Architect
                                    Personal Portfolio </h3>
                            </div>
                            <div class="bottom">
                                <p>This paragraph is short description to describe about this project, you can use it to improve SEO
                                    or highlight some key result of this project</p>

                                <div class="buttons">
                                    <button>
                                        UI/UX
                                    </button>
                                    <button>
                                        Webflow
                                    </button>

                                </div>
                            </div>

                        </div>
                        <div class="featured-card-right">
                            <img src="./assets/images/testimonials3.jpg" alt="">
                        </div>
                    </div>
                    <div class="featured-card">
                        <div class="featured-card-left">
                            <div class="top">
                                <h3>Jorger Clarkson - Architect
                                    Personal Portfolio </h3>
                            </div>
                            <div class="bottom">
                                <p>This paragraph is short description to describe about this project, you can use it to improve SEO
                                    or highlight some key result of this project</p>

                                <div class="buttons">
                                    <button>
                                        UI/UX
                                    </button>
                                    <button>
                                        Webflow
                                    </button>

                                </div>
                            </div>

                        </div>
                        <div class="featured-card-right">
                            <img src="./assets/images/testimonials4.jpg" alt="">
                        </div>
                    </div>


                </div>
                <div class="btn-works">
                    <button class=" featured-works-button hover-this play-button service-button philosophy-button">
                        <a href="./services.html">
                            Check Our Portfolio
                            <i class="bi bi-arrow-up-right"></i>
                        </a>
                    </button>
                </div>

            </div>

        </div>



    </section>
    <section id="our-clients">
        <div class="container">
            <div class="our-clients">
                <ul>
                    <li>Our Clients & Partners</li>
                </ul>
                <div class="brands">
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand1.svg" alt="">
                        </figure>
                    </div>
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand2.svg" alt="">
                        </figure>
                    </div>
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand3.svg" alt="">
                        </figure>
                    </div>
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand4.svg" alt="">
                        </figure>
                    </div>
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand5.svg" alt="">
                        </figure>
                    </div>
                    <div class="brand">
                        <figure>
                            <img src="./assets/images/brand5.svg" alt="">
                        </figure>
                    </div>


                </div>
            </div>
        </div>


    </section>

    <section id="testimonials">
        <div class="featured  container">
            <div class="featured-left">
                <ul>
                    <li>Testimonials</li>
                </ul>
            </div>
            <div class="featured-right">
                <h4>
                    We’ve helped hundreds of partners,
                    to achieve their goals and
                    <span>
              stellar feedback,
              is our reward!
            </span>
                </h4>
                <button class="testimonials-button">
                    <div class="left">
                        <img src="./assets/images/logotestimonails.svg" alt="">
                    </div>
                    <div class="right">
                        <div class="top">
                            <p class="rating">4.9/5</p>
                            <i class="fa-star"></i>
                        </div>
                        <div class="rating-desc ">
                            <p>based on 24 rewies</p>
                        </div>
                    </div>


                </button>
            </div>
        </div>

        <div class="testimonials-carousel">
            <div class="carousel-container container">
                <div class="carousel-track">
                    <div class="testimonials-card">
                        <div class="rating ">
                            <div class="rating-top">
                                <div class="rating-value">5.0</div>
                                <div class="stars">★★★★★</div>
                            </div>

                            <div class="text">
                                <h6>Thank you so much for the support of Hubfolio team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. Hubfolio will always be our 1st choice.</h6>
                            </div>

                        </div>
                        <div class="user-info">
                            <div class="left"><img src="./assets/images/avatar1.jpg" alt=""></div>
                            <div class="right">
                                <h6>Bradley Gordon</h6>
                                <p>CEO & Founder, Archin Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="rating ">
                            <div class="rating-top">
                                <div class="rating-value">5.0</div>
                                <div class="stars">★★★★★</div>
                            </div>

                            <div class="text">
                                <h6>Thank you so much for the support of Hubfolio team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. Hubfolio will always be our 1st choice.</h6>
                            </div>

                        </div>
                        <div class="user-info">
                            <div class="left"><img src="./assets/images/avatar2.jpg" alt=""></div>
                            <div class="right">
                                <h6>Bradley Gordon</h6>
                                <p>CEO & Founder, Archin Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="rating ">
                            <div class="rating-top">
                                <div class="rating-value">5.0</div>
                                <div class="stars">★★★★★</div>
                            </div>

                            <div class="text">
                                <h6>Thank you so much for the support of Hubfolio team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. Hubfolio will always be our 1st choice.</h6>
                            </div>

                        </div>
                        <div class="user-info">
                            <div class="left"><img src="./assets/images/avatar3.jpg" alt=""></div>
                            <div class="right">
                                <h6>Bradley Gordon</h6>
                                <p>CEO & Founder, Archin Studio</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonials-card">
                        <div class="rating ">
                            <div class="rating-top">
                                <div class="rating-value">5.0</div>
                                <div class="stars">★★★★★</div>
                            </div>

                            <div class="text">
                                <h6>Thank you so much for the support of Hubfolio team, who have been with our business for more than 3 years. A long journey with many exciting experiences and moments. Hubfolio will always be our 1st choice.</h6>
                            </div>

                        </div>
                        <div class="user-info">
                            <div class="left"><img src="./assets/images/avatar1.jpg" alt=""></div>
                            <div class="right">
                                <h6>Bradley Gordon</h6>
                                <p>CEO & Founder, Archin Studio</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section>
    <section id="award ">
        <div class="container">
            <div class=" award container">
                <div class="featured-left">
                    <ul>
                        <li>Awards & Recognition</li>
                    </ul>
                </div>
                <div class="featured-right">
                    <h4>
                        Efforts to receive worthy rewards, awards & recognition
                        <span>
                help us affirm our brand.
              </span>
                    </h4>

                </div>
            </div>
            <table class="award-table">
                <tr>
                    <th>Hosted</th>
                    <th>Award title</th>
                    <th>Date</th>
                </tr>
                <tbody>
                <tr>
                    <td>Awwwards</td>
                    <td>SOTY 2023 - 1st Winner</td>
                    <td>May 2023</td>
                </tr>
                <tr>
                    <td>css awards</td>
                    <td>Top 5 Best of eCommerce Websites 2022</td>
                    <td>Dec 2022</td>
                </tr>
                <tr>
                    <td>Awwwards</td>
                    <td>Honor SOTD November, 2022r</td>
                    <td>Nov 2022</td>
                </tr>
                <tr>
                    <td>Behance Portfolio</td>
                    <td>Winner – US Behance Portfolio Review 2021</td>
                    <td>Aug 2021</td>
                </tr>
                <tr>
                    <td>ui/ux global award</td>
                    <td>Top 10 Best of Mobile App Design 2021</td>
                    <td>Mar 2021</td>
                </tr>
                <tr>
                    <td>fwa us award</td>
                    <td>Winner – Best of Architecture Website 2020</td>
                    <td>Sep 2020</td>
                </tr>
                </tbody>
            </table>
            <button class=" table-button hover-this play-button ">
                <a href="./services.html">
                    Show More

                </a>
                <i class="bi bi-chevron-right"></i>
            </button>

        </div>


    </section>

    <section id="articles">
        <div class="container">
            <div class=" award container">
                <div class="featured-left">
                    <ul>
                        <li>Latest Articles</li>
                    </ul>
                </div>
                <div class="featured-right">
                    <h4>
                        The place that we share everything related to
                        <span>
                design trends, tips and more.
              </span>
                    </h4>


                </div>

            </div>
            <div class="article-cards">
                <div class="article-card">
                    <figure>
                        <img src="./assets/images/articlecard.jpg" alt="">
                    </figure>

                    <h4>Hubfolio agency revolutionizes work with the
                        power of AI-Driven</h4>
                    <p>Design Trends
                        <span>/ May 15, 2024 </span>
                    </p>
                </div>
                <div class="article-card">
                    <figure>
                        <img src="./assets/images/articlecard2.jpg" alt="">
                    </figure>

                    <h4>Hubfolio agency revolutionizes work with the power of AI-Driven</h4>
                    <p>Experience

                        <span>/ May 15, 2024 </span>
                    </p>
                </div>


            </div>
        </div>

    </section>
    <section id="contact-us">
        <div class="container">
            <div class="contact-us">
                <div class="left">
                    <h3>
                        Success is a team play, right?
                        <span>Let’s work together! </span>

                    </h3>

                    <div class="bottom">
                        <p>+068 5681 96 96</p>
                        <span>Call us for urgent</span>
                        <button class=" hover-this play-button service-button philosophy-button">
                            <a href="./services.html">
                                About Hubfolio
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </button>
                    </div>

                </div>
                <div class="right">
                    <form method="post" action="">
                        <div class="form-box">
                            <div class="fullname">
                                <label for="fullname">Full Name <span>*</span></label>
                                <input type="text" id="fullname" placeholder="Your full name">
                            </div>
                            <div class="email-address">
                                <label for="email">Email Address <span>*</span></label>
                                <input type="email" id="email" placeholder="Your email address">
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="subject">
                                <label for="subject">Subject <span>*</span></label>
                                <input type="text" id="subject" placeholder="subject">
                            </div>
                            <div class="budget">
                                <label for="budget">Your Budget <span class="optional">(Optional)</span></label>
                                <input type="text" id="budget" placeholder="A range of budget for project">
                            </div>
                        </div>
                        <div class="form-box message-box">
                            <div class="message">
                                <label for="message">Message</label>
                                <textarea id="message" placeholder="Write your message here..."></textarea>
                            </div>
                        </div>
                        <button class="send-button">
                            Send Your Message <i class="bi bi-arrow-up-right"></i>
                        </button>
                    </form>
                </div>

            </div>
        </div>

    </section>
@endsection
