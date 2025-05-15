document.addEventListener('DOMContentLoaded', function() {
    const initCursorAndHover = () => {
        const links = document.querySelectorAll('.hover-this');
        const cursor = document.querySelector('.cursor');
        
        if (!cursor) return;

        const moveCursor = e => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        };

        const animateText = function(e) {
            const span = this.querySelector('span');
            
            if (!span) return;
            
            const { offsetX: x, offsetY: y } = e;
            const { offsetWidth: width, offsetHeight: height } = this;
            const move = 7;
            const xMove = (x / width) * (move * 2) - move;
            const yMove = (y / height) * (move * 2) - move;

            if (e.type === 'mouseleave') {
                span.style.transform = 'translate(0, 0)';
                cursor.classList.remove('hover-effect');
            } else {
                span.style.transform = `translate(${xMove}px, ${yMove}px)`;
                cursor.classList.add('hover-effect');
            }
        };

        links.forEach(link => {
            link.addEventListener('mousemove', animateText);
            link.addEventListener('mouseleave', animateText);
        });

        window.addEventListener('mousemove', moveCursor);
    };

    const initMenu = () => {
        const menuBtn = document.querySelector('.menu');
        const fullMenu = document.querySelector('.full-menu');
        const closeBtn = document.querySelector('.close-btn');
        const menuLinks = document.querySelectorAll('.menu-links a');

        if (menuBtn && fullMenu) {
            menuBtn.addEventListener('click', () => {
                fullMenu.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        }

        if (closeBtn && fullMenu) {
            closeBtn.addEventListener('click', () => {
                fullMenu.classList.remove('active');
                document.body.style.overflow = 'auto';
            });
        }

        if (menuLinks.length > 0 && fullMenu) {
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    fullMenu.classList.remove('active');
                    document.body.style.overflow = 'auto';
                });
            });
        }
    };

    const initHeaderScroll = () => {
        const header = document.querySelector('.header-container');
        const hero = document.querySelector('#hero');
        
        if (header && hero) {
            let lastScrollY = window.scrollY;
            
            window.addEventListener('scroll', () => {
                const currentScrollY = window.scrollY;
                const triggerPoint = hero.offsetHeight * 0.4;
                
                if (currentScrollY > triggerPoint) {
                    header.classList.add('show');
                    header.classList.remove('reset');
                } else {
                    header.classList.remove('show');
                    header.classList.add('reset');
                }
                
                lastScrollY = currentScrollY;
            });
        }
    };

    const initTopButton = () => {
        const mybutton = document.getElementById("topBtn");
        const progressCircle = document.getElementById("progressCircle")?.querySelector("circle");
        
        if (!mybutton || !progressCircle) return;

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "flex";
                
                const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
                const scrollProgress = (document.documentElement.scrollTop / scrollTotal);
                const dashOffset = 125.6 - (125.6 * scrollProgress);
                
                progressCircle.style.strokeDashoffset = dashOffset;
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        window.addEventListener('scroll', scrollFunction);
        mybutton.addEventListener('click', topFunction);
    };

    const initCarousel = () => {
        const track = document.querySelector(".carousel-track");
        if (!track) return;

        let index = 0;
        const cards = document.querySelectorAll(".testimonials-card");
        const cardCount = cards.length;
        const visibleCount = 3;
        let slideInterval;

        function autoSlide() {
            if (cardCount === 0) return;
            
            index++;
            if (index > cardCount - visibleCount) index = 0;
            track.style.transform = `translateX(-${(100 / visibleCount) * index}%)`;
        }

        function startCarousel() {
            slideInterval = setInterval(autoSlide, 5000);
        }

        function stopCarousel() {
            clearInterval(slideInterval);
        }

        let startX = 0;
        let currentTranslate = 0;

        track.addEventListener("mousedown", (e) => {
            startX = e.clientX;
            track.style.transition = "none";
            stopCarousel();
            
            document.onmousemove = (e) => {
                const diff = e.clientX - startX;
                track.style.transform = `translateX(${currentTranslate + diff}px)`;
            };
            
            document.onmouseup = (e) => {
                const diff = e.clientX - startX;
                if (Math.abs(diff) > 50) {
                    if (diff < 0 && index < cardCount - visibleCount) index++;
                    else if (diff > 0 && index > 0) index--;
                }
                currentTranslate = -((track.offsetWidth / cardCount) * index);
                track.style.transition = "transform 0.5s ease-in-out";
                track.style.transform = `translateX(-${(100 / visibleCount) * index}%)`;
                document.onmousemove = null;
                document.onmouseup = null;
                startCarousel();
            };
        });

        track.addEventListener('mouseenter', stopCarousel);
        track.addEventListener('mouseleave', startCarousel);

        startCarousel();
    };

    initCursorAndHover();
    initMenu();
    initHeaderScroll();
    initTopButton();
    initCarousel();
});