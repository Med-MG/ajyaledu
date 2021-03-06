<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="https://vjs.zencdn.net/7.11.4/video-js.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="dist/images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="dist/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="dist/slick/slick-theme.css"/>

    <!-- onscroll animation library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- usefull utility classes -->
    <link rel="stylesheet" href="dist/css/util.css">
    <!-- our own css -->
    <link rel="stylesheet" href="dist/css/styles.css" />

    <title>ajyaledu</title>
  </head>
  <body>

<section class="navigation"  data-aos="fade-down">
    <nav class="container">
        <a href="" class="navigation__logolink">
            <img src="dist/images/logo.png" alt="logo" class="navigation__logoimg">
        </a>
        <input type="checkbox" id="navigation__humberger-btn" class="navigation__humberger-btn">
        <label for="navigation__humberger-btn" class="navigation__humberger-icon">
            <span class="navigation__navicon"></span>
        </label>
        <ul class="navigation__menu list-unstyled">
            <li class="navigation__menu-item">
                <a href="#apply__form" class="btn btn--nav">التسجيل</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#testimonials" class="navigation__menu-item-link">شهادات</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#services" class="navigation__menu-item-link">خدمات</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#about" class="navigation__menu-item-link">معلومات عنا</a>
            </li>
            <li class="navigation__menu-item">
                <a href="#" class="navigation__menu-item-link">الرئيسية</a>
            </li>
        </ul>

    </nav>
</section>

<section class="header">
    <div class="header__container">
        <div class="header__design" data-aos="fade-right">
            <div class="header__design-imgcontainer">
                <div class="header__design-stats-container">
                    <div class="header__design-stats">
                         <img src="dist/images/checkIc.svg" alt="check icon" class="header__design-stats--icon">
                         <div class="header__design-stats-heading">
                             <p class="header__design-stats--text">نسبة الولوج</p>
                             <h3 class="header__design-stats--num"> <span>%85</span> أكتر من</h3>
                         </div>
                         <img src="dist/images/stats.svg" alt="" class="header__design-stats--image">
                     </div>
                 </div>
            </div>
            <div class="header__design-students">
                <div class="header__design-students-heading">
                    <h3 class="header__design-students--num">110K</h3>
                    <p class="header__design-students--text">الطلاب المغاربة</p>
                </div>
                <img src="dist/images/eduIcon.svg" alt="" class="header__design-students--icon">
            </div>

        </div>
        <div class="header__heading" data-aos="fade-left">
            <div class="header__heading-container">
                <p class="header__heading-subtitle"></p>
                <h1 class="header__heading-title">الوكالة الأولى المختصة بالدارسة في الصين للطلاب المغاربة</h1>
                <p class="header__heading-description"></p>
            </div>
            <div class="header__heading-action">
                <a href="#apply__form" class="btn btn--apply">سجل الآن</a>
                <a href="#services" class="btn btn--services">خدماتنا</a>
                <!-- <div class="header__heading-action-video">
                    <a href="#about" class="btn btn--video"></a>
                    <p class="header__heading-action-video--text">شاهد الفيديو</p>
                </div> -->
            </div>

        </div>
    </div>
</section>
<section class="about" id="about">
    <div class="about__container">
    <div class="about__video" data-aos="fade-up-right">
        <div class="about__video-container">
            <div class="about__video-holder">
                <video
                id="vid1"
                class="video-js vjs-default-skin about__video-size vjs-big-play-centered"
                controls
                data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=cPDB9diFPsQ"}], "youtube": { "iv_load_policy": 1 } }'
                >
            </video>
            </div>
            <!-- <a href="/" class="btn btn--video about__video-btn"></a> -->
            <div class="about__video-UI about__video-UI--1"></div>
            <div class="about__video-UI about__video-UI--2"></div>
        </div>

    </div>
    <div class="about__ajyal" data-aos="fade-up-left">
        <div class="about__heading">
            <h1 class="about__heading-title">لماذا <span class="about__heading-title--variation">أجيال خدمات ؟</span></h1>
            <p class="about__heading-description">
تعد وكالة أجيال خدمات إحدى الشركات الرائدة  في مجال متابعة الدراسة بالخارج و تسجيل الطلاب من كل الجنسيات في الجامعات الصينية بضمها مجموعة من المستشاريين في المجال من دوي خبرات عالية
حيث تقدم أجيال مجموعة من المنح لطلابها في أكثر من 60 جامعة صينية لجميع المراحل الدراسية (بكالوريوس ماجستير دكنوراه)
            </p>
            <div class="about__heading-round about__heading-round--one"></div>
            <div class="about__heading-round about__heading-round--two"></div>
        </div>
        <a href="#apply__form" class="btn-text btn-text--about">بادر بالتسجيل&nbsp;&nbsp;&larr;</a>
    </div>
    </div>

</section>


<section class="services" id="services">
    <div class="services__heading"  data-aos="fade-down">
        <h1 class="services__title">كيف سأبدأ الدراسة في الصين ؟</h1>
        <p class="services__subtitle">منح دراسية مضمونة</p>
    </div>
    <div class="services__container">
        <div class="services__design" data-aos="flip-right">
            <div class="services__design-imgcontainer">
                <div class="services__design-students">
                    <div class="services__design-students-heading">
                        <h3 class="services__design-students--num">110K</h3>
                        <p class="services__design-students--text">الطلاب المغاربة</p>
                    </div>
                    <img src="dist/images/checkIc.svg" alt="" class="services__design-students--icon">
                </div>
                <div class="services__design-current">
                    <img src="dist/images/heart.svg" alt="check icon" class="services__design-current--icon">
                    <span class="services__design-current-badge">Student</span>
                    <div class="services__design-current-onestudent"></div>
                    <div class="services__design-current-heading">
                       <h3 class="services__design-current-heading-name">أسماء الأملي</h3>
                        <p class="services__design-current-heading-degree">computer science  masters</p>
                    </div>
                    <div class="services__design-current-rating">
                        <ul class="services__design-current-rating-starslist">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                        </ul>
                        <p class="services__design-current-rating-text">4.8 (12K rated)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="services__listcards" data-aos="flip-left">
            <div class="services__card services__card--1">
                <div class="services__card-number">1</div>
                <div class="services__card-icon">
                    <img src="dist/images/gloab.svg" alt="" class="services__card-icon-img">
                </div>
                <div class="services__card-heading">
                    <h2 class="services__card-heading-title">مرحلة اختيار التخصص الجامعي</h2>
                    <p class="services__card-heading-description">يبدأ دور مستشارينا بربط الاتصال المستمر معك لمساعدتك على إستكشاف مواهبك و ميولاتك العلمية و إرشادك للتخصص الأنسب لك و الأقرب لسوق العمل </p>
                </div>
            </div>
            <div class="services__card services__card--2">
                <div class="services__card-number">2</div>
                <div class="services__card-icon">
                    <img src="dist/images/applyc.svg" alt="" class="services__card-icon-img">
                </div>
                <div class="services__card-heading">
                    <h2 class="services__card-heading-title">مرحلة تحصيل القبول الجامعي</h2>
                    <p class="services__card-heading-description">بعد استلام الوثائق المطلوبة يقوم فريقنا ببدء اجرءات الحصول المنحة في الجامعة المطلوبة كما نقوم بإرسال القبول إليك عبر الإيميل فور صدوره </p>
                </div>
            </div>
            <div class="services__card services__card--3">
                <div class="services__card-number">3</div>
                <div class="services__card-icon">
                    <img src="dist/images/ticket.svg" alt="" class="services__card-icon-img">
                </div>
                <div class="services__card-heading">
                    <h2 class="services__card-heading-title">مرحلة الحصول على التأشيرة</h2>
                    <p class="services__card-heading-description">نساعدك في إعداد ملف التأشيرة بالمجان </p>
                </div>
            </div>
            <div class="services__card services__card--4">
                <div class="services__card-number">4</div>
                <div class="services__card-icon">
                    <img src="dist/images/changes.svg" alt="" class="services__card-icon-img">
                </div>
                <div class="services__card-heading">
                    <h2 class="services__card-heading-title">الاستقبال من المطار </h2>
                    <p class="services__card-heading-description">بناء على اختيارك سوف يكون فريق أجيال خدمات بانتضارك في المطار ليقوم بتأمين وصولك للجامعة و مساعدتك في الحصول على شريحة الهاتف و بطاقة بنكية إضافة الى تأمين السكن واستكمال اجراءات التسجيل بالمباشرة بالجامعة </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials" id="testimonials">
    <div class="testimonials__heading"  data-aos="flip-down">
        <h1 class="testimonials__title">ماذا قال طالبنا عنا؟</h1>
        <p class="testimonials__subtitle"></p>
    </div>
    <div class="testimonials__testimonylist slick-carousel" data-aos="flip-up">
        <div class="slider-wrapper">
            <div class="testimonials__testimony">
                <div class="testimonials__testimony-video">
                    <video id="vid4"
                        class="video-js vjs-default-skin testimonials__testimony-video-size vjs-big-play-centered"
                        controls
                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://www.youtube.com/watch?v=sLd41-byCjk"}], "youtube": { "iv_load_policy": 1 } }'>
                    </video>
                    <!-- <a href="/" class="btn btn--video btn--testimony"></a> -->
                    <img src="dist/images/Captureabdo.png" alt="" class="testimonials__testimony-video-image">
                </div>
                <div class="testimonials__testimony-article">
                    <img src="dist/images/quote-sign.svg" alt="" class="testimonials__testimony-article-icon">
                    <p class="testimonials__testimony-article-text">
                    السلام عليكم كنشكر بزاف وكالة أجيال على الخدمة الزوينة ديالهم . لي مكيعرفش هاد الوكالة فهي شركة كتوفر ليك مجموعة من المنح و كتوجهك للشعب المناسبة ليك و كتعاونكم في إعداد الملف بالمجان
                    </p>
                    <h4 class="testimonials__testimony-article-name">سلمى المكاوي</h4>
                    <p class="testimonials__testimony-article-sub">طالبة في سلك الصيدلة</p>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="testimonials__testimony">
                <div class="testimonials__testimony-video">
                    <video id="vid3"
                        class="video-js vjs-default-skin testimonials__testimony-video-size vjs-big-play-centered"
                        controls
                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/D7Qw3UY_9HA"}], "youtube": { "iv_load_policy": 1 } }'>
                    </video>
                    <!-- <a href="/" class="btn btn--video btn--testimony"></a> -->
                    <img src="dist/images/Captureabdo.png" alt="" class="testimonials__testimony-video-image">
                </div>
                <div class="testimonials__testimony-article">
                    <img src="dist/images/quote-sign.svg" alt="" class="testimonials__testimony-article-icon">
                    <p class="testimonials__testimony-article-text">
                    السلام عليكم معاكم عبد الرزاق تعاملت مع شركة اجيال لي وفرات ليا مجموعة من الخدمات الرائعة و لي فتحات ليا الطريق للدراسة في الصين مع منحة كاملة و كنشكر فريق العمل لحسن التعامل و الخدمة
                    </p>
                    <h4 class="testimonials__testimony-article-name">عبد الرزاق نضير</h4>
                    <p class="testimonials__testimony-article-sub">طالب ماستر</p>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <div class="testimonials__testimony">
                <div class="testimonials__testimony-video">
                    <video id="vid2"
                        class="video-js vjs-default-skin testimonials__testimony-video-size vjs-big-play-centered"
                        controls
                        data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "hhttps://www.youtube.com/watch?v=betUnNxq2UI"}], "youtube": { "iv_load_policy": 1 } }'>
                    </video>
                    <!-- <a href="/" class="btn btn--video btn--testimony"></a> -->
                    <img src="dist/images/Captureabdo.png" alt="" class="testimonials__testimony-video-image">
                </div>
                <div class="testimonials__testimony-article">
                    <img src="dist/images/quote-sign.svg" alt="" class="testimonials__testimony-article-icon">
                    <p class="testimonials__testimony-article-text">
                    السلام عليكم معكم ياسر الدهبي من مدينة تطوان , دفعت مع أجيال خدمات ديبلوما (التكوين المهني) hotel management 
تعامل ديالكم كان في المستوى حاليا أنا كانقرا اللغة الصينية أولاين القرايا في المستوى و الثمن جد مناسب
                    </p>
                    <h4 class="testimonials__testimony-article-name">ياسر الدهبي</h4>
                    <p class="testimonials__testimony-article-sub">طالب في التكوين المهني
</p>
                </div>
            </div>
        </div>

    </div>

</section>
<section class="apply" id="apply__form">
    <div class="apply__container" data-aos="zoom-in">
        <img src="dist/images/Frame.png" alt="chinese tree" class="apply__img">
        <div class="form__container">
            <h2 class="apply__title">أدخل معلوماتك</h2>
            <p class="errorconf"></p>
            <form action="#" method="POST" class="apply__form" id="applyform" >
                <input type="text" id="fullname" placeholder="الأسم الكامل" required class="apply__form-input apply__form-input--name">
                <input type="text" id="address" placeholder="العنوان" class="apply__form-input apply__form-input--address">
                <input type="tel" id="phone" placeholder="رقم الهاتف" required class="apply__form-input apply__form-input--phone">
                <input type="tel" id="phone2" placeholder="تأكيد رقم الهاتف" required class="apply__form-input apply__form-input--confirm-phone">
                <input type="submit" value="أرسل" class="btn btn--form apply__form-btn">
            </form>
        </div>

    </div>

</section>
<div class="buy-now-sticky" data-aos="zoom-in-up">
    <a href="#apply__form" class="btn btn--tertiary button-sticky b-center" style="margin: 0;">بادر بالتسجيل</a>
    <a href="https://wa.link/x3h5mh" class="button-whatsapp button-sticky"><img src="dist/images/icons8-whatsapp-64.png" class="button-whatsapp__img" />Whatsapp</a>
</div>

<div class="" id="popup">
		<div class="popup__content ">
			<div class="popup__right">
				<a href="./" class="popup__close">&times;</a>
				<div class="success-checkmark">
					<div class="check-icon">
						<span class="icon-line line-tip"></span>
						<span class="icon-line line-long"></span>
						<div class="icon-circle"></div>
						<div class="icon-fix"></div>
					</div>
				</div>
				<h3 class="heading-tertiary">شكرا جزيلاً على ثقتكم</h3>
				<p class="popup__text">
                لقد تم تسجيل الطلب !  سيتصل بكم فريق الدعم الفني
            في أقرب وقت ممكن <br>
				</p>
				<a class="btn btn--popup button-popup" id="PurchaseConfirmed" href="./">الرئيسية</a>
			</div>
		</div>
</div>


<footer class="footer"  data-aos="zoom-in-up">
    <div class="footer__container">
        <div class="footer__about">
            <img src="dist/images/logo.png" alt="" class="footer__about-logo">
            <p class="footer__about-description">العنوان : شارع المسعود الوفقاوي الطابق الثالث مكتب رقم 9 حي السلام أكادير</p>
            <form action="#" class="footer__about-form">
                <input type="email" placeholder="البريد الإلكتروني" class="footer__about-newsletter">
                <a href="#" type="submit" class="footer__about-submit">أرسل</a>
            </form>
        </div>
        <div class="footer__links">
            <ul class="footer__links-list footer__links-list--one list-unstyled">
                <li class="footer__links-list-item footer__links-list-header">أجيال خدمات</li>
                <li class="footer__links-list-item">اتصل بنا</li>
                <li class="footer__links-list-item">معلومات عنا</li>
            </ul>
            <ul class="footer__links-list footer__links-list--two list-unstyled">
                <li class="footer__links-list-item footer__links-list-header">روابط مفيدة</li>
                <li class="footer__links-list-item">سياسة الخصوصية</li>
                <li class="footer__links-list-item">شروط الخدمة</li>
                <li class="footer__links-list-item">الدعم</li>
            </ul>
        </div>
    </div>

</footer>
<section class="subfooter" >
    <div class="subfooter__container">
        <p class="subfooter__copyright">© Copyright 2020 ajyaledu.com / designed by <a class="credit" href="https://www.linkedin.com/in/mohamed-mouiguina-0a3193124/">Mohamed Mouguina</a></p>
        <div class="subfooter__container-social">
            <p class="subfooter__container-social-text">Follow us :</p>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
        </div>
    </div>
</section>

<!-- <script src="js/jquery.min.js"></script> -->
<script src="dist/js/typed-js/typed.min.js"></script>
<script src="https://kit.fontawesome.com/ecadb3d96a.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="js/owl.carousel.min.js"></script> -->
<script type="text/javascript" src="dist/slick/slick.min.js"></script>
<script src="dist/js/main.min.js"></script>
<script src="https://vjs.zencdn.net/7.11.4/video.min.js"></script>
<script src="dist/js/Youtube.min.js"></script>

<!-- onscroll animation library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init(
      {
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 500, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
      }
    );
</script>
<script>
    $('.slick-carousel').slick({
        infinite: true,
        slidesToShow: 1, // Shows a three slides at a time
        slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
        arrows: true, // Adds arrows to sides of slider
        dots: true, // Adds the dots on the bottom
        nextArrow: '<button class="testimonials__navbtn testimonials__navbtn--next">&#8594;</button>',
        prevArrow: '<button class="testimonials__navbtn testimonials__navbtn--previous">&#8592;</button>'
    });
</script>

<script>
    // $('.btn--video').click(function(event){
    //     event.preventDefault();
    //     document.getElementById('vid1').play();
    // });
</script>
</body>

</html>
