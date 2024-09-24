@extends('layouts.layout')

@section('content')

    <body class="main-content">
        <header class="container header active" id="home">
            <div class="header-content">
                <div class="left-header">
                    <div class="h-shape"></div>
                    <div class="image">
                        <img src="\img\Prasad-removing-background.png" alt=""
                            style="border-radius: 40px; box-shadow: black;">
                    </div>
                </div>
                <div class="right-header">
                    <h1 class="name">
                        Hi, I'm <span>Prasad Sandaruwan.</span>
                        Full Stack developer
                    </h1>
                    <p>
                        I'm a passionate full stack developer, crafting stunning digital experiences with a blend of
                        creativity and technical expertise. Let's build captivating websites that leave a lasting
                        impression!
                    </p>
                    <div class="btn-con">
                        <a href="{{ asset('img/cv.pdf') }}" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <section class="container about" id="about">
                <div class="main-title">
                    <h2>About <span>me</span><span class="bg-text">my stats</span></h2>
                </div>
                <div class="about-container">
                    <div class="left-about">
                        <h4>Information About me</h4>
                        <p>
                            As a passionate full stack developer, I thrive on crafting seamless digital experiences that
                            blend aesthetics and functionality. With a keen eye for detail and a user-centric approach, I
                            aim to create intuitive designs that captivate and delight users. <br /> <br /> My strong
                            technical skills in frontend development empower me to bring these visions to life. Constantly
                            seeking growth and innovation, I am dedicated to staying ahead of industry trends and
                            collaborating on projects that challenge and inspire me. Let's connect and turn ideas into
                            exceptional realities.
                        </p>
                        <div class="btn-con">
                            <a href="{{ asset('img/cv.pdf') }}" class="main-btn">
                                <span class="btn-text">Download CV</span>
                                <span class="btn-icon"><i class="fas fa-download"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="right-about">

                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">5+</p>
                                <p class="small-text">Frontend <br /> Projects</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">10+</p>
                                <p class="small-text">Months of <br /> FRONTEND Experience</p>
                            </div>
                        </div>
                        <div class="about-item">
                            <div class="abt-text">
                                <p class="large-text">1+</p>
                                <p class="small-text">Years of <br /> fullstack</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-stats">
                    <h4 class="stat-title">My Skills</h4>
                    <div class="progress-bars">
                        <div class="progress-bar">
                            <p class="prog-title">html5</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="html"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">css3</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="css"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">javascript</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="js"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">ReactJS</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="react"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">LARAVEL PHP FRAMEWORK</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="react"></span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-bar">
                            <p class="prog-title">MYSQL</p>
                            <div class="progress-con">
                                <div class="progress">
                                    <span class="react"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <h4 class="stat-title">EDUCATION</h4>
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="tl-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>

                        <h5><span> Currently pursuing a Higher National Diploma
                                in Information Technology - SLIATE Badulla</span></h5>
                    </div>

                </div>




            </section>
            <section class="container" id="portfolio">
                <div class="main-title">
                    <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
                </div>
                <p class="port-text">
                    Here is some of my work that I've done in various programming languages.
                </p>
                <div class="portfolios">
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="img/port1.jpg" alt="">
                        </div>
                        <h3 style="text-align: center;">Project Source</h3>
                        <div class="hover-items">
                            <h3>Project Source</h3>
                            <div class="icons">
                                <a href="https://github.com/prasadsandaruwan69/react-car" class="icon">
                                    <i class="fab fa-github"></i>
                                </a>
                              
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7193328606083751936/" class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <div class="image">
                            <img src="img/port2.jpg" alt="">
                        </div>
                        <h3 style="text-align: center;">Project Source</h3>
                        <div class="hover-items">
                            <h3>Project Source</h3>
                            <div class="icons">
                                <a href="https://github.com/prasadsandaruwan69/news-app-react" class="icon">
                                    <i class="fab fa-github"></i>
                                </a>
                               
                                <a href="https://www.linkedin.com/feed/update/urn:li:activity:7197988072959979520/" class="icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="container contact" id="contact">
                <div class="contact-container">
                    <div class="main-title">
                        <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
                    </div>
                    <div class="contact-content-con">
                        <div class="left-contact">
                            <h4>Contact me here</h4>
                            <p>
                                Reach out for collaboration and opportunities. Let's connect!
                            </p>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Location</span>
                                    
                                  
                                        : <small>85, Bimpokunugama , Hambegamuwa</small>
                                    
                                </div>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                        <span>Email</span>
                                  
                                     :<small>prasadjgunasir898@gmail.com</small>
                                  
                                </div></div>

                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-mobile"></i>
                                        <span>Mobile Number</span>
                                  
                                   
                                    : <small>+94 70 1251898 /+94 74 0855069</small> 
                                   
                                </div>
                                </div>
                                <div class="contact-item">
                                    <div class="icon">
                                        <i class="fas fa-globe-africa"></i>
                                        <span>Languages</span>
                                    </div>
                                    <p>
                                        <span>: Sinhala, English</span>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-icons">
                                <div class="contact-icon">
                                    <a href="https://web.facebook.com/?_rdc=1&_rdr" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/feed/" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://github.com/prasadsandaruwan69" target="_blank">
                                        <i class="fab fa-github"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="right-contact">
                            <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
                                @csrf
                                <div class="input-control i-c-2">
                                    <input type="text" name="name" required placeholder="YOUR NAME">
                                    <input type="email" name="email" required placeholder="YOUR EMAIL">
                                </div>
                                <div class="input-control">
                                    <textarea name="message" cols="15" rows="8" placeholder="Message Here..." required></textarea>
                                </div>
                                <div class="submit-btn">
                                    <button type="submit" class="main-btn ">
                                        <span class="btn-text">Submit</span>
                                        <span class="btn-icon"><i class="fas fa-envelope"></i></span>
                                    </button>
                                </div>
                            </form>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <div class="controls">
            <div class="control active-btn" data-id="home">
                <i class="fas fa-home"></i>
            </div>
            <div class="control" data-id="about">
                <i class="fas fa-user"></i>
            </div>
            <div class="control" data-id="portfolio">
                <i class="fas fa-briefcase"></i>
            </div>

            <div class="control" data-id="contact">
                <i class="fas fa-envelope-open"></i>
            </div>
        </div>
        <div class="theme-btn">
            <i class="fas fa-sun"></i>
        </div>
    @endsection
