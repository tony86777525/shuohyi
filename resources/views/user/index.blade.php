<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite(['resources/assets/js/user/index.js', 'resources/assets/sass/user/index.scss'])
    </head>
    <body>
        <nav class="navbar" data-element="navbar">
            <div class="container">
                <div class="navbar__logo">
                    <a href="{{ route('user.index') }}"><img src="{{ url('/images/user/index/logo.png') }}"></a>
                </div>
                <div class="navbar__nav">
                    <div class="navbar__nav__list">
                        <a data-target-section="0" class="sectionButton">首頁</a>
                        <a data-target-section="1" class="sectionButton">關於我們</a>
                        <a data-target-section="2" class="sectionButton">服務項目</a>
                        <a data-target-section="3" class="sectionButton">產品介紹</a>
                        <a data-target-section="4" class="sectionButton">聯絡我們</a>
                    </div>
                </div>
            </div>
        </nav>

        <section data-section="0" class="topBanner">
            <div class="container">
                <div class="topBanner__content wow animate__animated animate__fadeInRightShort">
                    <div class="topic">
                        <div class="topic__company">碩誼有限公司</div>
                        <div class="topic__description"> — 桃園在地經營30餘年的機械加工與組裝專家</div>
                    </div>
                    <div class="subTxt">深耕本土市場，我們結合30多年的專業知識與豐富經驗，致力於為客戶提供領先業界的ODM與OEM解決方案。</div>
                    <div class="link">
                        <a class="link__button">了解更多</a>
                        <a class="link__button">聯絡我們</a>
                    </div>
                </div>
            </div>
        </section>
        <section data-section="1" class="fullpage">Section 2</section>
        <section data-section="2"  class="fullpage">Section 3</section>
    </body>
</html>
