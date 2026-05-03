// hero-intro centered-hero-text

// new gsap timeline, animating opacity and x position from down
// const tl = gsap.timeline({ defaults: { ease: "power1.out" } });
// tl.fromTo(".hero-intro", {opacity: 0},{  opacity: 1});


jQuery(document).ready(function ($) {
    gsap.registerPlugin(ScrollTrigger);

    // Hero Section
    gsap.timeline({

        scrollTrigger: {
            trigger: ".hero-intro",
            start: "top 80%",
            toggleActions: "play none none none"
        }
    })  
    .fromTo('.hero-intro', { y: 50, opacity: 0, duration: 1 }, { y: 0, opacity: 1, duration: 1 });
    
});



// tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
// tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
// tl.fromTo("h1", { opacity: 0 }, { opacity: 1, duration: 1 });   