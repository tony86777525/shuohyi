// let scrollToHeight = 0;
import WOW from 'wow.js';
import 'animate.css';

const wow = new WOW(
    {
        boxClass: 'wow',
        animateClass: 'animated',
        offset: 0,
        live: true
    }
);


const sections = document.querySelectorAll('[data-section]');
const buttons = document.querySelectorAll('[data-target-section]');
let currentSection = 0;
//
// window.addEventListener('wheel', (event) => {
//     event.preventDefault();
//     event.stopPropagation();
//
//     const navbarHeight = document.querySelector('[data-element="navbar"]').offsetHeight;
//     const sectionHeight = sections[0].offsetHeight;
//     // if (isScrolling === true || window.scrollY % sections[0].offsetHeight !== navbarHeight) return;
//     if (scrollToHeight !== window.scrollY)  return;
//
//     if (event.deltaY > 0) {
//         // 向下滾動
//         currentSection = Math.min(currentSection + 1, sections.length - 1);
//     } else {
//         // 向上滾動
//         currentSection = Math.max(currentSection - 1, 0);
//     }
//
//     scrollToHeight = (navbarHeight + sectionHeight * currentSection);
//
//     buttons[currentSection].dispatchEvent(new Event('click'));
// }, { passive: false });
//
buttons.forEach((button) => {
    button.addEventListener('click', (event) => {
        const targetSectionId = event.target.dataset.targetSection;
        currentSection = targetSectionId;

        document.querySelector(`[data-section="${targetSectionId}"]`).scrollIntoView({
            behavior: "smooth"
        });

        setTimeout(function() {
            scrollToHeight = 0;
            // console.log('Scroll ended');
        }, 1000);
    });
});
