<!DOCTYPE html>
<!--[if lt IE 7 ]>
<html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>
<html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @foreach(App\Models\Setting::latest()->get() as $key =>  $settings)
        <title>{{$settings->webtitle}}</title>
@endforeach
<!-- STYLES -->
    <link
        href="../../css2-2.css?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link
        href="../../css2-3.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/plugins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/dark.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    <!--<link rel="stylesheet" type="text/css" href="css/dark.css" />-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->

</head>

<body class="dark">

<!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER ALL -->
<div class="know_tm_all_wrap" data-magic-cursor="show"> <!-- If you want disable magic cursor change value to "hide" -->

    <!-- MODALBOX -->
    <div class="know_tm_modalbox">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{asset('frontend/img/svg/cancel.svg')}}" alt=""></a>
            </div>
            <div class="description_wrap"></div>
        </div>
    </div>
    <!-- /MODALBOX -->

    <!-- TOPBAR -->
    <div class="know_tm_topbar">
        <div class="container">
            <div class="topbar_inner">
                <div class="logo">
                    <a href="#"><img src="{{asset( $settings->image)}}" alt=""></a>
                </div>
                <div class="right">
                    <div class="social">
                        @foreach(App\Models\Setting::latest()->get() as $key =>  $settings)
                            <ul>
                                <li><a href="{{$settings->facebook}}"><img class="svg"
                                                                           src="{{asset('frontend/img/svg/social/facebook.svg')}}"
                                                                           alt=""></a></li>
                                <li><a href="{{$settings->twitter}}"><img class="svg"
                                                                          src="{{asset('frontend/img/svg/social/twitter.svg')}}"
                                                                          alt=""></a></li>
                                <li><a href="{{$settings->youtube}}"><img class="svg"
                                                                          src="{{asset('frontend/img/svg/social/youtube.svg')}}"
                                                                          alt=""></a></li>
                                <li><a href="{{$settings->instagram}}"><img class="svg"
                                                                            src="{{asset('frontend/img/svg/social/instagram.svg')}}"
                                                                            alt=""></a></li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="know_tm_button">
                        <a href="{{$settings->cv}}" download="">Download CV</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /TOPBAR -->

    <!-- HERO -->
    <div class="know_tm_hero">
        <div class="background_shape"></div>
        <div class="hero_content">
            <div class="container">
                <div class="content_inner">
                    <div class="main_info">
                        <div class="left">
                            <span class="subtitle">I'm</span>
                            @foreach(App\Models\Tagline::latest()->get() as $key =>  $tagline)
                                <h3 class="name">{{ $tagline->tag_line }}</h3>
                                <p class="text">{{ $tagline->description }}</p>
                                {{--                                <div class="know_tm_video">--}}
                                {{--                                    <div class="video_inner">--}}
                                {{--                                        <div class="circle"></div>--}}
                                {{--                                        <h3 class="play">Play Video</h3>--}}
                                {{--                                        <a class="know_tm_full_link popup-youtube"--}}
                                {{--                                           href="{{ $tagline->links }}"></a>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                        </div>
                        @endforeach
                        <div class="right">
                            <div class="image">
                                <img src="{{asset('frontend/img/thumbs/47-60.jpg')}}" alt="">
                                <div class="main" data-img-url="{{asset( $tagline->image )}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="main_menu">
                        <ul>
                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/archive.svg')}}" alt="">
                                <span>About Me</span>
                                <a class="know_tm_full_link" href="#about"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/contacs.svg')}}" alt="">
                                <span>Resume</span>
                                <a class="know_tm_full_link" href="#resume"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/briefcase.svg')}}" alt="">
                                <span>Portfolio</span>
                                <a class="know_tm_full_link" href="#portfolio"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/gear.svg')}}" alt="">
                                <span>Service</span>
                                <a class="know_tm_full_link" href="#service"></a>
                            </li>
                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/message.svg')}}" alt="">
                                <span>Testimonial</span>
                                <a class="know_tm_full_link" href="#testimonials"></a>
                            </li>

                            <li>
                                <img class="svg" src="{{asset('frontend/img/svg/letter.svg')}}" alt="">
                                <span>Contact</span>
                                <a class="know_tm_full_link" href="#contact"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hero Shapes -->
        <span class="one anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}" alt=""></span>
        <span class="two anim_moveLeft"><img class="svg" src="{{asset('frontend/img/svg/shapes/dot.svg')}}"
                                             alt=""></span>
        <span class="three anim_moveTop"><img class="svg" src="{{asset('frontend/img/svg/shapes/dot-2.svg')}}"
                                              alt=""></span>
        <span class="four anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/1.svg')}}" alt=""></span>
        <span class="five anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/8.svg')}}" alt=""></span>
        <span class="six anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/3.svg')}}" alt=""></span>
        <span class="seven anim_right"><img class="svg" src="{{asset('frontend/img/svg/shapes/4.svg')}}" alt=""></span>
        <span class="eight anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}" alt=""></span>
        <span class="nine anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/3.svg')}}" alt=""></span>
        <span class="ten anim_moveLeft"><img class="svg" src="{{asset('frontend/img/svg/shapes/4.svg')}}" alt=""></span>
        <span class="eleven anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}" alt=""></span>
        <span class="twelve anim_extra"><img class="svg" src="{{asset('frontend/img/svg/shapes/2.svg')}}" alt=""></span>
        <span class="thirteen anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/5.svg')}}"
                                                alt=""></span>
        <span class="fourteen anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}"
                                               alt=""></span>
        <span class="fifteen anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/3.svg')}}"
                                               alt=""></span>
        <span class="sixteen anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}"
                                              alt=""></span>
        <span class="seventeen anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/5.svg')}}"
                                                 alt=""></span>
        <span class="eighteen anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}"
                                               alt=""></span>
        <span class="nineteen anim_scale"><img class="svg" src="{{asset('frontend/img/svg/shapes/9.svg')}}"
                                               alt=""></span>
        <span class="twenty anim_circle"><img class="svg" src="{{asset('frontend/img/svg/shapes/1.svg')}}"
                                              alt=""></span>


    </div>

    <div class="container">
        <div class="know_tm_mainpart">

            <!-- ABOUT -->
            <div id="about" class="know_tm_main_section">
                <div class="know_tm_about">
                    <div class="left">
                        <div class="left_inner">
                            @foreach(App\Models\About::latest()->get() as $key =>  $info)
                                <div class="image">
                                    <img src="{{asset($info->image)}}" alt="">
                                    <div class="main" data-img-url="{{asset($info->image)}}"></div>
                                </div>
                                <div class="details">
                                    <ul>
                                        <li>
                                            <h3>Name</h3>
                                            <span>{{$info->name}}</span>
                                        </li>
                                        <li>
                                            <h3>Birthday</h3>
                                            <span>{{$info->dob}}</span>
                                        </li>
                                        <li>
                                            <h3>Mail</h3>
                                            <span><a href="{{$info->mail}}" class="__cf_email__"
                                                     data-cfemail="{{$info->mail}}">Mail</a></span>
                                        </li>
                                        <li>
                                            <h3>Phone</h3>
                                            <span>{{$info->phone}}</span>
                                        </li>
                                        <li>
                                            <h3>Address</h3>
                                            <span>{{$info->address}}</span>
                                        </li>
                                        <li>
                                            <h3>Nationality</h3>
                                            <span>{{$info->nationality}}</span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </div>

                    <div class="right">
                        <div class="know_tm_main_title">
                            <span>About Me</span>
                            <h3>{{$info->title}}</h3>
                        </div>
                        <div class="bigger_text">
                            <p>{{$info->subtitle}}</p>
                        </div>
                        <div class="text">
                            <p>{{$info->description}}  </p>
                        </div>
                        <div class="know_tm_button">
                            <a href="{{asset($info->cv)}}" download="">Download CV</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- /ABOUT -->

            <!-- RESUME -->
            <div id="resume" class="know_tm_main_section">
                <div class="know_tm_resume">
                    <div class="know_tm_main_title">
                        <span>Resume</span>
                        <h3>Combination of Skill &amp; Experience</h3>
                    </div>
                    <div class="resume_inner">
                        <div class="left">
                            <div class="info_list">
                                <div class="know_tm_resume_title">
                                    <h3>Education</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        @foreach(App\Models\Resume::latest()->get() as $key =>  $resume)

                                            <div class="list_inner">
                                                <div class="short">
                                                    <div class="job">
                                                        <h3>{{ $resume->edutitle }}</h3>
                                                        <span>{{ $resume->university}}</span>
                                                    </div>
                                                    <div class="year">
                                                        <span>{{ $resume->sessions}} </span>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $resume->description}} </p>
                                                </div>
                                            </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="info_list">
                                <div class="know_tm_resume_title">
                                    <h3>Experience</h3>
                                    <span class="shape"></span>
                                </div>
                                <ul>
                                    <li>
                                        @foreach(App\Models\Job::latest()->get() as $key =>  $jobs)

                                            <div class="list_inner">
                                                <div class="short">
                                                    <div class="job">
                                                        <h3>{{ $jobs->exptitle}}</h3>
                                                        <span>{{ $jobs->expmarketplace}}</span>
                                                    </div>
                                                    <div class="year">
                                                        <span>{{ $jobs->expsession}}</span>
                                                    </div>
                                                </div>
                                                <div class="text">
                                                    <p>{{ $jobs->expdescription}} </p>
                                                </div>
                                            </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="right">
                            <div class="skills_list">
                                <div class="know_tm_resume_title">
                                    <h3>Personal Skills</h3>
                                    <span class="shape"></span>
                                </div>
                                @foreach(App\Skill::latest()->get() as $key =>  $skill)

                                    <div class="personal">
                                        <div class="dodo_progress">
                                            <div class="progress_inner" data-value="80">
                                            <span><span class="label">{{ $skill->name}}</span><span
                                                    class="number">{{ $skill->percent}}</span></span>
                                                <div class="background">
                                                    <div class="bar">
                                                        <div class="bar_in"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                @endforeach
                            </div>
                            <div class="skills_list">
                                <div class="know_tm_resume_title">
                                    <h3>Software Skills</h3>
                                    <span class="shape"></span>
                                </div>
                                <div class="software">
                                    <div class="circular_progress_bar">
                                        <ul>
                                            @foreach(App\Models\softskill::latest()->get() as $key =>  $softskill)
                                                <li>
                                                    <div class="list_inner">
                                                        <div class="myCircle"
                                                             data-value={{ $softskill->softskillrating}}></div>
                                                        <div class="title"><h3>{{ $softskill->softskillname}}</h3></div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /RESUME -->

            <!-- PORTFOLIO -->
            <div id="portfolio" class="know_tm_main_section">
                <div class="know_tm_portfolio">
                    <div class="know_tm_main_title">
                        <span>Resume</span>
                        <h3>My works that I did for clients</h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li><a href="#" class="current" data-filter="*">All</a></li>

                            @foreach(App\Category::all() as $category)
                                <li><a href="#" data-filter=".cat{{ $category->id }}">{{ $category->name }}</a></li>
                            @endforeach </ul>
                    </div>
                    <div class="portfolio_list">

                        <ul class="gallery_zoom">
                            @foreach(App\Portfolio::latest()->get() as $portfolio )
                                <li class="col-lg-4 grid-item cat{{ $portfolio->cat_id }} mb-30">
                                    <div class="list_inner">
                                        <div class="image">
                                            <img src="{{asset('frontend/img/thumbs/1-1.jpg')}}" alt="">
                                            <div class="main"
                                                 data-img-url="{{ $portfolio->image }}"></div>
                                        </div>
                                        <div class="overlay"></div>
                                        <img class="svg" src="{{asset('frontend/img/svg/social/vimeo.svg')}}" alt="">
                                        <div class="details">
                                            {{-- <span>Vimeo</span> --}}
                                            <h3>{!! $portfolio->title !!}</h3>
                                        </div>
                                        <a class="know_tm_full_link popup-vimeo" href="../../337293658-1.html"></a>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /PORTFOLIO -->

            <!-- SERVICES -->
            <div id="service" class="know_tm_main_section">
                <div class="know_tm_services">
                    <div class="know_tm_main_title">
                        <span>Service</span>
                        <h3>Never compromise with quality</h3>
                    </div>

                    <div class="service_list">

                        <ul>
                            @foreach(App\Models\Service::latest()->get() as $services )
                                <li>

                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="{{asset ($services->icon) }}"
                                                                alt=""></span>
                                        <h3 class="title">{{ $services->title }}</h3>
                                        <p class="text">{{ $services->description }}  </p>
                                        <a class="know_tm_full_link" href="#"></a>
                                        <div class="hidden_content">
                                            <div class="service_informations">
                                                <div class="image">
                                                    <img src="{{asset ($services->icon) }}" alt="">
                                                    <div class="main" data-img-url="{{asset ($services->icon) }}"></div>
                                                </div>
                                                <div class="description">
                                                    <p>Know is a leading web design agency with an award-winning design
                                                        team that creates innovative, effective websites that capture
                                                        your brand, improve your conversion rates, and maximize your
                                                        revenue to help grow your business and achieve your goals.</p>
                                                    <p>In today’s digital world, your website is the first interaction
                                                        consumers have with your business. That's why almost 95 percent
                                                        of a user’s first impression relates to web design. It’s also
                                                        why web design services can have an immense impact on your
                                                        company’s bottom line.</p>
                                                    <p>That’s why more companies are not only reevaluating their
                                                        website’s design but also partnering with Kura, the web design
                                                        agency that’s driven more than $2.4 billion in revenue for its
                                                        clients. With over 50 web design awards under our belt, we're
                                                        confident we can design a custom website that drives sales for
                                                        your unique business.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            @endforeach
                        </ul>

                    </div>

                </div>
            </div>
            <!-- /SERVICES -->

            <!-- TESTIMONIALS -->
            <div id="testimonials" class="know_tm_main_section">
                <div class="know_tm_testimonials">
                    <div class="know_tm_main_title">

                        <span>Testimonials</span>
                        <h3>What people say about me</h3>
                    </div>

                    <div class="testimonials_list owl-carousel owl-theme">
                        @foreach(App\Models\Testimonials::all() as $Service)
                            <div class="list_inner">
                                <div class="in">
                                    <div class="text">
                                        <p>{{ $Service->description }}</p>
                                    </div>
                                    <div class="details">
                                        <div class="left">
                                            <div class="avatar">
                                                <div class="main"
                                                     data-img-url="{{asset($Service->image)}}"></div>

                                            </div>
                                        </div>
                                        <div class="info">
                                            <h3>{{ $Service->name }}</h3>
                                            <span>{{ $Service->desination }}</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div id="contact" class="know_tm_main_section">
                <div class="know_tm_contact">
                    <div class="know_tm_main_title">
                        <span>Contact Me</span>
                        <h3>Contact me to get your work done</h3>
                    </div>
                    <div class="wrapper">
                        <div class="left">
                            <ul>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="img/svg/smartphone.svg" alt=""></span>
                                        <div class="short">
                                            <h3>Call Me</h3>
                                            <span>+123 456 7890</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="img/svg/letter.svg" alt=""></span>
                                        <div class="short">
                                            <h3>Email Us</h3>
                                            <span><a href="#"><span class="__cf_email__"
                                                                    data-cfemail="88e0ede4e4e7c8e1e3e6e7ffa6ebe7e5">[email&#160;protected]</span></a></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list_inner">
                                        <span class="icon"><img class="svg" src="img/svg/placeholder.svg" alt=""></span>
                                        <div class="short">
                                            <h3>Address</h3>
                                            <span>20, Bardeshi, Amin Bazar</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="fields">
                                <form action="{{ route('contact.store') }}" method="post" class="contact_form"
                                      id="contact_form"
                                      autocomplete="off">
                                    @csrf
                                    <div class="returnmessage"
                                         data-success="Your message has been received, We will contact you soon."></div>
                                    <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                    <div class="input_list">
                                        <ul>

                                            <li><input id="email" name="email" type="text" placeholder="Your Email">
                                            </li>
                                            <li><input id="phone" name="phone" type="number" placeholder="Your Phone">
                                            </li>
                                            <li><input id="address" name="address" type="text" placeholder="Your Name">
                                            </li>
                                            {{--                                            <li><input id="subject" type="text" placeholder="Subject"></li>--}}
                                        </ul>
                                    </div>
                                    {{--                                    <div class="message_area">--}}
                                    {{--                                        <textarea id="message" placeholder="Your message here"></textarea>--}}
                                    {{--                                    </div>--}}


                                    {{--                                    <div class="know_tm_button">--}}
                                    {{--                                        <a id="send_message" href="#">Submit Now</a>--}}
                                    {{--                                    </div>--}}
                                    <button type="submit" class="know_tm_button">Submit</button>
                                    <!-- If you want change mail address to yours, just open "modal" folder >> contact.php and go to line 4 and change detail to yours.  -->

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /CONTACT -->

        </div>
    </div>
</div>
<div class="know_tm_copyright hidden">
    <div class="container">
        <div class="inner">
            <div class="left">
                <p>Designed By Marketify, Share By <a href="https://nullphpscript.com" target="_blank">HTML
                        Template</a></p>
            </div>
            <div class="right">
                <ul>
                    <li><a href="#">Terms &amp; Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- MAGIC CURSOR -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /MAGIC CURSOR -->

</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min-1.js"></script>
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script src="{{asset('frontend/js/plugins.js')}}"></script>
<script src="{{asset('frontend/js/init.js')}}"></script>
<!-- /SCRIPTS -->

</body>
</html>
