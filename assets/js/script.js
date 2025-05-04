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


