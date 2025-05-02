(function () {
    const links = document.querySelectorAll('.hover-this');
    const cursor = document.querySelector('.cursor');
    const logo = document.querySelector('.logo');

    logo.addEventListener('mouseenter', () => {
        cursor.classList.add('hover-effect');
    });
    
    logo.addEventListener('mouseleave', () => {
        cursor.classList.remove('hover-effect');
    });
    
    const animateText = function (e) {
        const span = this.querySelector('span');
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

    const moveCursor = e => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    };

    links.forEach(link => {
        link.addEventListener('mousemove', animateText);
        link.addEventListener('mouseleave', animateText);
    });

    window.addEventListener('mousemove', moveCursor);
})();
