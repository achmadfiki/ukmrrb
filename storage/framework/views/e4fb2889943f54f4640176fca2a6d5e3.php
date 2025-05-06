<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <!-- Swiper CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

		<link rel="shortcut icon" href="<?php echo e(asset('assets/icons/logoukm.ico')); ?>">
		<title>ROBOTIKA UNEJ</title>
		<!-- Tambahkan di sini -->
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
      
	</head>
    <body>
		<!-- navbar -->
		<header class="header">
         <nav class="nav container">
            <div class="nav__data">
				<a class="navbar-brand" href="#">
					<img src="<?php echo e(asset('assets/images/logounej.png')); ?>" hight="50" width="50" alt=""href="#">
					<img src="<?php echo e(asset('assets/images/logorobotika.png')); ?>" hight="50" width="50" alt=""href="#">
				</a>
               
            <div class="nav__toggle" id="nav-toggle">
				  <img src="<?php echo e(asset('assets/icons/menu-line.png')); ?>" alt="Menu" class="nav__burger">
				  <img src="<?php echo e(asset('assets/icons/close-fill.png')); ?>" alt="Menu" class="nav__close">
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">  
               <ul class="nav__list">
                  <li><a href="#" class="nav__link">Home</a></li>

                  <li><a href="#" class="nav__link">Company</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Analytics <img src="<?php echo e(asset('assets/icons/arrow-down-s-line.png')); ?>" alt="" class="dropdown__arrow">
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Overview
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Transactions
                           </a>
                        </li>

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Reports <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Documents
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Payments
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Refunds
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  
                  <li><a href="#" class="nav__link">Products</a></li>

                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Users  <img src="<?php echo e(asset('assets/icons/arrow-down-s-line.png')); ?>" alt="" class="dropdown__arrow">
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Profiles
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-lock-line"></i> Accounts
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Messages
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li><a href="#" class="nav__link">Contact</a></li>
               </ul>
            </div>
         </nav>
      </header>
	  <!-- navbar -->
	  <!-- bener -->
      <section id="hero">
         <div class="hero-box">
            <div class="box logo-box">
                  <img src="../../assets/images/logorobotika.png" alt="Logo">
            </div>
            <div class="box text-box">
                  <h1>Belajar Bootstrap <br /> Bersama <span class="text-danger">Ngoding Mastery</span> <br /> 2024</h1>
                  <p class="teks-custom fadeInLeft delay-08s">
                     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat, magni odit nihil modi esse placeat! Itaque vel necessitatibus molestiae doloremque.
                  </p>
                  <div class="fadeInRight delay-1s">
                     <a href="#about" class="btn btn-danger">Tentang Kami</a>
                     <a href="#projects" class="btn btn-outline-danger">Our Projects</a>
                  </div>
            </div>
         </div>
      </section>
      <!-- DIVISI -->
      <section>
			<div class="container-fluid layanan pt-5 pb-5">
				<div class="lower-content text-center">
					<div class="row pt-4">
						<div class="col-md-4">
							<span class="lingkaran">
								<img src="../../assets/images/krai.png" alt="Berita">
							</span>
							<h3 class="sub-divisi">KRAI</h3>
						</div>
						<div class="col-md-4">
							<span class="lingkaran">
									<img src="../../assets/images/krsri.png" alt="Berita">
								</span>
							<h3 class="sub-divisi">KRSRI</h3>
						</div>
						<div class="col-md-4">
							<span class="lingkaran">
								<img src="../../assets/images/krsbi.png" alt="Berita">
							</span>
							<h3 class="sub-divisi">KRSBI Beroda</h3>
						</div>
						<div class="col-md-4">
							<span class="lingkaran">
								<img src="../../assets/images/krtmi.png" alt="Berita">
							</span>
							<h3 class="sub-divisi">KRTMI</h3>
						</div>
						<div class="col-md-4">
							<span class="lingkaran">
								<img src="../../assets/images/krbai.png" alt="Berita">
							</span>
							<h3 class="sub-divisi">KRBAI</h3>
						</div>
						
					</div>
				</div>
			</div>
		</section>
      <!-- ourteam -->
      <section class="container py-5">  
         <h2 class="fw-bold">Our Team</h2>
         <div class="slide-container swiper">
            <div class="slide-content">
               <div class="card-wrapper swiper-wrapper">
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile1.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile2.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile3.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile4.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile5.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile6.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile7.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile8.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
                  <div class="card swiper-slide">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                        <img src="images/profile9.jpg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">David Dell</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem
                        dolor sit amet consectetur adipisicing elit.</p>
                        <button class="button">View More</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
         </div>

      </section>
      <!-- berita -->
      <section id="berita">
         <h2 class="fw-bold">New Update</h2>
         
         <!-- Container untuk Berita -->
         <div class="frame-wrapper">
            <!-- Berita 1 -->
            <div class="frame">
                  <div class="card">
                     <a href="">
                        <img src="./../assets/images/berita.png" class="card-img-top">
                     </a>
                     <div class="lower-content">
                        <ul class="post-info">
                              <li><i class="ri-user-line"></i> Admin</li>
                              <li><i class="ri-calendar-event-line"></i> Sabtu, 6 Juli 2024</li>
                        </ul>
                        <h4><a href="">KRI 2024 Resmi Ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</a></h4>
                        <div class="btn-box">
                              <a href="" class="read-more">Read More</a>
                        </div>
                     </div>
                  </div>
            </div>

            <!-- Berita 2 -->
            <div class="frame">
                  <div class="card">
                     <a href="">
                        <img src="./../assets/images/berita.png" class="card-img-top">
                     </a>
                     <div class="lower-content">
                        <ul class="post-info">
                              <li><i class="ri-user-line"></i> Admin</li>
                              <li><i class="ri-calendar-event-line"></i> Sabtu, 6 Juli 2024</li>
                        </ul>
                        <h4><a href="">KRI 2024 Resmi Ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</a></h4>
                        <div class="btn-box">
                              <a href="" class="read-more">Read More</a>
                        </div>
                     </div>
                  </div>
            </div>

            <!-- Berita 3 -->
            <div class="frame">
                  <div class="card">
                     <a href="">
                        <img src="./../assets/images/berita.png" class="card-img-top">
                     </a>
                     <div class="lower-content">
                        <ul class="post-info">
                              <li><i class="ri-user-line"></i> Admin</li>
                              <li><i class="ri-calendar-event-line"></i> Sabtu, 6 Juli 2024</li>
                        </ul>
                        <h4><a href="">KRI 2024 Resmi Ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</a></h4>
                        <div class="btn-box">
                              <a href="" class="read-more">Read More</a>
                        </div>
                     </div>
                  </div>
            </div>

            <!-- Berita 4 -->
            <div class="frame">
                  <div class="card">
                     <a href="">
                        <img src="./../assets/images/berita.png" class="card-img-top">
                     </a>
                     <div class="lower-content">
                        <ul class="post-info">
                              <li><i class="ri-user-line"></i> Admin</li>
                              <li><i class="ri-calendar-event-line"></i> Sabtu, 6 Juli 2024</li>
                        </ul>
                        <h4><a href="">KRI 2024 Resmi Ditutup, Gelaran Bergengsi Telah Berjalan Lancar dan Tertib</a></h4>
                        <div class="btn-box">
                              <a href="" class="read-more">Read More</a>
                        </div>
                     </div>
                  </div>
            </div>
         </div>

         <!-- Tombol Read More -->
         <div class="header-berita2 text-center mt-4">
            <a href="" class="btn btn-outline-danger">Read More</a>
         </div>
      </section>
		<!-- Berita -->
       <!-- foto -->
      <section id="foto" class="section-foto parallax">
         <h2 class="fw-bold">Galeri</h2>
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
               <div class="carousel-item">
                     <img class="d-block w-100" src="./../assets/images/berita.png" alt="">
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>>
      </section>
      <!-- tess -->
      
      
      <!-- fouter -->
      <footer>
         <div class="container1">
            <div class="row1">
                  <div class="col1" id="company">
                      <img src="<?php echo e(asset('assets/images/logorobotika.png')); ?>" alt="" class="logo">
                      <p>
                        We are specialized in designings, make your business a brand.
                        Try our premium services.
                      </p>
                      <div class="social">
                        <a href="#"><i class="ri-mail-line"></i></a>
                        <a href="#"><i class="ri-instagram-line"></i></a>
                        <a href="#"><i class="ri-youtube-line"></i></a>
                        <a href="#"><i class="ri-twitter-line"></i></a>
                        <a href="#"><i class="ri-linkedin-box-line"></i></a>
                      </div>
                  </div>


                  <div class="col1" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="#">Illustration</a>
                        <a href="#">Creatives</a>
                        <a href="#">Poster Design</a>
                        <a href="#">Card Design</a>
                     </div>
                  </div>

                  <div class="col1" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="#">About</a>
                        <a href="#">Services</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                     </div>
                  </div>

                  <div class="col1" id="contact">
                     <h3>LOCATION</h3>
                     <iframe
                        loading="lazy"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.3511985895605!2d113.70860213662482!3d-8.161908300343406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd695ade44eefaf%3A0xf251d472106e2095!2sLaboratorium%20Fakultas%20Teknik%20Universitas%20Jember%20Kampus%20Patrang!5e0!3m2!1sid!2sid!4v1742725229483!5m2!1sid!2sid"
                        title="Fakultas Teknik Universitas Jember"
                        width="240"
                        height="220"
                        style="border:0;"
                        allowfullscreen=""
                        aria-label="Fakultas Teknik Universitas Jember">
                     </iframe>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-bar">
            <p>&copy; 2023 your company . All rights reserved</p>
        </div>
        
      </footer>

      <!--=============== MAIN JS ===============-->
      <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

		
   </body>
</html>

<?php /**PATH C:\laragon\www\ROBOTIKAUNEJ\resources\views/welcome.blade.php ENDPATH**/ ?>