import $ from 'jquery';

import WOW from 'wow.js';
import 'animate.css';

$(document).ready(function() {
    anchor();
    wow();

    document.querySelectorAll('[data-js-click="navbar"]').forEach((element) => {

        element.addEventListener('click', (event) => {
            document.querySelector('[data-element="navbar"]').classList.toggle('is-open');
        });
    })
});

function wow() {
    const wow = new WOW(
        {
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            live: true
        }
    );
}

function anchor() {
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
            const navbarHeight = document.querySelector('[data-element="navbar"]').clientHeight;
            const targetTopHeight = document.querySelector(`[data-section="${targetSectionId}"]`).offsetTop;
            // const viewHeight = document.documentElement.clientHeight;
            const targetTop = targetTopHeight - navbarHeight - 100;
            window.scrollTo({
                top: targetTop,
                behavior: "smooth"
            });

            // setTimeout(function() {
            //     scrollToHeight = 0;
            //     // console.log('Scroll ended');
            // }, 1000);
        });
    });
}
