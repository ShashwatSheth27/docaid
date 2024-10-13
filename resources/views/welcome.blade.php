<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DocAid - Home</title>
        <link href="assets/img/logo.png" rel="icon">
        <link href="assets/img/logo.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <!-- ======= Top Bar ======= -->
        {{-- <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> Contact us now
            </div>
            </div>
        </div> --}}

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

            <a href="{{ route('home')}}" class="logo me-auto align-items-center d-flex gap-2"><img src="assets/img/logo.png" alt="">DocAid</a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                    {{-- <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li> --}}
                    @if (Route::has('login'))
                            @auth
                                <li class="dropdown"><a href=""><span>{{ Auth::user()->firstname }}</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('login') }}">Profile</a></li>
                                        <li><a href="{{ route('login') }}">Change Password</a></li><hr>
                                        <li><form method="POST" action="{{ route('logout') }}">
                                            @csrf
                
                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form></li>
                                    </ul>
                                </li>
                                <button class="appointment-btn scrollto"  data-bs-toggle='modal' data-bs-target='#appointment_modal'><span class="d-none d-md-inline">Make an Appointment</span></button>
                            @else
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                                <li class="dropdown"><a href=""><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                                    <ul>
                                        <li><a href="{{ route('login') }}">Patient Login</a></li>
                                        <li><a href="{{ route('showadminLogin') }}">Admin Login</a></li>
                                    </ul>
                                </li>
                            @endauth
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            
            </div>
        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                <div class="container">
                    <h2>Welcome to <span>DocAid</span></h2>
                    <p>Get an Instant Appointment with your Doctor with DocAid</p>
                </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>DocAid</span></h2>
                        <p>Get an Instant Appointment with your Doctor with DocAid</p>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>DocAid</span></h2>
                        <p>Get an Instant Appointment with your Doctor with DocAid</p>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            </div>
        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Featured Services Section ======= -->
            <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">

                <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title"><a href="">Best Cure</a></h4>
                    <p class="description">Provide with your health reports to get an instant cure</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title"><a href="">About Drug</a></h4>
                    <p class="description">Get every details about a particular medicine right there with you<p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-thermometer"></i></div>
                    <h4 class="title"><a href="">Vaccination</a></h4>
                    <p class="description">Schedule your child vaccination today</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title"><a href="">Appointments</a></h4>
                    <p class="description">Schedule your appointment with the doctor</p>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Featured Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                <h3>In an emergency? Need help now?</h3>
                <p>Schedule an instant appointment with the doctor on call without an inch of delay right there in your hands</p>
                @auth <button class="cta-btn scrollto bg-transparent" data-bs-toggle='modal' data-bs-target='#appointment_modal'>Get the Doctor</button> @endauth
                </div>

            </div>
            </section><!-- End Cta Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-user-md"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>

                    <p><strong>Doctors</strong></p>
                    {{-- <a href="">Find out more &raquo;</a> --}}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="far fa-hospital"></i>
                    <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Departments</strong></p>
                    {{-- <a href="">Find out more &raquo;</a> --}}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-flask"></i>
                    <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Research Lab</strong></p>
                    {{-- <a href="">Find out more &raquo;</a> --}}
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                    <i class="fas fa-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong></p>
                    {{-- <a href="">Find out more &raquo;</a> --}}
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Counts Section -->

            <!-- ======= Features Section ======= -->
            <section id="features" class="features">
            <div class="container" data-aos="fade-up">

                <div class="row">
                <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
                    <div class="icon-box mt-5 mt-lg-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Prescription Management</h4>
                    <p>Allow doctors to issue digital prescriptions that users can access through the app.</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Telemedicine Integration</h4>
                    <p>Enable virtual doctor consultations through video calls or chat.</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-images"></i>
                    <h4>Health Tips and Articles</h4>
                    <p>Provide health-related articles, tips, and information on various medical topics.</p>
                    </div>
                    <div class="icon-box mt-5">
                    <i class="bx bx-shield"></i>
                    <h4>Payment Integration</h4>
                    <p>Facilitate secure payment options for doctor consultations, lab tests, and other services.</p>
                    </div>
                </div>
                <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
                </div>

            </div>
            </section><!-- End Features Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Services</h2>
                <p>Functionality of doctor appointment applications.</p>
                </div>

                <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-heartbeat"></i></div>
                    <h4 class="title">Emergency Assistance</h4>
                    <p class="description">Provide emergency contact information or direct access to nearby medical facilities in case of urgent medical situations.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-pills"></i></div>
                    <h4 class="title">Specialty Search</h4>
                    <p class="description">Enable users to search for doctors based on their specialties, locations, and availability.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-hospital-user"></i></div>
                    <h4 class="title">Labs and Diagnostic Centers</h4>
                    <p class="description">Facilitate scheduling and access to lab tests and diagnostic services through partnerships with labs and centers.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon"><i class="fas fa-dna"></i></div>
                    <h4 class="title">Telemedicine Services</h4>
                    <p class="description">Offer virtual doctor consultations through video calls or secure chat options.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon"><i class="fas fa-wheelchair"></i></div>
                    <h4 class="title">Real-Time Availability</h4>
                    <p class="description">Display real-time availability of doctors' schedules to help users choose suitable appointment times.</p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon"><i class="fas fa-notes-medical"></i></div>
                    <h4 class="title">Prescription Management</h4>
                    <p class="description">Allow doctors to issue digital prescriptions and provide patients with easy access to their prescription details.</p>
                </div>
                </div>

            </div>
            </section><!-- End Services Section -->


            <!-- ======= Departments Section ======= -->
            <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Departments</h2>
                <p>The medical industry is vast and includes various departments, each with its specific functions and areas of expertise.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Cardiology</h4>
                        {{-- <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p> --}}
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Neurology</h4>
                        {{-- <p>Voluptas vel esse repudiandae quo excepturi.</p> --}}
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Hepatology</h4>
                        {{-- <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p> --}}
                        </a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                        <h4>Pediatrics</h4>
                        {{-- <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p> --}}
                        </a>
                    </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content">
                    <div class="tab-pane active show" id="tab-1">
                        <h3>Cardiology</h3>
                        <p class="fst-italic">Cardiologists are medical doctors who specialize in cardiology and have extensive training in this field.</p>
                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                        <p>Cardiology is a medical specialty that deals with the diagnosis, treatment, and prevention of diseases and disorders related to the cardiovascular system, which includes the heart and blood vessels. Cardiologists use various diagnostic tools and tests, such as electrocardiograms (ECGs or EKGs), stress tests, echocardiograms, and cardiac catheterization, to assess patients' heart health. Treatment options range from lifestyle changes and medications to advanced procedures and surgeries, depending on the specific condition and its severity.</p>
                    </div>
                    <div class="tab-pane" id="tab-2">
                        <h3>Neurology</h3>
                        <p class="fst-italic">Neurologists are medical doctors who specialize in neurology and have expertise in understanding the structure, function, and disorders of the nervous system.</p>
                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                        <p>Neurology is a medical specialty that deals with the diagnosis and treatment of disorders and diseases affecting the nervous system. The nervous system is a complex network of nerves and cells that transmit signals between different parts of the body, enabling communication and control of bodily functions.Neurologists use various diagnostic tools, such as MRI (Magnetic Resonance Imaging), CT scans (Computed Tomography), electroencephalograms (EEGs), nerve conduction studies, and lumbar punctures, to assess and diagnose neurological conditions. Treatment options vary depending on the specific condition and may include medications, physical therapy, occupational therapy, speech therapy, and in some cases, surgery.</p>
                    </div>
                    <div class="tab-pane" id="tab-3">
                        <h3>Hepatology</h3>
                        <p class="fst-italic">Hepatology is a medical specialty that focuses on the study, diagnosis, and treatment of diseases and disorders of the liver, gallbladder, biliary tree, and pancreas.</p>
                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                        <p>Hepatologists use various diagnostic tools and tests to assess liver function and diagnose liver diseases, including blood tests, imaging studies (such as ultrasound, CT scan, or MRI), liver biopsy, and non-invasive techniques like FibroScan to assess liver fibrosis.

                            Treatment options for liver diseases depend on the specific condition and its severity. Hepatologists may prescribe medications, lifestyle modifications (such as dietary changes and alcohol cessation), and in severe cases, consider liver transplantation.</p>
                    </div>
                    <div class="tab-pane" id="tab-4">
                        <h3>Pediatrics</h3>
                        <p class="fst-italic">Pediatrics is a medical specialty that focuses on the health and medical care of infants, children, and adolescents. a</p>
                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                        <p>Pediatricians are medical doctors who specialize in pediatrics and are trained to provide comprehensive medical care to young patients from birth to adolescence (up to 18 years of age in some healthcare systems). Pediatricians play a vital role in promoting overall health and well-being in children and ensuring their proper growth and development. Pediatricians work closely with families to provide medical care and guidance for children at different stages of their development. They often collaborate with other healthcare professionals, such as pediatric nurses, pediatric subspecialists (e.g., pediatric cardiologists, pediatric neurologists), and allied health professionals, to provide comprehensive and specialized care when needed.</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            </section><!-- End Departments Section -->

            <!-- ======= Testimonials Section ======= -->
            {{-- <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Testimonials</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                    </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                    <div class="testimonial-item">
                        <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                        <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                    </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
                </div>

            </div>
            </section><!-- End Testimonials Section --> --}}

            <!-- ======= Doctors Section ======= -->
            {{-- <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Doctors</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Medical Officer</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Anesthesiologist</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>Cardiology</span>
                    </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                        <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Neurosurgeon</span>
                    </div>
                    </div>
                </div>

                </div>

            </div>
            </section><!-- End Doctors Section --> --}}

           

            <!-- ======= Frequently Asked Questioins Section ======= -->
            <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                <h2>Frequently Asked Questioins</h2>
                <p>Certainly! Here are some frequently asked questions (FAQs).</p>
                </div>

                <ul class="faq-list">

                <li>
                    <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">How do I book an appointment with a doctor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        To book an appointment, open the Docaid app, search for your preferred doctor or specialty, view available time slots, and choose a convenient appointment time. Confirm your booking, and you're all set!
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Can I reschedule or cancel appointments through the app? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Yes, you can reschedule or cancel appointments through the app. Open the app, go to your upcoming appointments, and choose the option to reschedule or cancel as needed.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Does Docaid support telemedicine appointments? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Yes, Docaid may offer telemedicine appointments for virtual consultations with doctors via video calls or chat, depending on the availability and preferences of healthcare providers.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Can I view my medical records through the app? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Docaid may provide a secure platform for users to view and manage their medical records, test results, and prescription history, depending on the integration with healthcare providers' systems.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Is the Docaid app free to use? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        The basic features of Docaid may be available for free, but some premium or advanced functionalities may require a subscription or in-app purchases.
                    </p>
                    </div>
                </li>

                <li>
                    <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">How do I contact customer support if I have issues with the app? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                    <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                    <p>
                        Docaid typically provides a customer support feature within the app. You can access it through the app's settings or help section to report issues or ask for assistance.
                    </p>
                    </div>
                </li>

                </ul>

            </div>
            </section><!-- End Frequently Asked Questioins Section -->

            <!-- ======= Contact Section ======= -->
            {{-- <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                <div class="col-lg-6">

                    <div class="row">
                    <div class="col-md-12">
                        <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Gujarat, India</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>info@example.com<br>contact@example.com</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>65489413132<br>98416231131</p>
                        </div>
                    </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col form-group mt-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

                </div>

            </div>
            </section><!-- End Contact Section --> --}}

            <div class="modal" id="appointment_modal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title">Submit Appointment Details</h1>
                    </div>
                    <div class="modal-body">
                      <form id="appointment_form">
                        <div class="form_fields">
                          <div class="row g-1 p-2">
                            @csrf
                            <div class="row g-1 p-2">
                              <span class="doc-error"></span>
                            </div>
                            <div class="row g-1 p-2">
                              <label for="email">Patient's Email :</label><x-input type="email" name="email" id="email" class="block mt-1 w-full" />
                            </div>
                            <div class="row g-1 p-2">
                              <label for="dname">Doctor's Name :</label><x-input type="text" name="dname" id="dname" class="block mt-1 w-full"/>
                              <!-- <select id="doc_avl" name="dname"></select> -->
                            </div>
                            <div class="row g-1 p-2">
                              <label for="date_time">Appointment Date :</label><input type="date" name="adate" id="adate" class="block mt-1 w-full rounded-md shadow-sm border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" min="{{ date("Y-m-d")}}">
                            </div>
                            <div class="row g-1 p-2">
                              <label for="date_time">Appointment Time :</label><input type="time" name="atime" id="atime" class="block mt-1 w-full rounded-md shadow-sm border-gray-800 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" min="<?php date_default_timezone_set("Asia/Calcutta");echo(date("H:i"))?>">
                            </div>
                            <div class="row g-1 p-2">
                              <button type="submit" name="appointment_submit" id="appointment_submit" class="btn btn-primary">Submit Details</button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
            <div class="container">
                <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <h3>DocAid</h3>
                        {{-- <p>
                            Gujarat, <br>
                            India<br><br>
                            <strong>Phone:</strong>74681532822<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div> --}}
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li> --}}
                    {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li> --}}
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('register') }}">SignUp</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Patient SignIn</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('showadminLogin') }}">Admin SignIn</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Departments</h4>
                    <ul>
                    <li><i class="bx bx-chevron-right"></i> Cardiology</li>
                    <li><i class="bx bx-chevron-right"></i> Neurology</li>
                    <li><i class="bx bx-chevron-right"></i> Hepatology</li>
                    <li><i class="bx bx-chevron-right"></i> Pediatrics</li>
                    {{-- <li><i class="bx bx-chevron-right"></i> Graphic</li> --}}
                    </ul>
                </div>

                {{-- <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>

                </div> --}}

                </div>
            </div>
            </div>

            <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>DocAid</span></strong>. All Rights Reserved
            </div>
            </div>
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>

    </body>
</html>
