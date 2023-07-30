@extends('frontend.main_master')
@section('main')

@section('title')
About Page | Portfolio
@endsection

 <!-- main-area -->
 <main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h2 class="title">About me</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Me</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__wrap__icon">
            <ul>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png')}}" alt=""></li>
                <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png')}}" alt=""></li>
            </ul>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- about-area -->
    <section class="about about__style__two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__image">
                        <img src="{{ $about_page->about_image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content">
                        <div class="section__title">
                            <span class="sub-title">01 - About me</span>
                            <h2 class="title">{{ $about_page->title }}</h2>
                        </div>
                        <div class="about__exp">
                            <div class="about__exp__icon">
                                <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                            </div>
                            <div class="about__exp__content">
                                <p><span>{!! $about_page->short_title !!}</p>
                            </div>
                        </div>
                        <p class="desc">{{ $about_page->short_description }}</p>
                        <a href="{{ $about_page->about_resume }}" class="btn" target="_blank">Download my resume</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about__info__wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                                    role="tab" aria-controls="about" aria-selected="true">About</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="skills-tab" data-bs-toggle="tab" data-bs-target="#skills" type="button"
                                    role="tab" aria-controls="skills" aria-selected="false">Skills</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="awards-tab" data-bs-toggle="tab" data-bs-target="#awards" type="button"
                                    role="tab" aria-controls="awards" aria-selected="false">courses | awards</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button"
                                    role="tab" aria-controls="education" aria-selected="false">education</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <p class="desc">{{ $about_page->long_description }}</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="skills" role="tabpanel" aria-labelledby="skills-tab">
                                <div class="about__skill__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">PHP 8.x</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><span class="percentage">90%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Laravel</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="percentage">85%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">HTML | CSS</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><span class="percentage">90%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">OOP PHP</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="percentage">60%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">JavaSrcipt | jQuery</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="percentage">65%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Bootstrap</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><span class="percentage">80%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">My SQL | PostegreSQL</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"><span class="percentage">90%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__skill__item">
                                                <h5 class="title">Git | GitHub</h5>
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"><span class="percentage">80%</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="awards" role="tabpanel" aria-labelledby="awards-tab">
                                <div class="about__award__wrap">
                                    <div class="row justify-content-center">
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/udemy.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">PHP registration, login and content management system</h5>
                                                    <p>Through the course process of creating a dynamic website that allows users to register accounts, 
                                                        log in securely, and manage their content. The curriculum covers fundamental concepts of PHP, 
                                                        such as user registration, user login, content management system, database integration MySQL, 
                                                        security vulnerabilities cross-site scripting (XSS), and front-end development using HTML, 
                                                        CSS, and JavaScript.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/udemy.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">PHP for Beginners - Become a PHP Master - CMS Project </h5>
                                                    <p>The main project of the course revolves around creating a fully functional CMS from scratch, 
                                                        including user registration and authentication, managing content, and implementing user roles 
                                                        and permissions. Database integration, covered include database design, creating tables, and 
                                                        executing SQL queries using PHP. Front-End Development, gain practical knowledge of HTML, CSS, 
                                                        and JavaScript to build a user-friendly and visually appealing interface for the CMS. Security 
                                                        and best practices emphasize essential security practices in PHP development, such as data validation, 
                                                        preventing SQL injection, and handling user authentication securely.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/udemy.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Introduction to Spatial Databases with PostGIS and QGIS 3</h5>
                                                    <p>Introduction to spatial databases with PostgreSQL. The course introduced the 
                                                        concept of spatial databases and their significance in handling geospatial data 
                                                        and non-geospatial data for data analysis. Introduction to PostGIS, understanding 
                                                        geospatial data, spatial queries and operations, integration with QGIS 3, practical projects, 
                                                        and geospatial analysis. The course could touch upon geospatial analysis techniques, 
                                                        such as buffering, spatial overlays, and proximity analysis, using PostGIS and QGIS 3.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/udemy.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Introduction to web programming for GIS applications</h5>
                                                    <p>Fundamentals of web programming such as HTML, CSS, and JavaScript. 
                                                        Web mapping libraries, popular web mapping libraries, and APIs, such as Leaflet,
                                                        Mapbox, or google maps API. Handling geospatial data, working with geospatial data 
                                                        formats geoJSON, shapefiles. Interactive web maps, including popups, markers, and 
                                                        custom map controls, enhance user experience and engagement. Geospatial analysis, 
                                                        using programming tools and libraries. GIS application development, building web map 
                                                        applications from scratch. Best practices and deployment deploying and hosting web-based projects.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/udemy.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Display and analyze GIS data on the web with Leaflet</h5>
                                                    <p>Introduction to web mapping, to visualize and analyze geospatial data on the internet. 
                                                        JavaScript leaflet is a popular open-source JavaScript library used for building 
                                                        interactive web maps that cover how to set up a leaflet, create a basic map, and add 
                                                        various map layers and markers. Working with data, different data formats commonly used 
                                                        in the geospatial world, such as geoJSON, and how to load this data into the leaflet library. 
                                                        Displaying data in web map applications, interactivity, popup features, and geospatial analysis 
                                                        using leaflet and JavaScript. Advanced features working with plugins, incorporating third-party APIs, 
                                                        and implementing custom map controls. Projects and case studies, analyzing real-world GIS data on web
                                                         maps using Leaflet.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/fcc.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">JavaScript Algorithms and Data Structures</h5>
                                                    <p>Course Structure, essential algorithms, and data structures. 
                                                        Algorithmic problem solving, data structures in JavaScript,
                                                        and understanding their use cases. Sorting and searching algorithms,
                                                        recursion big O notation, ES6 concepts, practice, and projects</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-9">
                                            <div class="about__award__item">
                                                <div class="award__logo">
                                                    <img src="{{ asset('frontend/assets/img/images/fcc.png')}}" alt="">
                                                </div>
                                                <div class="award__content">
                                                    <h5 class="title">Legacy Responsive Web Design</h5>
                                                    <p>HTML and CSS fundamentals, media queries, to create responsive designs. 
                                                        Flexbox and grid, accessibility, introducing web accessibility principles. 
                                                        Basic javascript for controlling functionality in web pages. Projects, 
                                                        in real-world scenarios. Free and community-driven, responsive web design.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                <div class="about__education__wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">MSc Geographic Information System GIS</h3>
                                                <span class="date">2019 - 2022</span>
                                                <p>University of Ulster 
                                                    Key Highlights:
                                                    <ol style="list-style: none; margin-left: 20px; padding-left: 0;">
                                                        <li style="list-style-type: disc; color: black;">Successfully completed a Master's degree in Geographic Information Systems through distance learning at the University of Ulster.</li>
                                                        <li style="list-style-type: disc; color: black;">Specialized in various modules, including GIS in Business and Society, Web-Based GIS, Spatial Analysis and Modelling, GIS Databases, Remote Sensing, and Automation with Python.</li>
                                                        <li style="list-style-type: disc; color: black;">Demonstrated proficiency in utilizing Python and relevant libraries such as GeoPandas, Pandas, Numpy, Matplotlib, and Contextily to develop a Python map project for visualizing spatial data.</li>
                                                        <li style="list-style-type: disc; color: black;">Principles of GIS,</li>
                                                        <li style="list-style-type: disc; color: black;">Spatial Data Management</li>
                                                        <li style="list-style-type: disc; color: black;">GIS in Business and Society,</li>
                                                        <li style="list-style-type: disc; color: black;">Web-GIS Html5, CSS, PHP, JavaScript, PostsgreSQL</li>
                                                        <li style="list-style-type: disc; color: black;">Remote Sensing</li>
                                                        <li style="list-style-type: disc; color: black;">PostgreSQL & PostGIS & QGIS</li>
                                                        <li style="list-style-type: disc; color: black;">Photogrammetry and Advanced Image Analysis</li>
                                                        <li style="list-style-type: disc; color: black;">Programming for GIS and Remote Sensing (Python, GeoPandas, Pandas, Arcpy)</li>
                                                    </ol>
                                                </p>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="about__education__item">
                                                <h3 class="title">BEng Environmental Engineering</h3>
                                                <span class="date">2007 - 2013</span>
                                                <p>Technological University of Western Macedonia 
                                                    Key Highlights:
                                                    <ul style="list-style-type: none; margin-left: 20px; padding-left: 0;">
                                                        <li style="list-style-type: disc; color: black;">Completed a Bachelor's degree in Environmental Engineering from the Technological University of Western Macedonia.</li>
                                                        <li style="list-style-type: disc; color: black;">Acquired expertise in applying engineering principles to address environmental challenges.</li>
                                                        <li style="list-style-type: disc; color: black;">Specialized in utilizing technological solutions to ensure sustainable business operations within time and budget constraints.</li>
                                                        <li style="list-style-type: disc; color: black;">Implemented industrial design processes to assess and mitigate water degradation.</li>
                                                        <li style="list-style-type: disc; color: black;">Developed strategies for water data analytics to improve water supply systems and ensure safety.</li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- services-area -->
    <section class="services__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section__title text-center">
                        <span class="sub-title">02 - my Services</span>
                        <h2 class="title">Provide awesome service</h2>
                    </div>
                </div>
            </div>
            <div class="services__style__two__wrap">
                <div class="row gx-0">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon01.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Business Strategy</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon02.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon03.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Product Design</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon05.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Animation</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon06.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Marketing</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon05.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Brand strategy</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon04.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Graphic Design</a></h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="services__style__two__item">
                            <div class="services__style__two__icon">
                                {{-- <img src="assets/img/icons/services_light_icon07.png" alt=""> --}}
                            </div>
                            <div class="services__style__two__content">
                                <h3 class="title"><a href="services-details.html">Visual Design</a></h3>
                                <p>Strategy is a forward-looking plan for your brand’s behavior.Strategy is a forward-looking plan.</p>
                                <a href="services-details.html" class="services__btn"><i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial testimonial__style__two">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="testimonial__wrap">
                        <div class="section__title text-center">
                            <span class="sub-title">06 - Client Feedback</span>
                            <h2 class="title">Some happy clients feedback</h2>
                        </div>
                        <div class="testimonial__two__active">
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>WPBakery/ uSA</span>
                                        <div class="testi__avatar__img">
                                            {{-- <img src="assets/img/images/testi_avatar01.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="testimonial__icon">
                                    <i class="fas fa-quote-left"></i>
                                </div>
                                <div class="testimonial__content">
                                    <p>We are motivated by the satisfaction of our clients. Put your trust in us &share in our H.Spond Asset Management is made up of a team of expert, committed and experienced people with a passion for financial markets. Our goal is to achieve continuous.</p>
                                    <div class="testimonial__avatar">
                                        <span>Adobe Photoshop</span>
                                        <div class="testi__avatar__img">
                                            {{-- <img src="assets/img/images/testi_avatar02.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__arrow"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial__two__icons">
            <ul>
                {{-- <li><img src="assets/img/icons/testi_shape01.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape02.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape03.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape04.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape05.png" alt=""></li>
                <li><img src="assets/img/icons/testi_shape06.png" alt=""></li> --}}
            </ul>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- blog-area -->
    <section class="blog blog__style__two">
        <div class="container">
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            {{-- <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb01.jpg" alt=""></a> --}}
                            <div class="blog__post__tags">
                                <a href="blog.html">Story</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">Facebook design is dedicated to what's new in design</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            {{-- <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb02.jpg" alt=""></a> --}}
                            <div class="blog__post__tags">
                                <a href="blog.html">Social</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">Make communication Fast and Effectively.</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            {{-- <a href="blog-details.html"><img src="assets/img/blog/blog_post_thumb03.jpg" alt=""></a> --}}
                            <div class="blog__post__tags">
                                <a href="blog.html">Work</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">13 january 2021</span>
                            <h3 class="title"><a href="blog-details.html">How to increase your productivity at work - 2021</a></h3>
                            <a href="blog-details.html" class="read__more">Read mORe</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog__button text-center">
                <a href="{{ route('blog') }}" class="btn">more blog</a>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

    <!-- contact-area -->
    <section class="homeContact">
        <div class="container">
            <div class="homeContact__wrap">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">Any questions? Feel free <br> to contact</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                            <h2 class="mail"><a href="mailto:Info@webmail.com">Info@webmail.com</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="homeContact__form">
                            <form action="#">
                                <input type="text" placeholder="Enter name*">
                                <input type="email" placeholder="Enter mail*">
                                <input type="number" placeholder="Enter number*">
                                <textarea name="message" placeholder="Enter Massage*"></textarea>
                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

@endsection