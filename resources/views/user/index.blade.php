<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ __('user.company_name') }}</title>

        <link rel="shortcut icon" href="{{ asset("images/user/favicon.ico") }}" />

        @vite(['resources/assets/js/user/index.js', 'resources/assets/sass/user/index.scss'])
    </head>
    <body>
        <nav class="navbar" data-element="navbar">
            <div class="navbar--logo logo">
                <a href="{{ route('user.index') }}"><img src="{{ url('/images/user/index/logo.png') }}" alt="碩誼有限公司"></a>
            </div>
            <div class="navbar--menu" data-js-click="navbar"></div>
            <div class="navbar--nav">
                <div class="navbar--nav__list">
                    <a data-target-section="0" class="navbar--button" data-js-click="navbar">首頁</a>
                    <a data-target-section="1" class="navbar--button" data-js-click="navbar">關於碩誼</a>
                    <a data-target-section="2" class="navbar--button" data-js-click="navbar">專業服務</a>
                    <a data-target-section="3" class="navbar--button" data-js-click="navbar">聯絡我們</a>
                    <a href="{{ url()->current() }}?lang={{ app()->getLocale() === config('lang.available_locales.zh-TW') ? config('lang.available_locales.en') : config('lang.available_locales.zh-TW') }}" class="navbar--button" data-js-click="navbar">中文 / EN</a>
                </div>
            </div>
        </nav>

        <section data-section="0" class="top-banner">
            <div class="top-banner__content">
                <div class="topic">
                    <h1 class="topic__company wow animate__animated animate__fadeInRightShort">碩誼有限公司</h1>
                    <div class="topic__description wow animate__animated animate__fadeIn animate__delay-1s">— 桃園在地經營30餘年的機械加工與組裝專家</div>
                </div>
                <div class="subTxt wow animate__animated animate__fadeIn animate__delay-2s">
                    <p>深耕本土市場，我們結合30多年的專業知識與豐富經驗，</p>
                    <p>致力於為客戶提供領先業界的ODM與OEM解決方案。</p>
                </div>
            </div>
        </section>
        <section data-section="1" class="about-us">
            <div class="container">
                <div class="about-us__content">
                    <h2 class="about-us__content--title">
                        <span class="wow animate__animated animate__rubberBand">關於我們</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="about-us__content--intro">
                        <div class="intro">
                            <div class="intro--txt">
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">在地深耕</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">熟悉台灣產業需求，提供最貼心的服務。</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">經驗豐富</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">30年專業經驗，累積無數成功案例。</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">專業客製</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">滿足您各種特殊需求，打造專屬產品。</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">品質保證</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">嚴格品管，確保產品品質。</p>
                                </div>
                                <div class="part">
                                    <p class="part--topic wow animate__animated animate__fadeInRightShort">不斷創新</p>
                                    <p class="part--txt wow animate__animated animate__fadeIn animate__delay-1s">與時俱進，引領產業潮流。</p>
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
                        <span class="wow animate__animated animate__rubberBand">專業服務</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="service__content--part">
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">自動化設備設計與製造 — 提升效率與精度的智能解決方案</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>碩誼專精於設計與製造先進的自動化設備，特別是HEPA自動化伺服摺紙機。</p>
                                    <p>我們的自動化設備能根據您的需求進行靈活調整，包括濾紙的材質、長度和寬度，確保產品的高效與精準。</p>
                                    <br>
                                    <p>HEPA自動化伺服摺紙機具有以下特點：</p>
                                    <p>高精度伺服控制：確保每次操作的穩定性與一致性。</p>
                                    <p>靈活調整：根據不同的生產需求，輕鬆調整機台參數。</p>
                                    <p>高效能：提升生產效率，降低人工成本。</p>
                                    <p>我們的自動化解決方案旨在幫助客戶提升生產效率，降低操作成本，並提高產品品質。我們的團隊將與您密切合作，根據您的需求定製最佳的自動化方案。</p>
                                    <p><a href="{{ url('/files/摺紙機型錄.pdf') }}" target="_blank" rel="noreferrer noopener">型錄一覽</a></p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/hepa/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/hepa/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/hepa/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/hepa/img4.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/hepa/img5.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">客製化機架燒焊與機台組裝 — 打造符合您需求的專屬解決方案</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>每一個機架的需求都是獨一無二的。無論您需要的是標準機架還是高精度的定製解決方案，碩誼都能滿足您的需求。</p>
                                    <p>我們專注於提供精密的機架燒焊服務，並擁有靈活的生產能力，能根據您的具體要求進行設計與調整，確保產品的可靠性與穩定性。</p>
                                    <br>
                                    <p>碩誼的客製化機架燒焊服務不僅重視質量，更注重細節。我們的專業團隊擁有豐富的經驗，能夠在焊接過程中保證每一個接點的精度與強度，並通過嚴格的品質檢驗，確保最終產品完全符合您的期望。</p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/customization/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/customization/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/customization/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/customization/img4.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/customization/img5.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="part">
                            <div class="part__content">
                                <div class="part__content--topic wow animate__animated animate__fadeInRightShort">鋼構機械藝術品製作</div>
                                <div class="part__content--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                    <p>我們融合工藝技術與創意藝術，打造出充滿想像力的鋼構機械藝術品，並與藝術家合作，提供機械化與自動化解決方案。</p>
                                </div>
                                <div class="part__content--image">
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/artwork/img1.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/artwork/img2.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
                                        <img src="{{ url('/images/user/index/service/artwork/img3.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInUp">
                                        <img src="{{ url('/images/user/index/service/artwork/img6.jpg') }}">
                                    </div>
                                    <div class="image wow animate__animated animate__bounceInDown">
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
                        <span class="wow animate__animated animate__rubberBand">聯絡我們</span>
                        <span class="delimiter wow animate__animated animate__flip"></span>
                    </h2>
                    <div class="about-us__content--intro">
                        <div class="intro">
                            <div class="intro--topic wow animate__animated animate__fadeInRightShort">客戶至上，創新無限</div>
                            <div class="intro--txt wow animate__animated animate__fadeIn animate__delay-1s">
                                <p>碩誼始終以您的需求為核心，持續創新，力求完美。我們深信，憑藉專業與努力，將為您提供最優質的服務與產品，與您攜手共創未來。</p>
                                <p>您的成功，就是我們的成就！</p>
                            </div>
                        </div>
                    </div>

                    <div class="about-us__content--form">
                        <form class="form" method="POST" action="{{ route('user.api.mail.store') }}"  data-js="post-form">
                            <div class="form__content">
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">姓名</span>
                                        <input type="text" name="name" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>

                                <div class="formRow formRow--partial">
                                    <div class="formCol">
                                        <input id="sex_1" type="radio" name="sex" value="1" class="formEl formEl--radio" checked>
                                        <label for="sex_1" class="formEl formEl--label">
                                            <span>先生</span>
                                        </label>
                                    </div>
                                    <div class="formCol">
                                        <input id="sex_0" type="radio" name="sex" value="0" class="formEl formEl--radio">
                                        <label for="sex_0" class="formEl formEl--label">
                                            <span>小姐</span>
                                        </label>
                                    </div>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">聯絡電話</span>
                                        <input type="text" name="phone" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">電子郵件</span>
                                        <input type="email" name="email" class="formEl formEl--txtIpt">
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">聯絡內容</span>
                                        <textarea name="contact" class="formEl formEl--txtArea" rows="8"></textarea>
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                                <div class="formRow formRow--single required">
                                    <label class="formCol">
                                        <span class="formCol__title">驗證碼</span>
                                        <input type="text" name="captcha" class="formEl formEl--txtIpt @error('captcha') is-invalid @enderror" autocomplete="off">
                                        <div class="captcha">
                                            <img src="{{ captcha_src() }}" alt="">
                                            <i class="refresh" data-js="refresh-captcha" data-js-url="{{ route('user.api.captcha.reload') }}"></i>
                                        </div>
                                    </label>
                                    <div data-js="form-error" class="form-error"></div>
                                </div>
                            </div>
                            <div class="form__button">
                                <div class="notice">聯絡我們，立即體驗我們的專業服務！</div>
                                <button data-js="form-submit">確認送出</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <footer class="footer">
        <div class="footer__content">
            <div class="contact">
                <div class="contactRow contactRow--phone"><a href="tel:03-3299570">03-3292718</a></div>
                <div class="contactRow contactRow--fax">03-3299570</div>
                <div class="contactRow contactRow--email"><a href="mailto:shuoh.yi@gmail.com">shuoh.yi@gmail.com</a></div>
                <div class="contactRow contactRow--address">桃園市茶專一街60巷40號</div>
            </div>
            <div class="copyright">Copyright © SHUOH YI ENTEPRISE CO., LTD All rights reserved.</div>
        </div>
    </footer>
</html>
