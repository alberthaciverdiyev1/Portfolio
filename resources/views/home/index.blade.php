@extends('main')

@section('content')
    <section id="ourservices">
        <div class="container">
            <div class="ourservices">
                <div class="ourservices-header">
                    <div class="left">
                        <ul>
                            <li>Xidmətlərimiz</li>
                        </ul>
                    </div>
                    <div class="right ">
                        <h4>
                            Peşəkar komandamızla biznesinizə dəyər qatan veb saytlar və SEO həlləri təqdim edirik.
{{--                            <span>digital experiences, and native apps.</span>--}}

                        </h4>
                    </div>
                </div>
                <div class="ourservices-cards">

                    @forelse($services as $service)

                        <div class="ourservices-card">
                            <div class="ourservices-card-header">
                                <h3>{{$service->name}}</h3>
                                <img height="40px" src="{{asset($service->icon())}}" alt="">

                            </div>
                            <div class="ourservices-card-description">
                                <p>
                                    {{$service->description}}
                                </p>
                                <div class="ourservices-card-img">
                                    <figure>
                                        <img height="330px" src="{{asset($service->image())}}" alt="{{$service->name}}">
                                    </figure>
                                </div>
                            </div>


                        </div>

                    @empty
                    @endforelse
                </div>
                <div class="ourphilosopy">
                    <div class="left">
                        <figure>
                            <img src="{{asset('images/intro.png')}}" alt="">
                        </figure>

                    </div>
                    <div class="right">
                        <ul>
                            <li>Məqsədimiz</li>
                        </ul>
                        <h4>
                            Startap və şirkətlərin veb sahədə ilk addımlarını düzgün atması və   <span style="color: #FF6600"> internetdə effektiv şəkildə tanınmasına dəstək oluruq.


                </span>

                        </h4>

                    </div>

                </div>
                <div class="ticker-wrap">
                    <div class="ticker">
                        <ul>
                            <li>Müştəri Yönümlü Həllər</li>
                            <li>Müasir Dizayn</li>
                            <li>7/24 Xidmət</li>
                            <li>Müştəri Yönümlü Həllər</li>
                            <li>Müasir Dizayn</li>
                            <li>7/24 Xidmət</li>
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
                        <li>Görülən işlərdən</li>
                    </ul>
                </div>
                <div class="featured-right">
                    <h4>
                        <span style="color: #FF6600">Müştərilərin yüksək məmnuniyyəti və müsbət rəyləri bizim üçün ən böyük uğurdur.

              <span/>
                    </h4>
                </div>
            </div>
            <div class="featured-card-section">
                <div class="featured-cards">
                    @forelse($projects as $project)
                        <div class="featured-card">
                            <div class="featured-card-left">
                                <div class="top">
                                    <h3>{{$project->name}}</h3>
                                </div>
                                <div class="bottom">
                                    <p>{{$project->description}}</p>

                                    <div class="buttons">
                                        @forelse($project->tags as $tag)
                                            <button>
                                                {{$tag}}
                                            </button>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>

                            </div>
                            <div class="featured-card-right">
                                <img src="{{asset($project->image())}}" alt="">
                            </div>
                        </div>
                    @empty
                        <div class="featured-card">
                            <div class="featured-card-left">
                                <div class="top">
                                    <h3>Unerio Residential
                                        Complex Landing page </h3>
                                </div>
                                <div class="bottom">
                                    <p>This paragraph is short description to describe about this project, you can use
                                        it to improve SEO
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
                    @endforelse
                </div>
                <div class="btn-works">
                    <button class=" featured-works-button hover-this play-button service-button philosophy-button">
                        <a href="{{route('projects')}}">
                           Portfolio bax
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
                    <li>Partnyorlarımız</li>
                </ul>
                <div class="brands">
                    @forelse($partners as $partner)
                        <div class="brand">
                            <figure>
                                <img src="{{$partner->image()}}" alt="">
                            </figure>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>


    </section>

    <section id="testimonials">
        <div class="featured  container">
            <div class="featured-left">
                <ul>
                    <li>Biz kimik?</li>
                </ul>
            </div>
            <div class="featured-right">
                <h4>
                    İki ildən artıqdır ki, 20+ partnyorumuza hədəflərinə çatmaqda kömək etmişik
                    <span> – onların yüksək məmnuniyyəti və müsbət rəyləri bizim üçün ən böyük uğurdur.</span>
                </h4>
                <button class="testimonials-button">
                    <div class="left">
                        <img src="{{asset('/images/logotestimonails.svg')}}" alt="">
                    </div>
                    <div class="right">
                        <div class="top">
                            <p class="rating">4.9/5</p>
                            <i class="fa-star"></i>
                        </div>
                        <div class="rating-desc ">
                            <p>20+ rəyə əsasən</p>
                        </div>
                    </div>


                </button>
            </div>
        </div>

        <div class="testimonials-carousel">
            <div class="carousel-container container">
                <div class="carousel-track">
                    @forelse($testiotionals as $user)
                        <div class="testimonials-card">
                            <div class="rating ">
                                <div class="rating-top">
                                    @php
                                        $rate = !str_contains($user->rate, '.') ? number_format($user->rate, 1) : $user->rate;
                                        $fullStars = floor($rate);
                                        $halfStar = ($rate - $fullStars) >= 0.5;
                                        $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                                    @endphp

                                    <div class="rating-value">{{ $rate }}</div>
                                    <div class="stars">
                                        {!! str_repeat('★', $fullStars) !!}
                                        {!! $halfStar ? '☆' : '' !!}
                                        {!! str_repeat('✩', $emptyStars) !!}
                                    </div>

                                </div>

                                <div class="text">
                                    <h6>{{$user->description}}</h6>
                                </div>

                            </div>
                            <div class="user-info">
                                <div class="left"><img src="{{$user->image()}}" alt=""></div>
                                <div class="right">
                                    <h6>{{$user->name}}</h6>
                                    <p>{{$user->position}}</p>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse
                </div>
            </div>


        </div>


    </section>

    <section id="contact-us">
        <div class="container">
            <div class="contact-us">
                <div class="left">
                    <h3>
                        İdeyanız var?
                        <span>Biz onu gerçəkləşdirməyə hazırıq.</span>

                    </h3>


                </div>
                <div class="right">
                    <form id="contactForm">
                        <div class="form-box">
                            <div class="fullname">
                                <label for="fullname">Ad, Soyad <span>*</span></label>
                                <input type="text" id="fullname" placeholder="Sizin adınız və soyadınız">
                                <span class="error-message" id="error-fullname"></span>
                            </div>
                            <div class="email-address">
                                <label for="email">Email <span>*</span></label>
                                <input type="email" id="email" placeholder="Email Adresiniz">
                                <span class="error-message" id="error-email"></span>
                            </div>
                        </div>
                        <div class="form-box">
                            <div class="subject">
                                <label for="subject">Başlıq <span>*</span></label>
                                <input type="text" id="subject" placeholder="Başlıq">
                                <span class="error-message" id="error-subject"></span>
                            </div>
                            <div class="budget">
                                <label for="budget">Büdcəniz <span class="optional">(Məcburi deyil)</span></label>
                                <input type="text" id="budget" placeholder="Sizə uyğun olan büdcənizi daxil edin">
                                <span class="error-message" id="error-budget"></span>
                            </div>
                        </div>
                        <div class="form-box message-box">
                            <div class="message">
                                <label for="message">Mesaj</label>
                                <textarea id="message" placeholder="Mesajınızı yazın..."></textarea>
                                <span class="error-message" id="error-message"></span>
                            </div>
                        </div>

                        <span style="color: #00bb00" id="controller-message"></span>

                        <button type="submit" class="send-button">
                            Göndərin <i class="bi bi-arrow-up-right"></i>
                        </button>
                    </form>

                </div>

            </div>
        </div>

    </section>
    <script>
        document.getElementById('contactForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Temizle
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
            document.getElementById('controller-message').textContent = '';
            document.getElementById('controller-message').style.color = '#00bb00';

            const fullname = document.getElementById('fullname').value.trim();
            const email = document.getElementById('email').value.trim();
            const subject = document.getElementById('subject').value.trim();
            const budget = document.getElementById('budget').value.trim();
            const message = document.getElementById('message').value.trim();

            let hasError = false;

            if (!fullname) {
                document.getElementById('error-fullname').textContent = 'Ad soyad boş buraxıla bilməz.';
                hasError = true;
            }

            if (!email || !/^\S+@\S+\.\S+$/.test(email)) {
                document.getElementById('error-email').textContent = 'E-poçt düzgün deyil.';
                hasError = true;
            }

            if (!subject) {
                document.getElementById('error-subject').textContent = 'Mövzu boş buraxıla bilməz.';
                hasError = true;
            }

            if (hasError) return;

            try {
                const response = await fetch("{{ route('contact') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        fullname, email, subject, budget, message
                    })
                });

                const data = await response.json();

                if (response.ok) {
                    document.getElementById('controller-message').textContent = data.message;
                    document.getElementById('contactForm').reset();
                } else if (response.status === 422) {
                    Object.keys(data.errors).forEach(function (key) {
                        const errorSpan = document.getElementById(`error-${key}`);
                        if (errorSpan) {
                            errorSpan.textContent = data.errors[key][0];
                        }
                    });
                    document.getElementById('controller-message').style.color = '#cc0000';
                    document.getElementById('controller-message').textContent = 'Zəhmət olmasa xətaları düzəldin.';
                }
            } catch (error) {
                document.getElementById('controller-message').style.color = '#cc0000';
                document.getElementById('controller-message').textContent = 'Xəta baş verdi.';
                console.error(error);
            }
        });
    </script>

@endsection
