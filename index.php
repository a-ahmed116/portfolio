<?php require('assets/php/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex nofollow" />
    <title>Document</title>
    <?php
        $lg = SafeData($_GET['lg']);
        
        if($lg == 'ar'){
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">';
            $font = 'https://fonts.googleapis.com/css?family=Cairo';
        }else{
            echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">';
            $font = 'https://fonts.googleapis.com/css?family=Poppins';
        }

        echo '<link href="'.$font.'" rel="stylesheet">';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/animation.css" rel="stylesheet">
    <style>
        html , body{
            backface-visibility: hidden;
            -webkit-overflow-scrolling: touch
        }
        body{
            background-color: #d3bfec;
        }
    </style>
</head>

<body>
    <?php get_header(); ?>
    <main>
        <div id="about-me" class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="sec-title" data-aos="flip-left">About Me</h2>
                        <div class="d-flex flex-column flex-md-row align-items-center pt-3">
                            <div class="col col-md-6 px-5 mb-4" data-aos="fade-right"><img src="assets/svg/about_me.svg" alt="About Me" class="img-fluid" width="100%"></div>
                            <div class="col col-md-6" data-aos="fade-left">
                                <p class="text-muted">I'm a Full-stack web developer with 5 years of professional experience. i am eager to learn new methods and technologies to make my work more efficient and useful. I also have skills in other fields like desktop / mobile development.</p>
                                <p class="quote">
                                    <span>If you like my work and have some cool project to work on, contact me via the contact info listed below or just send me direct message using the </span>
                                    <a href="#contact">contact form</a>.</p>
                                <div class="d-flex flex-column flex-md-row text-center text-md-start align-items-center">
                                    <img src="assets/img/programmer2.jpg" alt="Amr Ahmed" width="80" height="80" class="rounded-circle me-3 mb-2">
                                    <div class="d-flex flex-column ">
                                        <h5>Amr Ahmed</h5>
                                        <p class="mb-0 text-muted">Senior System Engineer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="latest-creative" class="section">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-column align-items-center">
                        <h2 class="sec-title" data-aos="flip-left">Latest Creative Projects</h2>
                        <div class="d-flex flex-wrap flex-column flex-md-row pt-3">
                            <?php
                                foreach ($CreativeProjects as $row) {
                                    add_rounded_project($row['ImgURL'] , $row['Title'] , $row['Link'] , $row['Animation']);
                                }
                            ?>
                            
                        </div>
                        <a href='#projects' class="btn btn-pink my-4" data-aos="fade-up">See All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="customer-value" class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="sec-title" data-aos="flip-left">What you'll get</h2>
                        <div class="d-flex flex-wrap flex-column flex-md-row pt-3">
                            <?php 
                                foreach ($services as $row) {
                                    add_service($row['ImgURL'] , $row['Title'] , $row['Desc'] , $row['Animation']);
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="skills" class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="sec-title" data-aos="flip-left">Skills</h2>
                        <ul class="row px-0 list-unstyled">
                            <?php add_skill('HTML5' , '100'); ?>
                            <?php add_skill('CSS3' , '100'); ?>
                            <?php add_skill('Bootstrap' , '90'); ?>
                            <?php add_skill('SASS' , '90'); ?>
                            <?php add_skill('Javascript' , '99'); ?>
                            <?php add_skill('jQuery' , '98'); ?>
                            <?php add_skill('PHP' , '95'); ?>
                            <?php add_skill('Node.js' , '75'); ?>
                            <?php add_skill('MySQL' , '87'); ?>
                            <?php add_skill('VB.Net' , '98'); ?>
                            <?php add_skill('Microsoft SQL Server' , '92'); ?>
                            <?php add_skill('Flutter ( Improving )' , '70'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects" class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="sec-title" data-aos="flip-left">Projects</h2>
                        <ul id="ProjectsGrid" class="row px-0">
                            <?php 
                                add_project(
                                    'projects/solarmall.png',
                                    'Solar Mall ( Pending )',
                                    "HTML5,CSS3,Bootstrap,SASS,Javascript,jQuery,PHP,MySQL",
                                    "https://powershop-eg.com/solar/"
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/powershop.png',
                                    'Powershop',
                                    "HTML5,CSS3,Bootstrap,SASS,Javascript,jQuery,PHP,MySQL",
                                    "https://powershop-eg.com/"
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/unipower.png',
                                    'Unipower',
                                    "HTML5,CSS3,SASS,Javascript,jQuery,PHP,MySQL",
                                    "https://unipower-ups.com/store/"
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/myetech.png',
                                    'MYETech Landing Page',
                                    "HTML5,CSS3,SASS,Javascript,jQuery,PHP,MySQL",
                                    "https://www.mye-tech.com/new/"
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/upsegypt.png',
                                    'UPSEgypt',
                                    "HTML5,CSS3,SASS,Javascript,jQuery,PHP,MySQL",
                                    "https://upsegypt.com/en/"
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/designslaser.png',
                                    'Laser Designs',
                                    "HTML5,CSS3,SASS,Javascript,jQuery,PHP,MySQL",
                                    'http://designslaser.com/en/'
                                ); 
                            ?>
                            <?php 
                                add_project(
                                    'projects/jobfeed.png',
                                    'Jobfeed',
                                    "HTML5,CSS3,Javascript,jQuery,PHP,MySQL",
                                    'http://jobfeed.me/'
                                ); 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="sec-title" data-aos="flip-left">Get in Touch</h2>
                        <div class="d-flex flex-column-reverse flex-md-row align-items-center pt-3">
                            <div class="col col-md-6 d-flex flex-column text-center text-md-start" data-aos="fade-right">
                                <strong class="clr-primary">Contact Now</strong>
                                <p class="text-muted">If you have any question, you can contact me using this form.</p>
                                <form action="#">
                                    <div class="row flex-column flex-md-row">
                                        <div class="col mb-3">
                                            <input type="text" class="form-control" id="full_name" placeholder="Full Name" aria-label="Full Name">
                                        </div>
                                        <div class="col mb-3">
                                            <input type="email" class="form-control" id="contact_email" placeholder="Email Address" aria-label="Email Address">
                                        </div>
                                    </div>
                                    <div class="row flex-column flex-md-row">
                                        <div class="col mb-3">
                                            <input type="number" class="form-control" id="contact_no" placeholder="Contact Number" aria-label="Contact Number">
                                        </div>
                                        <div class="col mb-3">
                                            <input type="text" class="form-control" id="contact_subject" placeholder="Subject" aria-label="Subject">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" id="contact_msg" rows="4" placeholder="Message"></textarea>
                                        <div class="form-text text-muted">
                                            <i class="fas fa-lock me-1"></i>
                                            <small>We hate spam, and we respect your privacy.</small>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-pink">
                                            <i class="fas fa-paper-plane me-2"></i>
                                            <span>Send</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="col col-md-6 px-5 mb-4" data-aos="fade-left"><img src="assets/svg/personal_text.svg" alt="Contact form" title="Contact form" class="img-fluid" width="100%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php get_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
    <script>
        $.fn.IsVisible = function(){
            var bottom_of_screen = $(window).scrollTop() + $(window).height();
            var top_of_screen = $(window).scrollTop();
            var top_of_element = $(this).offset().top;
            var bottom_of_element = $(this).offset().top + $(this).height();

            return ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element));
        }

        $.fn.hasPartialClass = function(partial){
            return new RegExp(partial).test(this.prop('class')); 
        };

        function isMobile(){
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                return true;
            }else{
                return false;
            }
        }

        function AnimateElements() {
            $('[data-aos]').each(function(i , element){
                if($(this).attr('data-animated') != 1){
                    $(this).attr('data-aos-duration' , '500');
                    if ($(this).IsVisible()){
                        $(this).addClass('aos-animate')
                        $(this).attr('data-animated' , 1);
                    }
                }
            })
        }

        function AnimateProgressBars(Container){
            $('[aria-valuenow]').each(function (i, el) {
                var $el = $(this),
                    value = $(this).attr('aria-valuenow');

                if($el.attr('data-animated') != 1){
                    if($el.IsVisible()){
                        $el.attr('data-animated' , 1);

                        $({percentage: 0}).animate({percentage: value}, {
                            duration: 1000,
                            step: function () {
                                // percentage with 1 decimal;
                                var percentageVal = Math.round(this.percentage * 10) / 10;
                                $el.text(percentageVal + "%");
                                $el.css('width', percentageVal + '%');
                            }
                        }).promise().done(function () {
                            $el.text(value + "%");
                            $el.css('width', value + '%');
                        });
                    }
                }
            })
        }

        $(document).ready(function () {
            AnimateElements();
            var currLang = "<?php echo SafeData($_GET['lg']); ?>";
            if(currLang == ''){ currLang = 'en'; }
            $('#LangPicker').html($('#LangPicker').next().find('[data-lang="'+currLang+'"]').html());

            $(window).scroll(function (e) {
                AnimateElements();

                if ($(window).scrollTop() > 0) {
                    if (!$('.navbar').hasClass('scrolled')) {
                        $('.navbar').css({
                            'background-color': '#fff',
                            'box-shadow': '0 8px 16px 0 rgba(0,0,0,0.2)'
                        }).addClass('scrolled');
                    }
                } else {
                    $('.navbar').css({
                        'background-color': '',
                        'box-shadow': ''
                    }).removeClass('scrolled');
                }

                var currentElement = '';
                if ($(window).scrollTop() > 0) {
                    $('main .section').each(function (i, el) {
                        var top_of_element = $(this).offset().top;
                        var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();

                        if (bottom_of_screen - 86 > top_of_element) {
                            currentElement = $(this).attr('id');
                        }
                    });
                } else {
                    currentElement = 'header';
                }

                if ($(window).scrollTop() > 100) {
                    var txt = (GetLang() == 'ar') ? 'إذهب للأعلي' : 'Scroll to top';
                    $(".scrollicon").find('.icon-text').text(txt);
                    $(".scrollicon").removeClass("rotated");
                }else{
                    var txt = (GetLang() == 'ar') ? 'إذهب للأسفل' : 'Scroll to bottom';
                    $(".scrollicon").find('.icon-text').text(txt);
                    $(".scrollicon").addClass("rotated");
                }

                $('.navbar-nav .nav-link.active').removeClass('active');
                if (currentElement != '') {
                    $('a.nav-link[href="#' + currentElement + '"]').addClass('active');
                    AnimateProgressBars();
                }
            }).trigger('scroll');


            $('a[href*="#"]').click(function (e) {
                e.preventDefault();
                if($(this).attr('href') != '#'){
                    var ScrollElement = $($(this).attr('href'));
                    $(window).scrollTop(ScrollElement.position().top - $(window).height() + 100);
                }
            });

            var animationELement = $('.aos-animate-1s');
            if(animationELement.length > 0){
                if(animationELement.hasClass('aos-animate-lg')){
                    $(window).resize(function(){
                        if($(window).width() <= 992){
                            setTimeout(() => {
                                animationELement.addClass('aos-animate');
                            }, 500);
                        }else{
                            animationELement.removeClass('aos-animate');
                        }
                    }).resize();
                }else{
                    setTimeout(() => {
                        animationELement.addClass('aos-animate');
                    }, 500);
                }
            }

            $('.scrollicon').click(function() {
                var body = $("body, html");
                var bottom = $(document).height();
                if($(this).hasClass('rotated')){
                    body.animate({scrollTop: bottom});
                }else{
                    body.animate({scrollTop: 0});
                }
            });
            if(isMobile()){
                var WhatsappObject = $('a[href*="web.WhatsApp.com"]');
                if(WhatsappObject.length > 0){
                    $(WhatsappObject).attr('href' , $(WhatsappObject).attr('href').replace("web." , "api."));
                }
            }

            if(GetLang() == "ar"){
                $("html").attr("lang" , "ar");
                TranslatePage();
                var Elements = $("body *:not(\'.NoAligning , .NoAligning *\')");
                ReAlignItems(Elements);
            }else{
                $("html").attr("lang" , "en");
            }
        });

        
function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function ReAlignItems(Elements){
    $('html').attr('dir' , 'rtl');

    var FilteredElements = Elements.filter(function() {
        return $(this).hasPartialClass('-alt') || 
        parseInt($(this).css("border-left-width")) > 0 || 
        parseInt($(this).css("border-right-width")) > 0 || 
        $(this).css("text-align").includes('left') || 
        $(this).css("float") == 'left' || 
        $(this).css("float") == 'right' ||
        $(this).attr('data-aos') == 'fade-right' || 
        $(this).attr('data-aos') == 'fade-left' || 
        $(this).hasClass('fa-angle-right') || 
        $(this).hasClass('fa-angle-left') || 
        $(this).hasClass('animate-background-left') || 
        $(this).hasClass('animate-background-right');
    });

    FilteredElements.each(function(){
        if($(this).hasPartialClass('-alt')){
            $(this).attr('class', $(this).attr('class').replace('-alt' , ''));
        }
        if(parseInt($(this).css("border-left-width")) > 0 && parseInt($(this).css("border-right-width")) == 0){
            $(this).css("border-right" , $(this).css("border-left"));
            $(this).css("border-left" , 'none');
        }else if(parseInt($(this).css("border-right-width")) > 0 && parseInt($(this).css("border-left-width")) == 0){
            $(this).css("border-left" , $(this).css("border-right"));
            $(this).css("border-right" , 'none');
        }

        if($(this).css("text-align") == 'left' && $(this).closest('.no-align').text() == ''){
            var Style = '';
            if($(this).attr("style") !== undefined){
                Style = $(this).attr("style");
            }
            Style += 'text-align: right !important;';

            $(this).attr("style" , Style);
        }
        if($(this).css("float") == 'left'){
            $(this).css("float" , "right");
        }else if($(this).css("float") == 'right'){
            $(this).css("float" , "left");
        }else if($(this).css("direction") == 'ltr'){
            $(this).css("direction" , "rtl");
        }
 
        if($(this).attr('data-aos') == 'fade-right'){
            $(this).attr('data-aos' , 'fade-left');
        }else if($(this).attr('data-aos') == 'fade-left'){
            $(this).attr('data-aos' , 'fade-right');
        }
        
        if($(this).hasClass('fa-angle-right') || $(this).hasClass('fa-angle-right')){
            $(this).toggleClass("fa-angle-right fa-angle-left");
        }

        if($(this).hasClass('animate-background-left') || $(this).hasClass('animate-background-right')){
            $(this).toggleClass("animate-background-left animate-background-right");
        }

        if($(this).hasClass('animate-left') || $(this).hasClass('animate-right')){
            $(this).toggleClass("animate-left animate-right");
        }
    });
}

    var Translate = {
        'home': 'الصفحة الرئيسية',
        'about me': 'من أنا',
        'latest projects': 'أحدث المشاريع',
        'what you\'ll get': 'علام ستحصل',
        'skills': 'المهارات',
        'projects': 'المشاريع',
        'contact': 'اتصل بي',
        'contact me': 'اتصل بي',
        'latest creative projects': 'أحدث المشاريع الإبداعية',
        'amr ahmed': 'عمرو أحمد',
        'senior system engineer': 'مطور ومصمم تطبيقات',
        'skills:': 'المهارات المستخدمة:',
        'get in touch': 'تواصل معي',
        'contact now': 'تواصل معي الان',
        'if you have any question, you can contact me using this form.': 'إذا كان لديك أي أسئلة يمكنك التواصل معي من خلال هذه الفورم',
        'full name': 'الإسم بالكامل',
        'email address': 'البريد الإلكتروني',
        'contact number': 'رقم الموبايل',
        'subject': 'عنوان الرسالة',
        'message': 'الرسالة',
        'we hate spam, and we respect your privacy.': 'يرجي عدم إرسال بريد عشوائي. نحن نحترم خصوصيتك',
        'send': 'إرسال',
        'contact info': 'بيانات التواصل',
        'email': 'البريد الإلكتروني',
        'phone': 'رقم موبايل',
        'phone #2': 'رقم موبايل #2',
        'phone #3': 'رقم موبايل #3',
        'scroll to top': 'إذهب للأعلي',
        'scroll to bottom': 'إذهب للأسفل',
        'contact via whatsapp': 'تواصل عبر واتساب',
        'contact via linkedin': 'تواصل عبر لينكد إن',
        'contact via twitter': 'تواصل عبر تويتر',
        'contact via facebook': 'تواصل عبر فيسبوك',
        'see my projects': 'عرض المشاريع',
        'see all projects': 'عرض كل المشاريع',
        'clean code': 'كود نظيف',
        'organized code and easy to maintain.': 'كود منظم وسهل التعديل عليه',
        'creative': 'مبدع',
        'i\'ll design your project in a fashionable and creative way.': 'سوف أقوم بتصميم مشروعك بشكل عصري',
        'responsive': 'متجاوب',
        'your application will be compatible with all screens.': 'مشروعك سيكون متجاوب مع كافة الشاشات',
        'fast': 'في الوقت المحدد',
        'you\'ll have your project completed on time.': 'سيتم الإنتهاء من مشروعك في الوقت المحدد',
        'view': 'عرض',
        'view project': 'عرض المشروع',
        'hi there !': 'مرحباً بك !',
        'below you can see some projects i\'ve been working on lately. i divide each project into four follow-up areas: comprehensive research, wireframing, design & development. this process allows me to create great product with client goals in mind.': 'في الأسفل ، يمكنك رؤية بعض المشاريع التي كنت أعمل عليها مؤخرًا. أقسم كل مشروع إلى أربعة مجالات للمتابعة: البحث الشامل ، التخطيط ، التصميم والتطوير. تتيح لي هذه العملية إنشاء منتج رائع مع وضع أهداف العميل في الاعتبار.',
        'i\'m a full-stack web developer with 5 years of professional experience. i am eager to learn new methods and technologies to make my work more efficient and useful. i also have skills in other fields like desktop / mobile development.': 'أعمل كمطور ويب منذ 5 سنوات. أنا حريص على تعلم أساليب وتقنيات جديدة لجعل عملي أكثر كفاءة وفائدة. لدي أيضًا مهارات في مجالات أخرى مثل تطوير سطح المكتب / الأجهزة المحمولة.',
        'if you like my work and have some cool project to work on, contact me via the contact info listed below or just send me direct message using the': 'إذا كنت تحب عملي ولديك بعض المشاريع الرائعة للعمل عليها ، فاتصل بي عبر معلومات الاتصال المدرجة أدناه أو فقط أرسل لي رسالة مباشرة باستخدام ',
        'contact form': 'فورم التواصل',
        '© 2021 copyright:': '© 2021 كل الحقوق محفوظة ل',
        'call now': 'إتصل الان'
    };

    function TranslatePage(element){
        element = element || $("body");
        var Texts = '';
        element.find("*:not('script'):not('style'):not('link'):not('.noTranslate *')").contents().filter(function () {
            return this.nodeType === 3;
        }).each(function () {
            if($(this).prop('tagName') !== undefined && $(this).prop('tagName') !== ''){
            }else{
                var Txt = this.data.trim().toLowerCase();
                Txt = Txt.replace(/\s+/g, " ");
                if(Txt !== ''){
                    Texts += Txt + ' ` ';
                    if (Object.keys(Translate).indexOf(Txt) > -1) {
                        this.data = Translate[Txt];
                    }else{
                        // console.log(Txt + ' => ' + Translate[Txt]);
                    }
                }
            }
        });

        $("[placeholder]").each(function () {
            var Txt = $(this).attr('placeholder').trim().toLowerCase();
            Txt = Txt.replace(/\s+/g, " ");
            if(Txt !== ''){

                Texts += Txt + ' ` ';
                if (Object.keys(Translate).indexOf(Txt) > -1) {
                    $(this).attr('placeholder' , Translate[Txt]);
                }else{
                    // console.log(Txt + ' => ' + Translate[Txt]);
                }
            }
        });
    }

    function GetLang() {
        return readCookie('lg');
    }
    


    </script>
</body>

</html>