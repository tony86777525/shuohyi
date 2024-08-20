import $ from 'jquery';

import WOW from 'wow.js';
import 'animate.css';

import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

$(document).ready(function () {
    anchor();
    wow();
    refreshCaptcha();

    $('[data-js="post-form"]').submit(function(e){
        e.preventDefault();

        let form = $(this);
        let url = form.attr('action');
        let formSubmitButton = form.find('[data-js="form-submit"]');
        let captchaRefreshButton = form.find('[data-js="refresh-captcha"]');

        //ajax
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: url,
            data: form.serialize(),
            dataType: "JSON",
            beforeSend : function() {
                form.find('[data-js="form-error"]').text('');
                formSubmitButton.attr('disabled', true);
            },
            success: function (res) {
                if (undefined !== res.message) {
                    Swal.fire({
                        title: res.message,
                        confirmButtonText: '關閉',
                        confirmButtonColor: '#999999'
                    }).then(function () {
                    });
                }
            },
            complete: function () {
                formSubmitButton.attr('disabled', false);
                captchaRefreshButton.click();
            },
            error: function(res) {
                let errors = res.responseJSON.errors;
                $.each(errors, function (name, error) {
                    $('[name="' + name + '"]').closest('.formRow').find('[data-js="form-error"]').text(error);
                });
            }
        });
    });
});

function wow() {
    new WOW().init();
}

function anchor() {
    document.querySelectorAll('[data-js-click="navbar"]').forEach((element) => {

        element.addEventListener('click', (event) => {
            document.querySelector('[data-element="navbar"]').classList.toggle('is-open');
        });
    })

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

function refreshCaptcha() {
    $('[data-js="refresh-captcha"]').on('click',function(){
        let button = $(this);
        let url = $(this).data('js-url');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: url,
            dataType: "JSON",
            beforeSend : function() {
                button.attr('disabled', true);
            },
            success: function (res) {
                button.closest('.captcha').find('img').attr('src', res);
            },
            complete: function () {
                button.attr('disabled', false);
            },
            error: function(res) {
                console.log(res);
            }
        });
    });
}
