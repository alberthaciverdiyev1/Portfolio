(function () {
    const links = document.querySelectorAll('.hover-this');
    const cursor = document.querySelector('.cursor');
    const logo = document.querySelector('.logo');

    const moveCursor = e => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    };

    const animateText = function (e) {
        const span = this.querySelector('span');
        const { offsetX: x, offsetY: y } = e;
        const { offsetWidth: width, offsetHeight: height } = this;
        const move = 7;
        const xMove = (x / width) * (move * 2) - move;
        const yMove = (y / height) * (move * 2) - move;

        if (span) {
            if (e.type === 'mouseleave') {
                span.style.transform = 'translate(0, 0)';
            } else {
                span.style.transform = `translate(${xMove}px, ${yMove}px)`;
            }
        }

        if (e.type === 'mouseleave') {
            cursor.classList.remove('hover-effect');
        } else {
            cursor.classList.add('hover-effect');
        }
    };

    links.forEach(link => {
        link.addEventListener('mousemove', animateText);
        link.addEventListener('mouseleave', animateText);
    });

    window.addEventListener('mousemove', moveCursor);
})();



const menuBtn = document.querySelector('.menu');
const fullMenu = document.querySelector('.full-menu');

menuBtn.addEventListener('click', () => {
  fullMenu.classList.toggle('active');
});


const closeBtn = document.querySelector('.close-btn');

closeBtn.addEventListener('click', () => {
  fullMenu.classList.remove('active');
});

const header = document.querySelector('.header-container');
const hero = document.querySelector('#hero');

let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
  const currentScrollY = window.scrollY;
  const triggerPoint = hero.offsetHeight * 0.4;
  
 
  if (currentScrollY > triggerPoint) {
    header.classList.add('show');
    header.classList.remove('reset');
  } 
  
  else if (currentScrollY <= triggerPoint) {
    header.classList.remove('show');
    header.classList.add('reset');
  }
  
  lastScrollY = currentScrollY;
});



const menuButton = document.querySelector('.menu');

const closeButton = document.querySelector('.close-btn');

menuButton.addEventListener('click', () => {
  fullMenu.classList.add('active');
  document.body.style.overflow = 'hidden';
});

closeButton.addEventListener('click', () => {
  fullMenu.classList.remove('active');
  document.body.style.overflow = 'auto';
});

const menuLinks = document.querySelectorAll('.menu-links a');
menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    fullMenu.classList.remove('active');
    document.body.style.overflow = 'auto';
  });
});







//topbutton

let mybutton = document.getElementById("topBtn");
let progressCircle = document.getElementById("progressCircle").querySelector("circle");

window.onscroll = function() {
  scrollFunction()
};

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
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




  const track = document.querySelector(".carousel-track");
  let index = 0;
  const cardCount = document.querySelectorAll(".testimonials-card").length;
  const visibleCount = 3;

  function autoSlide() {
    index++;
    if (index > cardCount - visibleCount) index = 0;
    track.style.transform = `translateX(-${(100 / visibleCount) * index}%)`;
  }

  setInterval(autoSlide, 5000);

  let startX = 0;
  let currentTranslate = 0;

  track.addEventListener("mousedown", (e) => {
    startX = e.clientX;
    track.style.transition = "none";
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
    };
  });

