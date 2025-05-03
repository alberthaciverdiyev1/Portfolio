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
