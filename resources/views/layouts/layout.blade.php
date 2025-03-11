<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dr. K G Kallur</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Satoshi:wght@400;700&display=swap">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> 
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="index-page">
  <div id="main">
    @yield('main')
  </div>
  <footer id="footer" class="footer">
    <div class="container">
        <div class="row" style="border-bottom: 1px solid #fff;padding-bottom: 30px;">
            <div class="col-md-3 mb-3">
                <img src="./assets/img/logo2.png" style="width: 100%;">
                <p class="footerText mt-3">From regenerative to vinyasa I will create a
                personalized yoga and wellness classes no
                matter your sport level or age</p>
                <div class="footerMenu">
                    <ul>
                        <li><i class="fa-solid fa-phone footerIcon"></i> (123) 456-7890</li>
                        <li><i class="fa-solid fa-envelope footerIcon"></i>hello@yourwebsite.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <h3 class="footerHeading">Quick Links</h3>
                <div class="footerMenu">
                    <ul>
                        <li>Ambulance</li>
                        <li>Pathology</li>
                        <li>Radiology</li>
                        <li>Pharmacy</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <h3 class="footerHeading">HEALTH CHECKUP</h3>
                <div class="footerMenu">
                    <ul>
                        <li>Woman Health</li>
                        <li>Cancer Screening</li>
                        <li>Cardiac Health</li>
                        <li>MRI Checkup</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 mb-3">
                <h3 class="footerHeading">Departments</h3>
                <div class="footerMenu">
                    <ul>
                        <li>General</li>
                        <li>Dermatology</li>
                        <li>Cardiology</li>
                        <li>Cancer</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <button class="footerButton">
                    <i class="fa-solid fa-paper-plane" style="color: #fff; font-size: 18px;"></i> Take an Appointment
                </button>
                <button class="footerButton">
                    <i class="fa-solid fa-paper-plane" style="color: #fff; font-size: 18px;"></i> Connect on whatsapp
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p class="text-white mt-4">©2024 Dr. KG Kalur. All rights reserved | Powered By Timd</p>
            </div>
            <div class="col-md-6">
                <div class="footerMenu2">
                    <ul>
                        <li><i class="fa-brands fa-facebook-f text-white"></i></li>
                        <li><i class="fa-brands fa-pinterest-p text-white"></i></li>
                        <li><i class="fa-brands fa-twitter text-white"></i></li>
                        <li><i class="fa-brands fa-instagram text-white"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </footer>
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
  <script>
       const swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            breakpoints: {
                320: { 
                    slidesPerView: 1,
                },
                768: { 
                    slidesPerView: 2,
                },
                1024: { 
                    slidesPerView: 3,
                }
            }
        });

        document.getElementById('custom-prev').addEventListener('click', () => {
            swiper.slidePrev();
        });

        document.getElementById('custom-next').addEventListener('click', () => {
            swiper.slideNext();
        });
  </script>
</body>
</html>