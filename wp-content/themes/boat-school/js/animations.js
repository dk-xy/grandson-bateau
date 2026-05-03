// hero-intro centered-hero-text

// new gsap timeline, animating opacity and x position from down
// const tl = gsap.timeline({ defaults: { ease: "power1.out" } });
// tl.fromTo(".hero-intro", {opacity: 0},{  opacity: 1});


// jQuery(document).ready(function ($) {
//     gsap.registerPlugin(ScrollTrigger);

//     // Hero Section
//     gsap.timeline({

//         scrollTrigger: {
//             trigger: ".hero-intro",
//             start: "top 80%",
//             toggleActions: "play none none none"
//         }
//     })  
//     .fromTo('.hero-intro h1, .highlight-title, .hero-descr, .hero-image-container', { y: 50, opacity: 0, duration: 1 }, { y: 0, opacity: 1, duration: 1, stagger: 0.3 });

// });
// gsap.registerPlugin(ScrollTrigger);

// gsap.utils.toArray('[data-animate]').forEach((el) => {
//   gsap.fromTo(el, 
//     { y: 50, opacity: 0 },
//     {
//       y: 0,
//       opacity: 1,
//       duration: 1,
//       scrollTrigger: {
//         trigger: el,
//         start: "top 85%",
//         toggleActions: "play none none none"
//       }
//     }
//   );
// });


// tl.to(".slider", { y: "-100%", duration: 1.5, delay: 0.5 });
// tl.to(".intro", { y: "-100%", duration: 1 }, "-=1");
// tl.fromTo("h1", { opacity: 0 }, { opacity: 1, duration: 1 });   

// gsap.utils.toArray('section').forEach((section) => {
//     const tl = gsap.timeline({
//         scrollTrigger: {
//             trigger: section,
//             start: "top 70%",
//             once: true,
//             markers: true
//         }
//     });

//     tl.from(section.querySelectorAll('.hero-intro h1, .highlight-title, .hero-descr, .hero-image-container'), {
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     });

//     tl.from(section.querySelectorAll('.services-section-title-block .title-header,.services-section-title-block h2, .services-section-title-block .section-descr'), {
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     });
//     tl.from(section.querySelectorAll('.service-block'), {
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     });
//     // benefit-intro-section
//         tl.from(section.querySelectorAll('.benefit-intro-section .title-header, .benefit-intro-section h2, .benefit-intro-section .benefit-intro-descr'), {
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     });
//     // benefit-blocks-container
//     tl.from(section.querySelectorAll('.benefit-blocks-container .benefit-block'), {
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     });
// // theory-section
//     tl.from(section.querySelectorAll('.theory-section .title-header, .theory-section h2, .theory-section .section-descr, .theory-section-intro, .theory-section-about, .theory-special-content'), {    
//         y: 50,
//         opacity: 0,
//         duration: 0.6,
//         stagger: 0.2
//     }); 



// });

gsap.registerPlugin(ScrollTrigger);

const animations = [
    {
        trigger: '.hero-intro',
        targets: '.hero-intro h1, .hero-intro .highlight-title, .hero-intro .hero-descr,.hero-intro-picture'
    },
    {
        trigger: '.services-section-title-block',
        targets: '.services-section-title-block .title-header, .services-section-title-block h2, .services-section-title-block .section-descr'
    },
    {
        trigger: '.service-block',
        targets: '.service-block'
    },
    {
        trigger: '.benefit-intro-section',
        targets: '.benefit-intro-section .title-header, .benefit-intro-section h2, .benefit-intro-section .benefit-intro-descr'
    },
    {
        trigger: '.benefit-blocks-container',
        targets: '.benefit-blocks-container .benefit-block'
    },
    {
        trigger: '.theory-section',
        targets: '.theory-section .title-header, .theory-section h2, .theory-section .section-descr, .theory-section-intro, .theory-section-about, .theory-special-content'
    },

    //   teacher-info
    {
        trigger: '.teacher-info',
        targets: '.teacher-info .teacher-image, .teacher-info .title-header, .teacher-info h2, .teacher-info .teacher-name, .teacher-info .teacher-bio, .teacher-info .teacher-descr'
    },

    {
        trigger: '.teacher-info',
        targets: '.teacher-highlight-grid, .teacher-highlight-grid .teacher-highlight-item'
    },
    // prices-section
    {
        trigger: '.prices-section',
        targets: '.prices-section .boat-picture, .prices-section .title-header, .prices-section h3, .prices-section .price-list-subtitle, .prices-section .section-descr, .price-list-item-container, .picice-list-title-about'    
    }
];

animations.forEach(({ trigger, targets }) => {
    const elems = document.querySelectorAll(targets);
    if (!elems.length) return;

    gsap.from(elems, {
        y: 50,
        opacity: 0,
        duration: 0.6,
        stagger: 0.2,
        scrollTrigger: {
            trigger,
            start: 'top 70%',
            once: true
        }
    });
});