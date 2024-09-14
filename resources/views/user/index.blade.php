<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="桃園,機械,加工,自動化設備,燒焊,客製化">

        <title>{{ __('user.company_name') }}</title>

        <link rel="shortcut icon" href="{{ asset("images/user/favicon.ico") }}" />

        @vite(['resources/assets/js/user/index.js', 'resources/assets/sass/user/index.scss'])
    </head>
    <body class="{{ app()->getLocale() }}">
        <nav class="navbar" data-element="navbar">
            <div class="navbar__language">
                <a href="{{ url()->current() }}?lang={{ app()->getLocale() === config('lang.available_locales.zh-TW') ? config('lang.available_locales.en') : config('lang.available_locales.zh-TW') }}" class="navbar--button" data-js-click="navbar">中文 / EN</a>
            </div>
            <div class="navbar__other">
                <div class="navbar--logo logo">
                    <a href="{{ route('user.index') }}"><img src="{{ url('/images/user/index/logo.png') }}" alt="碩誼有限公司"></a>
                </div>
                <div class="navbar--menu" data-js-click="navbar"></div>
                <div class="navbar--nav">
                    <div class="navbar--nav__list">
                        <a data-target-section="0" class="navbar--button" data-js-click="navbar">{{ __('user.navi.index') }}</a>
                        <a data-target-section="1" class="navbar--button" data-js-click="navbar">{{ __('user.navi.about-us') }}</a>
                        <a data-target-section="2" class="navbar--button" data-js-click="navbar">{{ __('user.navi.services') }}</a>
                        <a data-target-section="3" class="navbar--button" data-js-click="navbar">{{ __('user.navi.contact-us') }}</a>
                        <a href="{{ url()->current() }}?lang={{ app()->getLocale() === config('lang.available_locales.zh-TW') ? config('lang.available_locales.en') : config('lang.available_locales.zh-TW') }}" class="navbar--button language" data-js-click="navbar">中文 / EN</a>
                    </div>
                </div>
            </div>
        </nav>

        <section data-section="0" class="top-banner">
            <div class="top-banner__content">
                <div class="topic">
                    <h1 class="topic__company wow animate__animated animate__fadeInRightShort">{{ __('user.slogan.first') }}</h1>
                    <div class="topic__description wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.slogan.second') }}</div>
                </div>
                <div class="subTxt wow animate__animated animate__fadeIn animate__delay-2s">
                    <p>{{ __('user.slogan.third') }}</p>
                    <p>{{ __('user.slogan.forth') }}</p>
                </div>
            </div>
        </section>
        <section data-section="1" class="about-us">
            <div class="container">
                <div class="about-us__content">
                    <h2 class="about-us__content--title">
                        <span class="wow animate__animated animate__rubberBand">{{ __('user.about-us.title') }}</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="about-us__content--intro">
                        <div class="intro">
                            <div class="intro--txt">
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">{{ __('user.about-us.group.title1') }}</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.about-us.group.text1') }}</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">{{ __('user.about-us.group.title2') }}</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.about-us.group.text2') }}</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">{{ __('user.about-us.group.title3') }}</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.about-us.group.text3') }}</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">{{ __('user.about-us.group.title4') }}</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.about-us.group.text4') }}</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">{{ __('user.about-us.group.title5') }}</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">{{ __('user.about-us.group.text5') }}</p>
                                </div>
                            </div>

                            <div class="intro--image">
                                <div class="image wow animate__animated  animate__fadeIn">
                                    <img src="{{ url('/images/user/index/about-us/img1.png') }}">
                                </div>
                                <div class="imagee wow animate__animated  animate__fadeIn">
                                    <img src="{{ url('/images/user/index/about-us/img2.png') }}">
                                </div>
                                <div class="imagee wow animate__animated  animate__fadeIn">
                                    <img src="{{ url('/images/user/index/about-us/img3.png') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="2" class="service">
            <div class="container">
                <div class="service__content">
                    <h2 class="service__content--title">
                        <span class="wow animate__animated animate__rubberBand">{{ __('user.services.title') }}</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="service__content--part">
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">{{ __('user.services.group.title1') }}</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>{{ __('user.services.group.text1-1') }}</p>
                                    <p>{{ __('user.services.group.text1-2') }}</p>
                                    <br>
                                    <p>{{ __('user.services.group.text1-3') }}</p>
                                    <p>{{ __('user.services.group.text1-4') }}</p>
                                    <p>{{ __('user.services.group.text1-5') }}</p>
                                    <p>{{ __('user.services.group.text1-6') }}</p>
                                    <p>{{ __('user.services.group.text1-7') }}</p>
                                    <p><a href="{{ url('/files/伺服摺紙機型錄.pdf') }}" target="_blank" rel="noreferrer noopener">{{ __('user.services.group.text1-8') }}</a></p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/hepa/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/hepa/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/hepa/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/hepa/img4.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/hepa/img5.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">{{ __('user.services.group.title2') }}</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>{{ __('user.services.group.text2-1') }}</p>
                                    <p>{{ __('user.services.group.text2-2') }}</p>
                                    <br>
                                    <p>{{ __('user.services.group.text2-3') }}</p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/customization/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/customization/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/customization/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/customization/img4.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/customization/img5.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">{{ __('user.services.group.title3') }}</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>{{ __('user.services.group.text3-1') }}</p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/artwork/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/artwork/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/artwork/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/artwork/img6.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__fadeIn">
                                        <img src="{{ url('/images/user/index/service/artwork/img7.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="3" class="contact-us">
            <div class="container">
                <div class="contact-us__content">
                    <h2 class="service__content--title">
                        <span class="wow animate__animated animate__rubberBand">{{ __('user.contact-us.title') }}</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="about-us__content--intro">
                        <div class="intro">
                            <div class="intro--topic wow animate__animated animate__fadeInRightShort">{{ __('user.contact-us.text1') }}</div>
                            <div class="intro--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                <p>{{ __('user.contact-us.text2') }}</p>
                                <p>{{ __('user.contact-us.text3') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-us__content--form">
                        <form class="form" method="POST" action="{{ route('user.api.mail.store') }}"  data-js="post-form">
                            <div class="form__content">
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">{{ __('user.contact-us.form.name') }}</span>
                                        <input type="text" name="name" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>

                                <div class="formRow formRow--partial">
                                    <div class="formCol">
                                        <input id="sex_1" type="radio" name="sex" value="1" class="formEl formEl--radio" checked>
                                        <label for="sex_1" class="formEl formEl--label">
                                            <span>{{ __('user.contact-us.form.sex.male') }}</span>
                                        </label>
                                    </div>
                                    <div class="formCol">
                                        <input id="sex_0" type="radio" name="sex" value="0" class="formEl formEl--radio">
                                        <label for="sex_0" class="formEl formEl--label">
                                            <span>{{ __('user.contact-us.form.sex.female') }}</span>
                                        </label>
                                    </div>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">{{ __('user.contact-us.form.tel') }}</span>
                                        <input type="text" name="phone" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">{{ __('user.contact-us.form.email') }}</span>
                                        <input type="email" name="email" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">{{ __('user.contact-us.form.comments') }}</span>
                                        <textarea name="contact" class="formEl formEl--txtArea" rows="8"></textarea>
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
{{--                                <div class="formRow formRow--single required">--}}
{{--                                    <label class="formCol">--}}
{{--                                        <span class="formCol__title">驗證碼</span>--}}
{{--                                        <input type="text" name="captcha" class="formEl formEl--txtIpt @error('captcha') is-invalid @enderror" autocomplete="off">--}}
{{--                                        <div class="captcha">--}}
{{--                                            <img src="{{ captcha_src() }}" alt="">--}}
{{--                                            <i class="refresh" data-js="refresh-captcha" data-js-url="{{ route('user.api.captcha.reload') }}"></i>--}}
{{--                                        </div>--}}
{{--                                    </label>--}}
{{--                                    <div data-js="form-error" class="form-error"></div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="form__button">
                                <div class="notice">{{ __('user.contact-us.form.notice') }}</div>
                                <button data-js="form-submit">{{ __('user.contact-us.form.button') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="loading" data-js="loading">
            <div class="loading__overflow"></div>
            <div class="loading__container">
                <div class="box"></div>
            </div>
        </div>
    </body>
    <footer class="footer">
        <div class="footer__content">
            <div class="contact">
                <div class="contactRow contactRow--phone"><a href="tel:03-3299570">03-3292718</a></div>
                <div class="contactRow contactRow--fax">03-3299570</div>
                <div class="contactRow contactRow--email"><a href="mailto:{{ env('MAIL_USERNAME') }}">{{ env('MAIL_USERNAME') }}</a></div>
                <div class="contactRow contactRow--address">{{ __('user.footer.address') }}</div>
            </div>
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.1554692590466!2d121.35918437604981!3d24.99483263986618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34681dd14207e7c3%3A0xb6406f8eb7a5ce99!2z56Kp6Kq85a-m5qWt5pyJ6ZmQ5YWs5Y-4!5e0!3m2!1szh-TW!2stw!4v1725171459908!5m2!1szh-TW!2stw" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            <div class="copyright">Copyright © SHUOH YI ENTEPRISE CO., LTD All rights reserved.</div>
        </div>
    </footer>
</html>
