<?php
setcookie("lg", SafeData($_GET["lg"]), time() + (86400 * 30), "/");
$badges = [
    'html5' => 'badge-html',
    'css3' => 'badge-css',
    'bootstrap' => 'badge-bootstrap',
    'sass' => 'badge-sass',
    'javascript' => 'badge-javascript',
    'jquery' => 'badge-jquery',
    'php' => 'badge-php',
    'mysql' => 'badge-mysql'
];

$services = array(
    [
        'ImgURL' => 'assets/svg/code_review.svg',
        'Title' => 'Clean Code',
        'Desc' => 'organized code and easy to maintain.',
        'Animation' => 'fade-right'
    ],
    [
        'ImgURL' => 'assets/svg/creative.svg',
        'Title' => 'Creative',
        'Desc' => 'I\'ll design your project in a fashionable and creative way.',
        'Animation' => 'fade-up'
    ],
    [
        'ImgURL' => 'assets/svg/responsive.svg',
        'Title' => 'Responsive',
        'Desc' => 'Your application will be compatible with all screens.',
        'Animation' => 'fade-up'
    ],
    [
        'ImgURL' => 'assets/svg/ontime.svg',
        'Title' => 'Fast',
        'Desc' => 'You\'ll have your project completed on time.',
        'Animation' => 'fade-left'
    ],
);

$CreativeProjects = [
    [
        'ImgURL' => 'projects/solarmall.png',
        'Title' => 'Solar Mall',
        'Link' => 'https://powershop-eg.com/solar/',
        'Animation' => 'fade-right'
    ],
    [
        'ImgURL' => 'projects/powershop.png',
        'Title' => 'Powershop',
        'Link' => 'https://powershop-eg.com/',
        'Animation' => 'fade-up'
    ],
    [
        'ImgURL' => 'projects/unipower.png',
        'Title' => 'Unipower',
        'Link' => 'https://unipower-ups.com/store',
        'Animation' => 'fade-left'
    ]
];


function SafeData($Value){
    $Val = trim($Value);
    $Val = strip_tags($Val);
    $Val = htmlspecialchars($Val , ENT_QUOTES);
    $Val = preg_replace('/\s+/S', " ", $Val);

    return $Val;    
}

function add_skill($skill , $percent){
    echo '
        <li class="col-12 col-sm-6 mb-3">
            <strong>'.$skill.'</strong>
            <div class="progress flex-grow-1 me-3" style="height: 26px;font-size: 12pt;">
                <div class="progress-bar bg-sec" role="progressbar" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
            </div>
        </li>
    ';
}

function add_service($ImgURL , $Title , $Desc , $Animation){
    echo '
        <div class="service d-flex col col-md-6 col-xl-3 p-3" data-aos="'.$Animation.'">
            <div class="service-inner p-4">
                <div class="service-img mb-3">
                '.(
                    (strpos($ImgURL , 'fa-') !== FALSE) ?
                    '<i class="'.$ImgURL.'"></i>' :
                    '<img src="'.$ImgURL.'" alt="'.$Title.'" title="'.$Title.'" width="244" height="182" class="mw-100">'
                    
                ).'</div>
                <div class="service-text">
                    <h4>'.$Title.'</h4>
                    <p class="text-muted">'.$Desc.'</p>
                </div>
            </div>
        </div>
    ';
}

function add_rounded_project($ImgURL , $Title , $Link , $Animation){
    echo '
        <div class="rounded-project col col-md-6 col-xl-4 p-3" data-aos="'.$Animation.'">
            <div class="project-inner position-relative">
                <div class="project-img mb-3">
                    <img src="'.$ImgURL.'" alt="'.$Title.'" title="'.$Title.'" class="img-fluid">
                </div>
                <div class="project-text text-center p-2">
                    <h3 class="clr-primary">'.$Title.'</h3>
                </div>
                <div class="project-overlay d-flex flex-column justify-content-center align-items-center fs-4 text-white">
                    <div class="d-flex mb-4">
                        <div class="me-5">
                            <i class="fas fa-heart me-2 text-danger"></i>
                            <span>'.rand(50 , 200).'</span>
                        </div>
                        <div>
                            <i class="fas fa-share-square me-2 text-white"></i>
                            <span>'.rand(20 , 40).'</span>
                        </div>
                    </div>
                    <a href="'.$Link.'" class="btn btn-pink">View</a>
                </div>
            </div>
        </div>
    ';
}

function add_project($ImgURL , $Title , $Skills , $Link){
    global $badges;

    $SkillsArr = explode(',' , $Skills);
    echo '
        <li class="col-12 col-md-6 col-lg-3 d-flex" data-aos="fade-up">
            <div class="card">
                <div class="overflow-hidden">
                    <img src="'.$ImgURL.'" class="card-img-top" alt="'.$Title.'">
                </div>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title NoAligning" dir="ltr">'.$Title.'</h5>
                    <h6>Skills:</h5>
                    <div class="badges">';
                    foreach ($SkillsArr as $value) {
                        echo '<span class="badge '.$badges[strtolower($value)].' me-1 mb-1 px-2 py-1">'.$value.'</span>';
                    }
            echo   '</div>

                    <a href="'.$Link.'" class="btn btn-pink w-100 mt-2">View Project</a>
                </div>
            </div>
        </li>
    ';
}
function get_header(){
    echo '
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light mb-5 px-3">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex me-0" href="#" data-aos="fade-right">
                        <img src="assets/img/logo.png" alt="Amr Ahmed" height="60" class="me-3">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent" toggle="collapse" data-target=".navbar-collapse" data-aos="fade-up">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item me-3">
                                <a class="nav-link active" aria-current="page" href="#header">Home</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#about-me">About Me</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#latest-creative">Latest Projects</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#customer-value">What you\'ll get</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#skills">Skills</a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="main-header container d-flex flex-column h-100">
                <div class="d-flex flex-md-row flex-column-reverse justify-content-center mt-5">
                    <div class="col-md-6 flex-column text-center text-md-start d-flex align-items-md-start" data-aos="fade-right">
                        <h1 class="clr-primary fw-bold">Hi There !</h1>
                        <p class="text-muted flex-grow-1">Below you can see some projects I\'ve been working on lately. I divide each project into four follow-up areas: comprehensive research, wireframing, design & development. This process allows me to create great product with client goals in mind.</p>
                        <a href="#projects" class="btn btn-pink d-flex align-items-center justify-content-center justify-content-md-start">
                            <span class="me-2">See My Projects</span>
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4" data-aos="fade-left">
                        <img src="assets/svg/portfolio.svg" alt="Programming" class="img-fluid">
                    </div>
                </div>
            </div>
        </header>
    ';
}

function get_footer(){
    echo '
        <footer class="section bg pb-0">
            <div class="container p-4">
                <section class="text-center mb-4" data-aos="fade-up">
                    <a class="btn btn-outline-dark rounded-circle m-1" href="https://www.facebook.com/amr.ahmed1310/" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-dark rounded-circle m-1" href="https://twitter.com/735745a0aad8412" role="button"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-dark rounded-circle m-1" href="https://www.linkedin.com/in/amr-ahmed-29237b17b/" role="button"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-dark rounded-circle m-1" href="https://web.whatsapp.com/send?phone=20103394602" role="button"><i class="fab fa-whatsapp"></i></a>
                </section>

                <div class="row">
                    <div class="col-md-12">
                        <h4 class="clr-primary">Contact Info</h4>

                        <ul class="row flex-column flex-md-row list-unstyled" id="contact_info">
                            <li class="mb-4 col-md-6" data-aos="fade-right">
                                <h6>Email</h6>
                                <a href="mailto:amr.ahmed@jobfeed.me" class="text-dark text-decoration-none">
                                    <i class="far fa-envelope me-2"></i>
                                    <span>amr.ahmed@jobfeed.me</span>
                                </a>
                            </li>
                            <li class="mb-4 col-md-6" data-aos="fade-left">
                                <h6>Phone</h6>
                                <a href="tel:+201013394602" class="text-dark text-decoration-none">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    <span class="NoAligning" dir="ltr">+20 10 133 946 02</span>
                                </a>
                            </li>
                            <li class="mb-4 col-md-6" data-aos="fade-right">
                                <h6>Phone #2</h6>
                                <a href="tel:+201019359995" class="text-dark text-decoration-none">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    <span class="NoAligning" dir="ltr">+20 10 193 599 95</span>
                                </a>
                            </li>
                            <li class="mb-4 col-md-6" data-aos="fade-left">
                                <h6>Phone #3</h6>
                                <a href="tel:+201030674210" class="text-dark text-decoration-none">
                                    <i class="fas fa-phone-alt me-2"></i>
                                    <span class="NoAligning" dir="ltr">+20 10 306 742 10</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="clr-primary text-decoration-none" href="#header">Amr Ahmed</a>
            </div>

        </footer>
        <a href="tel:201013394602" class="call-btn d-flex d-lg-none justify-content-center align-items-center fs-5 text-white aos-animate-1s aos-animate-lg" data-aos="fade-up">
            <i class="fas fa-phone-alt me-3" aria-hidden="true">
                <span class="phone-wave sm"></span>
                <span class="phone-wave md"></span>
                <span class="phone-wave lg"></span>
            </i>
            <span>Call Now</span>
        </a>
        <div id="LangContainer" class="dropdown mx-3 mb-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="LangPicker" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="assets/svg/us.svg" width="20" class="me-2">
                <span>en</span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="LangPicker">
                <li>
                    <a class="dropdown-item" href="?lg=en" data-lang="en">
                        <img src="assets/svg/us.svg" width="20" class="me-2">
                        <span>en</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="?lg=ar" data-lang="ar">
                        <img src="assets/svg/eg.svg" width="20" class="me-2">
                        <span>ar</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="floating-btns d-flex flex-column align-items-end NoAligning" dir="ltr">
            <a href="https://www.facebook.com/amr.ahmed1310/" class="no-decoration floating-icon facebook d-flex justify-content-end mx-3 mb-3">
                <div class="icon-text d-flex justify-content-center align-items-center">Contact via Facebook</div><div class="icon d-flex justify-content-center align-items-center">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                </div>
            </a>
            <a href="https://twitter.com/735745a0aad8412" class="no-decoration floating-icon twitter d-flex justify-content-end mx-3 mb-3">
                <div class="icon-text d-flex justify-content-center align-items-center">Contact via Twitter</div><div class="icon d-flex justify-content-center align-items-center">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                </div>
            </a>
            <a href="https://www.linkedin.com/in/amr-ahmed-29237b17b/" class="no-decoration floating-icon linkedin d-flex justify-content-end mx-3 mb-3">
                <div class="icon-text d-flex justify-content-center align-items-center">Contact via Linkedin</div><div class="icon d-flex justify-content-center align-items-center">
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </a>
            <a href="https://web.WhatsApp.com/send?phone=+201013394602" class="no-decoration floating-icon whatsapp d-flex justify-content-end mx-3 mb-3">
                <div class="icon-text d-flex justify-content-center align-items-center">Contact via WhatsApp</div><div class="icon d-flex justify-content-center align-items-center">
                    <i class="fab fa-whatsapp" aria-hidden="true"></i>
                </div>
            </a>
            <div class="floating-icon scrollicon rotated d-flex justify-content-end mx-3 mb-3">
                <div class="icon-text d-flex justify-content-center align-items-center">Scroll to bottom</div>
                <div class="icon d-flex justify-content-center align-items-center">
                    <i class="fa fa-4x fa-angle-up" aria-hidden="true"></i>
                </div>
            </div>
            <div class="contact_us d-none d-lg-block">
                <div class="contact_btn">
                    <div class="contact_btn_logo">
                        <img src="https://unipower-ups.com/store/assets/img/contact-icon.png" width="45">
                        <span class="phone-wave sm"></span>
                        <span class="phone-wave md"></span>
                        <span class="phone-wave lg"></span>
                    </div>
                    <div class="contact_btn_text">
                        Contact me
                    </div>
                </div>
                <div class="contact_info">
                    <div class="mail">
                        <a href="mailto:amr.ahmed@jobfeed.me">
                            <i class="fas fa-envelope-open-text me-2" aria-hidden="true"></i>
                            <span>amr.ahmed@jobfeed.me</span>
                        </a>
                    </div>
                    <div class="phone">
                        <a href="tel:+201013394602">
                            <i class="fas fa-phone-alt me-2" aria-hidden="true"></i>
                            <span>01013394602</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    ';
}