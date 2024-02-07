<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Prémios Angola Comunica</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vendor/assets/img/favicon.png" rel="icon">
  <link href="vendor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="vendor/assets/css/main.css" rel="stylesheet">
</head>
<style>
    .partner-item.active {
      border: 2px solid #ff0000; /* Adapte o estilo da borda conforme necessário */
      box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Adapte a sombra conforme necessário */
    }
  </style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="vendor/assets/img/logo_main.png" alt="">
        <!-- <h1>Pémios Angola Comunica<span>.</span></h1>-->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#" class="active">Ínicio</a></li>
          <li><a href="#">Regulamento</a></li>
          <li><a href="#">Galeria</a></li>
          <li><a href="#">Resultados</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Bem-Vindo ao <span>Angola Comunica</span></h2>
            <p data-aos="fade-up">Vote nos seus concorrentes favoritos!</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Resultados</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(vendor/assets/img/hero-carousel/hero-carousel-1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(vendor/assets/img/hero-carousel/hero-carousel-2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(vendor/assets/img/hero-carousel/hero-carousel-3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(vendor/assets/img/hero-carousel/hero-carousel-4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(vendor/assets/img/hero-carousel/hero-carousel-5.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">

    <!-- HTML -->
<div class="section-header">
    <h2>Parceiros</h2>
    <p>Parceiros que contribuem para o nosso sucesso.</p>
  </div>

  <!-- Footer Section -->
  <footer id="footer" class="footer">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4" id="partner-carousel">

        <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="100" onclick="selectPartner(this)">
          <img src="vendor/assets/img/p1.png" alt="Imagem de Parceiro 1" class="img-fluid">
        </div>

        <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="200" onclick="selectPartner(this)">
          <img src="vendor/assets/img/p2.png" alt="Imagem de Parceiro 2" class="img-fluid">
        </div>

        <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="100" onclick="selectPartner(this)">
            <img src="vendor/assets/img/p3.png" alt="Imagem de Parceiro 1" class="img-fluid">
          </div>

          <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="200" onclick="selectPartner(this)">
            <img src="vendor/assets/img/p4.png" alt="Imagem de Parceiro 2" class="img-fluid">
          </div>

          <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="100" onclick="selectPartner(this)">
            <img src="vendor/assets/img/p5.png" alt="Imagem de Parceiro 1" class="img-fluid">
          </div>

          <div class="partner-item col-md-2" data-aos="fade-up" data-aos-delay="200" onclick="selectPartner(this)">
            <img src="vendor/assets/img/p6.png" alt="Imagem de Parceiro 2" class="img-fluid">
          </div>

        </div>
    </div>
  </footer><!-- End Footer Section -->

</section><!-- End Get Started Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Nossos Últimos Vencedores</h2>
            <p>Confira os Ultimos vencedores da ultima edição do Angola Comunica</p>
          </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">Todos</li>
            <li data-filter=".filter-remodeling">Jornalista</li>
            <li data-filter=".filter-construction">Comunicação Gestual</li>
            <li data-filter=".filter-repairs">Projectos Televisivos</li>
            <li data-filter=".filter-design">Apresentador</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jornalista 1</h4>

                  <a href="vendor/assets/img/projects/remodeling-1.jpg" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Porta voz</h4>

                  <a href="vendor/assets/img/projects/construction-1.jpg" title="Construction 1" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projectos Televisivos</h4>

                  <a href="vendor/assets/img/projects/repairs-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Apresentador</h4>

                  <a href="vendor/assets/img/projects/design-1.jpg" title="Repairs 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jornalista</h4>

                  <a href="vendor/assets/img/projects/remodeling-2.jpg" title="Remodeling 2" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Comunicação Gestual</h4>

                  <a href="vendor/assets/img/projects/construction-2.jpg" title="Construction 2" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projectos Televisivos</h4>

                  <a href="vendor/assets/img/projects/repairs-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Apresentador</h4>

                  <a href="vendor/assets/img/projects/design-2.jpg" title="Repairs 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Jornalista</h4>

                  <a href="vendor/assets/img/projects/remodeling-3.jpg" title="Remodeling 3" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Comunicação Gestual</h4>

                  <a href="vendor/assets/img/projects/construction-3.jpg" title="Construction 3" data-gallery="portfolio-gallery-construction" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Projectos Televisivos</h4>

                  <a href="vendor/assets/img/projects/repairs-3.jpg" title="Repairs 2" data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-design">
              <div class="portfolio-content h-100">
                <img src="vendor/assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Apresentador</h4>

                  <a href="vendor/assets/img/projects/design-3.jpg" title="Repairs 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Prémios Angola Comunica</h3>
              <p>
                Luanda, <br>
                Luanda, Angola<br><br>
                <strong>Telefone:</strong> +244 923578876<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Nossos Links</h4>
            <ul>
              <li><a href="#">Ínicio</a></li>
              <li><a href="#">Regulamento</a></li>
              <li><a href="#">Galeria</a></li>
              <li><a href="#">Resultados</a></li>
            </ul>
          </div><!-- End footer links column-->
        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
            &copy; Direitos Autorais <strong><span>Prémios Angola Comunica</span></strong>. Todos os Direitos Reservados
        </div>
        <div class="credits">
          Desenvolvido por <a href="#">Adilson Rodrigues Tito</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="vendor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/assets/vendor/aos/aos.js"></script>
  <script src="vendor/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="vendor/assets/js/main.js"></script>

</body>
<script>
    // Adicionando rotação automática ao carousel de parceiros
    const partnerCarousel = document.getElementById('partner-carousel');
    let currentIndex = 0;

    function rotatePartners() {
      const partnerItems = partnerCarousel.getElementsByClassName('partner-item');
      partnerItems[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % partnerItems.length;
      partnerItems[currentIndex].classList.add('active');
    }

    setInterval(rotatePartners, 2000); // Ajuste o intervalo conforme necessário (em milissegundos)
  </script>
  <script>
    function selectPartner(element) {
      // Remova a classe 'active' de todos os parceiros
      const partnerItems = document.getElementsByClassName('partner-item');
      for (const item of partnerItems) {
        item.classList.remove('active');
      }

      // Adicione a classe 'active' apenas ao parceiro clicado
      element.classList.add('active');
    }
  </script>
</html>
