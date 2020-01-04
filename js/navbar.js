const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');


burger.addEventListener('click',() => {
        //Toggle NAV
        nav.classList.toggle('nav-active');

        //Animate links
        navLinks.forEach((link, index) => {
            //repeat links anim
            if(link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`; //time text anim
            }

        });
        //BURGER ANIMATION
        burger.classList.toggle('toggle');
    });

}

navSlide();