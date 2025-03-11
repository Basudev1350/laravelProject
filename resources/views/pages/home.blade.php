@extends('layouts.layout')
@section('title', 'Different Committee')
@section('main')
    <main class="main">
        <section id="home" class="hero homeSection">
        <div id="upperHeader" class="upperHeader">
            <ul>
                <li>
                    <i class="fa-solid fa-phone"></i>
                    1800-657-876
                </li>
                <li>
                    <i class="fa-solid fa-envelope"></i>
                    hello@yoursite.com
                </li>
                <li>Join Community </li>
                <li>Partnerships & Affiliations</li>
                <li>Awards & Accreditations</li>
                <li>Blogs</li>
                <li>Career</li>
                <li class="socialIcon">
                    <i class="fa-brands fa-facebook-f" ></i>
                </li>
                <li class="socialIcon">
                    <i class="fa-brands fa-instagram"></i>
                </li>
                <li class="socialIcon">
                    <i class="fa-brands fa-linkedin"></i>
                </li>
                <li class="socialIcon">
                    <i class="fa-brands fa-google"></i>
                </li>
                <li class="socialIcon">
                    <i class="fa-brands fa-youtube"></i>           
                </li>
            </ul>
        </div>
        <header id="header" class="header d-flex align-items-center sticky-top">
                <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
                    <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img src="assets/img/logo.png" alt="" style="width:100%">
                    </a>
                    <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="#home" class="active"><img src="assets/img//home.png" style="width:20px;"></a></li>
                        <li><a href="#about">About Dr. Kallur</a></li>
                        <li><a href="#treatments">Treatments</a></li>
                        <li><a href="#expertise">Expertise</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#resources">Resources</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                    </nav>
                    <div class="header-social-links">
                    <a href="#appointment"
                    style="padding: 8px 40px;background-color: #1f5fc5;transition: 0.3s;font-size: 13px;color: #fff;"
                    >Appointment</a>
                    </div>
                </div>
        </header>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h2 class="heading">Dr. K.G. Kallur</h2>
                <h5 class="subTitle">MBBS, DRM, MD</h5>
                <p class="text mt-3">From regenerative to vinyasa I will create a
                personalized yoga and wellness classes no
                matter your sport level or age</p>
                <button
                class="bookAppointment"
                >Book Appointment</button>
            </div>
            <div class="col-lg-6 topSectionRight">
                <img src="./assets//img/Doctor-Hero-Photoroom.png" class="img-fluid" style="width: 65%;filter: drop-shadow(11.126px 4.495px 9px rgba(0,0,0,0.1));">
            </div>
            </div>
        </div>
        </section>
        <section class="about mt-5" id="about">
            <div class="row">
                <div class="col-md-6">
                    <img src="./assets/img/image.jpg" style="width:95%;border-radius: 20px;">
                </div>
                <div class="col-md-6">
                    <h2 class="aboutHeading mt-2">About Dr.Kumarswamy
                    Gangadharayya Kallur </h2>
                    <p class="aboutText mt-3">
                        Dr. Kallur is a member of several professional organizations, including the Society of Nuclear Medicine (India), the Association of Nuclear Cardiology Society of India, and the Association of Nuclear Medicine Physicians of India (ANMPI). He is committed to providing personalised care by creating a 
                        comfortable environment for his patients through the use of 
                    </p>
                    <button class="learnMore">
                        Learn More <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i>
                    </button>
                </div>
            </div>
        </section>
        <section class="expertise mt-5" id="expertise">
            <h3 class="expertiseTitle">More than 25 speciality <br> and expertise area</h3>
            <p  class="expertiseText mt-3 mb-3">They live in Bookmarksgrove right at the coast</p>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon1.png">
                          <h3 class="expertiseHeading mt-3">Safety First Quality</h3>
                          <p>Sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon1.png">
                          <h3 class="expertiseHeading mt-3">Safety First Quality</h3>
                          <p>Sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon2.png">
                          <h3 class="expertiseHeading mt-3">Satisfaction</h3>
                          <p>Far far away, behind the word mounts, far from the countries vokalia and they live in right at the coast.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon2.png">
                          <h3 class="expertiseHeading mt-3">Satisfaction</h3>
                          <p>Far far away, behind the word mounts, far from the countries vokalia and they live in right at the coast.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon3.png">
                          <h3 class="expertiseHeading mt-3">Patient-Centric Approach</h3>
                          <p>I am so happy, my dear friend. so absorbed in the exquisite sense of mere tranquil existence</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon3.png">
                          <h3 class="expertiseHeading mt-3">Patient-Centric Approach</h3>
                          <p>I am so happy, my dear friend. so absorbed in the exquisite sense of mere tranquil existence</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon3.png">
                          <h3 class="expertiseHeading mt-3">Patient-Centric Approach</h3>
                          <p>I am so happy, my dear friend. so absorbed in the exquisite sense of mere tranquil existence</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card" style="border-radius: 20px;padding: 10px 10px 10px 10px;">
                        <div class="card-body">
                          <img src="assets/img/icon3.png">
                          <h3 class="expertiseHeading mt-3">Patient-Centric Approach</h3>
                          <p>I am so happy, my dear friend. so absorbed in the exquisite sense of mere tranquil existence</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button class="learnMore">
                    View All <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i>
                </button>
            </div>
        </section>
        <section class="history mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img src="./assets/img/layer26.png" style="width: 100%;border-radius: 30px;">
                </div>
                <div class="col-md-4">
                    <h3 class="historyTitle">Dr. Kumarswamy Gangadharayya Kallur <span style="color: #1f5fc5;">Career Journey</span></h3>
                </div>
                <div class="col-md-4">
                    <div class="timeline mt-2">
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="timeline-dot"></div>
                        <div class="timeline-right">
                            <div class="mileStoneBox">
                                <h3 class="milestone">Doctor Milestone</h3>
                                <h3 class="milestoneYear">1996</h3>
                            </div>
                            <h5 class="milestoneText">Startd His Career</h5>
                            <p class="achievement">Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996 and he has been serving as the director of the department since then.
                            </p>
                        </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="timeline-dot"></div>
                        <div class="timeline-right">
                            <div class="mileStoneBox">
                                <h3 class="milestone">Doctor Milestone</h3>
                                <h3 class="milestoneYear">2001</h3>
                            </div>
                            <h5 class="milestoneText">First Achivement</h5>
                            <p class="achievement">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996 and he has been serving as the director of the department since then.
                            </p>
                        </div>
                        </div>
                        <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                            <div class="timeline-dot"></div>
                            <div class="timeline-right">
                            <div class="mileStoneBox">
                                <h3 class="milestone">Doctor Milestone</h3>
                                <h3 class="milestoneYear">2008</h3>
                            </div>                            
                            <h5 class="milestoneText">Second Achivement</h5>
                            <p class="achievement">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996 and he has been serving as the director of the department since then.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bookMyAppointment mt-5">
            <div class="row">
                <div class="col-md-4">
                   @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form style="padding-left: 10px;padding-right: 10px;" action="{{ url('/add-appointment') }}" method="post">
                        @csrf
                        <div class="card" style="padding: 10px 8px 10px 8px;border-radius: 15px;">
                            <div class="card-body">
                                <h3 class="bookMyAppointmentTitle">Book an Appointment</h3>
                                <div class="form-group mt-3">
                                <input type="text" class="form-control" placeholder="Name" name="name" style="padding: 10px;">
                                </div>
                                <div class="form-group mt-3">
                                <input type="text" class="form-control" placeholder="Phone" name="phoneNo" style="padding: 10px;">
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" placeholder="Email" name="email" style="padding: 10px;">
                                </div>
                                <div class="form-group mt-3">
                                    <select class="form-control" name="appointmentType" style="padding: 10px;">
                                        <option value="" disabled selected>Select Appointment Type</option>
                                        <option value="Day">Day</option>
                                        <option value="Night">Night</option>
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" placeholder="Message" style="height: 100px;" name="message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 bookMyAppointmentButton" style="width: 100%;">Book My Appointment</button>
                            </div>
                        </div> 
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center bookMyAppointmentRight">
                <div>
                    <h5 class="bookMyAppointmentSubTitle">Dedicated to provide best the treatment</h5>
                        <p class="bookMyAppointmenttext mt-3">From regenerative to vinyasa I will create a
                        personalized yoga and wellness classes no
                        matter your sport level or age</p>
                        <button class="btn btn-primary btnBookMyAppointmentButton">Take an Appointment</button>
                </div>
                </div>
            </div>
        </section>
        <section class="treatments mt-5" id="treatments">
            <h3 class="treatmentTitle">Offering 50+ specialized treatments</h3>
            <div class="swiper mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide-card">
                            <h3 class="swiper-slide-card-heading">Radiation Therapy</h3>
                            <p  class="swiper-slide-card-text">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996...
                            </p>
                            <button type="button" class="btn-swiper">Learn More <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i></button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-card">
                            <h3 class="swiper-slide-card-heading">Radiation Therapy</h3>
                            <p  class="swiper-slide-card-text">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996...
                            </p>
                            <button type="button" class="btn-swiper">Learn More <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i></button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-card">
                            <h3 class="swiper-slide-card-heading">Radiation Therapy</h3>
                            <p  class="swiper-slide-card-text">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996...
                            </p>
                            <button type="button" class="btn-swiper">Learn More <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i></button>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-slide-card">
                            <h3 class="swiper-slide-card-heading">Radiation Therapy</h3>
                            <p  class="swiper-slide-card-text">
                                Dr. Kallur established the Nuclear Medicine 
                                Department at HCG in 1996...
                            </p>
                            <button type="button" class="btn-swiper">Learn More <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i></button>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="row mt-2">
                <div class="col-md-10">
                    <div class="custom-navigation mt-3">
                        <button id="custom-prev"><i class="fa-solid fa-arrow-left"   style="color: #fff;font-size: 15px;"></i></button>
                        <button id="custom-next"><i class="fa-solid fa-arrow-right"  style="color: #fff;font-size: 15px;"></i></button>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit mt-3" class="btn btn-primary mt-3 bookMyAppointmentButton" style="width: 100%;">View All <i class="fa-solid fa-arrow-right"  style="font-size: 15px;"></i></button>
                </div>
            </div>
        </section>
        <section class="chooseUs mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="image-container">
                        <img src="./assets/img/Doctor-Hero-Photoroom.png"  class="hero-image">
                        <div class="rotate"></div>
                    </div>
                </div>
                <div class="col-md-6 offset-md-1">
                    <h5 class="chhoseUsTitle">
                        Why Choose 
                        <span style="color: #222222;">
                            Dr. Kumarswamy
                            Gangadharayya Kallur
                        </span>
                    </h5>
                    <div class="chooseMenu">
                        <ul>
                            <li><i class="fa-solid fa-check  chooseIcon"></i> Complete Blood Count with Esr</li>
                            <li><i class="fa-solid fa-check  chooseIcon"></i>Lipid Profile, Live Profile, Kidney Profile</li>
                            <li><i class="fa-solid fa-check  chooseIcon"></i>USG Abdomen with Pelvis, Mammography</li>
                            <li><i class="fa-solid fa-check  chooseIcon"></i> Complete Blood Count with Esr</li>
                            <li><i class="fa-solid fa-check  chooseIcon"></i>Lipid Profile, Live Profile, Kidney Profile</li>
                            <li><i class="fa-solid fa-check  chooseIcon"></i>USG Abdomen with Pelvis, Mammography</li>
                        </ul>
                        <button type="submit" class="btn btn-primary mt-4 bookMyAppointmentButton">Book Appointment</button>
                    <div>
                </div>
            </div>
        </section>
        <section class="reviews">
            <h5 class="reviewsTitle">Patient reviews and success stories</h5>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="./assets/img/layer13.png" style="width: 100%;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 offset-md-1">
                                <img src="./assets/img/layer15.png">
                                <h3 class="reviewsSubTitle">Based on 160 user review from
                                review platforms</h3>
                                <button class="btn-review mt-3">Submit Your Review</button>
                            </div>
                            <div class="col-md-6">
                                <img src="./assets/img/layer14.png" style="width: 100%;">
                                <img src="./assets/img/layer16.png" style="width: 100%;">
                            </div>
                        </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="./assets/img/layer13.png" style="width: 100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-1">
                            <img src="./assets/img/layer15.png">
                            <h3 class="reviewsSubTitle">Based on 160 user review from
                            review platforms</h3>
                            <button class="btn-review mt-3">Submit Your Review</button>
                        </div>
                        <div class="col-md-6">
                            <img src="./assets/img/layer14.png" style="width: 100%;">
                            <img src="./assets/img/layer16.png" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="./assets/img/layer13.png" style="width: 100%;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-1">
                            <img src="./assets/img/layer15.png">
                            <h3 class="reviewsSubTitle">Based on 160 user review from
                            review platforms</h3>
                            <button class="btn-review mt-3">Submit Your Review</button>
                        </div>
                        <div class="col-md-6">
                            <img src="./assets/img/layer14.png" style="width: 100%;">
                            <img src="./assets/img/layer16.png" style="width: 100%;">
                        </div>
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>

        </section>
        <section class="faq">
            <h3 class="faqTitle">Frequently Asked Questions</h3>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="accordion" id="accordionLeft">
                            <div class="accordion-item mt-2">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        There Is No Such Thing As A CSS Absolute Unit
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            
                                    </div>
                                </div>
                            </div>
                                <div class="accordion-item mt-2">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            There Is No Such Thing As A CSS Absolute Unit                            </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                        Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item mt-2">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            There Is No Such Thing As A CSS Absolute Unit                            </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionLeft">
                                        <div class="accordion-body">
                                        Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="accordionRight">
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    There Is No Such Thing As A CSS Absolute Unit                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    There Is No Such Thing As A CSS Absolute Unit                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            </div>
                            </div>
                        </div>
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    There Is No Such Thing As A CSS Absolute Unit                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionRight">
                                <div class="accordion-body">
                                Sed ut perspiciatis unde omnis iste natus error volup cusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo Inventore veritatis et quasi architecto beatae                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-5">
                <button class="learnMore">
                    View All <i class="fa-solid fa-arrow-right" style="color: #1f5fc5; font-size: 18px;"></i>
                </button>
            </div>
        </section>
        <section class="resourceArea" id="resources">
            <h3 class="resourceTitle">Explore Our <span style="color: #1f5fc5;">Resources Area</span> </h3>
            <div class="row mt-4">
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/layer18.png" style="width: auto;">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="resourceHeading">Our Treatment Packages</h2>
                                    <p>Updated on August 10,2024</p>
                                </div>
                                <div class="col-md-2" style="display: flex;justify-content: center;">
                                    <img src="./assets/img/download.png" style="width: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs mt-5">
            <h3 class="blogTitle mt-3 mb-3"><span style="color: #222222;">Latest</span> Blogs, News & Updates</h3>
            <div class="row">
                <div class="col-md-9">
                    <img src="./assets/img/layer19.png" style="width: 100%;">  
                </div>
                <div class="col-md-3">
                    <img src="./assets/img/layer20.png" style="width: 100%;">  
                </div>
            </div>
        </section>
        <section class="affiliations mt-5" id="appointment">
            <h3 class="affiliationsTitle">Affiliations <span style="color: #222222;">and</span> Partners</h3>
            <div class="row mt-4">
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-1.png" class="img-fluid">
                </div>
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-2.png" class="img-fluid">
                </div>
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-3.png" class="img-fluid">
                </div>
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-4.png" class="img-fluid">
                </div>
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-5.png" class="img-fluid">
                </div>
                <div class="col-xl-2 col-md-2 col-sm-6 col-6">
                    <img src="./assets/img/layer25-6.png" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6 bbokAppointmentLeft mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="bokAppointmentSubTitle">Dedicated to provide best the treatment</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="bokAppointmenttext">30+ <br> years of experience</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="bokAppointmenttext">25+ <br> areas of expertise</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="bokAppointmenttext">19+ <br> Awards & Accrediations</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="bokAppointmenttext">25+ <br> areas of expertise</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" >
                   @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form style="padding-left: 10px;padding-right: 10px;" action="{{ url('/add-appointment') }}" method="post">
                            <input type="hidden" name="_token" value="x5FtNwjLnnyYT1aWlRaXGfo8Su5V3CxkFOt0LUUW" autocomplete="off">                        <div class="card" style="padding: 10px 8px 10px 8px;border-radius: 15px;">
                                <div class="card-body">
                                    <h3 class="bookMyAppointmentTitle">Book an Appointment</h3>
                                    <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Name" name="name" style="padding: 10px;">
                                    </div>
                                    <div class="form-group mt-3">
                                    <input type="text" class="form-control" placeholder="Phone" name="phoneNo" style="padding: 10px;">
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" style="padding: 10px;">
                                    </div>
                                    <div class="form-group mt-3">
                                        <select class="form-control" name="appointmentType" style="padding: 10px;">
                                            <option value="" disabled="" selected="">Select Appointment Type</option>
                                            <option value="Day">Day</option>
                                            <option value="Night">Night</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3 bookMyAppointmentButton" style="width: 100%;">Book My Appointment</button>
                                </div>
                            </div> 
                        </form>
                    </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        @if(session('success'))
            var successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        @endif
    });
</script>
@endsection
