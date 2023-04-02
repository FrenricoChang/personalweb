@extends('layouts.default')

@section('content')
  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url({{asset('../img/hero-bg.jpeg')}})">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <h1 class="hero-title mb-4">I am Frenrico Chang</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Nak IT, Photographer, Gamer"></span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="{{asset('../img/testimonial-2.jpeg')}}" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Frenrico Chang</span></p>
                        <p><span class="title-s">Profile: </span> <span>ANAK PPTI</span></p>
                        <p><span class="title-s">Email: </span> <span>frenricochang@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>082215308090</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="skill-mf">
                    <p class="title-s">Skills</p>

                    <span>C</span> <span class="pull-right">65%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>Java</span> <span class="pull-right">75%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>HTML</span> <span class="pull-right">78%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>CSS</span> <span class="pull-right">70%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>JavaScript</span> <span class="pull-right">60%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <span>PHP</span> <span class="pull-right">58%</span>
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" style="width: 58%;" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                  </div>
                </div>

                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                      Hi there! My name is Frenrico Chang, and I'm delighted to welcome you to my personal website. I'm originally from Bandung, Indonesia, and I'm currently pursuing a degree in Computer Science at Bina Nusantara University. As a member of the ALGO12ITHM PPTI 12 class, I'm constantly seeking new challenges and opportunities to grow and learn.
                    </p>
                    <p class="lead">
                      Aside from my studies, I'm also passionate about website design, photography, and playing games. I love designing websites that not only look aesthetically pleasing but are also user-friendly and intuitive. In my spare time, you can often find me exploring the city with my camera, capturing beautiful moments and scenery. I also enjoy playing games, especially those that challenge my problem-solving skills.
                    </p>
                    <p class="lead">
                      As a conscientious person, I take pride in doing things with utmost care and attention to detail. I'm a strong believer in teamwork and enjoy collaborating with others to achieve common goals. This website is a platform for me to share my journey with you, and I hope you'll find it informative and engaging. I look forward to connecting with you and exchanging ideas through this site!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services-mf pt-5 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Services
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-calendar4-week"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Learning</h2>
                <p class="s-description text-center">
                  Learn everything in lecture and laboratory classes.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-card-checklist"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Web Designing</h2>
                <p class="s-description text-center">
                  Doing web design for the projects
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><i class="bi bi-bar-chart"></i></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">Gaming</h2>
                <p class="s-description text-center">
                  Making progress in the games
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">

          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('../img/work-1.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{asset('../img/work-1.jpeg')}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Elementary School</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Santa Angela Bandung</span> / <span class="w-date">2015</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('../img/work-2.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{asset('../img/work-2.jpeg')}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Junior High School</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Santa Angela Bandung</span> / <span class="w-date">2018</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="work-box">
              <a href="{{asset('../img/work-3.jpeg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox">
                <div class="work-img">
                  <img src="{{asset('../img/work-3.jpeg')}}" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title">Senior High School</h2>
                    <div class="w-more">
                      <span class="w-ctegory">Santa Angela Bandung</span> / <span class="w-date">2021</span>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="bi bi-plus-circle"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{asset('../img/overlay-bg.jpg')}})">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span>Rumah Talenta BCA</li>
                        <li><span class="bi bi-phone"></span> 082215308090</li>
                        <li><span class="bi bi-envelope"></span>frenrico.chang@binus.ac.id</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-facebook"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-instagram"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li>
                        <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->

  </main>

@endsection
