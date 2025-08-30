<?php

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $namessageme=$_POST['message'];


    echo $name,$email,$subject,$namessageme;

    echo 'yes';

}



?> 


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - SnapFolio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SnapFolio
  * Template URL: https://bootstrapmade.com/snapfolio-bootstrap-portfolio-template/
  * Updated: Jul 21 2025 with Bootstrap v5.3.7
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="header-container d-flex flex-column align-items-start">
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
          <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
          <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
          <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
          <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
          <!-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
        </ul>
      </nav>

      <div class="social-links text-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="background-elements">
        <div class="bg-circle circle-1"></div>
        <div class="bg-circle circle-2"></div>
      </div>

      <div class="hero-content">

        <div class="container">
          <div class="row align-items-center">

            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <div class="hero-text">
                <h1>Snap<span class="accent-text">Folio</span></h1>
                <h2>Usman Sarwar</h2>
                <p class="lead">I'm a <span class="typed" data-typed-items="SQA Engineer , Manual Tester , Performance Tester"></span></p>
                <p class="description">Passionate about ensuring software quality through meticulous manual testing. Skilled in identifying bugs and verifying functionality to deliver flawless user experiences. Dedicated to maintaining high standards and continuous improvement in product quality.</p>

                <div class="hero-actions">
                  <a href="#portfolio" class="btn btn-primary">View My Work</a>
                  <a href="#contact" class="btn btn-outline">Get In Touch</a>
                </div>

                <div class="social-links">
                  <a href="#"><i class="bi bi-dribbble"></i></a>
                  <a href="#"><i class="bi bi-behance"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
              <div class="hero-visual">
                <div class="profile-container">
                  <div class="profile-background"></div>
                  <img src="assets/img/profile/profile-image.jpg" alt="Alexander Chen" class="profile-image">
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="200">
            <div class="profile-card">
              <div class="profile-header">
                <div class="profile-image">
                  <img src="assets/img/profile/profile2.jpeg" alt="Profile Image" class="img-fluid">
                </div>
                <div class="profile-badge">
                  <i class="bi bi-check-circle-fill"></i>
                </div>
              </div>

              <div class="profile-content">
                <h3>Usman Sarwar</h3>
                <p class="profession">QA Tester &amp; Software Engineer</p>

                <div class="contact-links">
                  <a href="asimusman411@gmail.com" class="contact-item">
                    <i class="bi bi-envelope"></i>
                    asimusman411@gmail.com
                  </a>
                  <a href="tel:+15551234567" class="contact-item">
                    <i class="bi bi-telephone"></i>
                    +92 (317) 4439082
                  </a>
                  <a href="#" class="contact-item">
                    <i class="bi bi-geo-alt"></i>
                    Lahore Punjab, Pakistan
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <div class="section-header">
                <span class="badge-text">Get to Know Me</span>
                <h2>Passionate About Delivering Quality Digital Solutions</h2>
              </div>

              <div class="description">
                <p>With a sharp eye for detail and a deep commitment to excellence, I specialize in ensuring that every digital product meets the highest standards of functionality, performance, and user experience. My work blends technical expertise with a proactive approach to identifying issues before they impact users—saving time, costs, and reputations.</p>

                <p>Over the years, I’ve contributed to numerous projects, from complex enterprise applications to high-traffic platforms, ensuring smooth functionality, bug-free performance, and seamless user journeys. I’m not just about finding defects; I’m about delivering confidence in every release.</p>
              </div>

              <div class="stats-grid">
                <div class="stat-item">
                  <div class="stat-number">55+</div>
                  <div class="stat-label">Projects Completed</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">2+</div>
                  <div class="stat-label">Years Experience</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">90%</div>
                  <div class="stat-label">Client Satisfaction</div>
                </div>
              </div>

              <div class="details-grid">
                <div class="detail-row">
                  <div class="detail-item">
                    <span class="detail-label">Specialization</span>
                    <span class="detail-value">Quality Assurance &amp; Load Testing</span>
                  </div>
                  <div class="detail-item">
                    <span class="detail-label">Experience Level</span>
                    <span class="detail-value">Senior Professional</span>
                  </div>
                </div>
                <div class="detail-row">
                  <div class="detail-item">
                    <span class="detail-label">Education</span>
                    <span class="detail-value">Software Engineering, SE</span>
                  </div>
                  <div class="detail-item">
                    <span class="detail-label">Languages</span>
                    <span class="detail-value">English, Urdu</span>
                  </div>
                </div>
              </div>

              <div class="cta-section">
                <a href="assets/Usman_Resume.pdf" class="btn btn-primary">
                  <i class="bi bi-download"></i>
                  Download Resume
                </a>
                <a href="#" class="btn btn-outline">
                  <i class="bi bi-chat-dots"></i>
                  Let's Talk
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="stats-wrapper">
              <div class="stats-item" data-aos="zoom-in" data-aos-delay="150">
                <div class="icon-wrapper">
                  <i class="bi bi-emoji-smile"></i>
                </div>
                <!-- <span data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter">%</span> -->
                <span class="counter-wrapper">
                   <span class="counter-symbol">98 %</span>
                          </span>
                <p>Defect Detection Accuracy</p>
              </div><!-- End Stats Item -->

              <div class="stats-item" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-wrapper">
                  <i class="bi bi-journal-richtext"></i>
                </div>
                <!-- <span data-purecounter-start="0" data-purecounter-end="10 +" data-purecounter-duration="1" class="purecounter"></span> -->
                  <span class="counter-wrapper">
                   <span class="counter-symbol">15 +</span>
                          </span>
                <p>Load & Performance Tests Conducted</p>
              </div><!-- End Stats Item -->

              <div class="stats-item" data-aos="zoom-in" data-aos-delay="250">
                <div class="icon-wrapper">
                  <i class="bi bi-headset"></i>
                </div>
                <span data-purecounter-start="0" data-purecounter-end="2500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Functional Test Cases Executed</p>
              </div><!-- End Stats Item -->

              <div class="stats-item" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-wrapper">
                  <i class="bi bi-people"></i>
                </div>
                <span data-purecounter-start="0" data-purecounter-end="0" data-purecounter-duration="1" class="purecounter"></span>
                <p>Critical Bugs in Production Releases</p>
              </div><!-- End Stats Item -->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Core expertise in Software Quality Assurance and Testing</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6">
            <div class="skills-category" data-aos="fade-up" data-aos-delay="200">
              <h3>Manual Testing</h3>
              <div class="skills-animation">
                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>Test Case Design & Execution</h4>
                    <span class="skill-percentage">95%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Expert level knowledge of semantic HTML5 and modern CSS3 techniques</div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>Bug Reporting & Tracking</h4>
                    <span class="skill-percentage">85%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Strong proficiency in ES6+, DOM manipulation, and modern frameworks</div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>Requirement Analysis</h4>
                    <span class="skill-percentage">80%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Experience with React hooks, state management, and component architecture</div>
                </div>
                  <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>Smoke & Regression Testing</h4>
                    <span class="skill-percentage">80%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Experience with React hooks, state management, and component architecture</div>
                </div>
              </div>
            </div><!-- End Frontend Skills -->
          </div>

          <div class="col-lg-6">
            <div class="skills-category" data-aos="fade-up" data-aos-delay="300">
              <h3>QA Tools & Automation Testing</h3>
              <div class="skills-animation">
                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>API Testing (Postman,Swagger)</h4>
                    <span class="skill-percentage">75%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Server-side JavaScript development with Express and REST APIs</div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4>Jmeter for Performance Testing</h4>
                    <span class="skill-percentage">70%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Python development with Django and data analysis tools</div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4> SQL for Data Validation</h4>
                    <span class="skill-percentage">85%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Database design, optimization, and complex queries</div>
                </div>

                    <div class="skill-item">
                  <div class="d-flex justify-content-between align-items-center">
                    <h4> Gitlab for Bug Tracking</h4>
                    <span class="skill-percentage">100%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="skill-tooltip">Database design, optimization, and complex queries</div>
                </div>
              </div>
            </div><!-- End Backend Skills -->
          </div>
        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- Left column with summary and contact -->
          <div class="col-lg-4">
            <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
              <div class="profile-img mb-4">
                <img src="assets/img/profile/profile2.jpeg" alt="Profile" class="img-fluid rounded">
              </div>

              <h3>Professional Summary</h3>
              <p>Skilled SQA Engineer with 2 year + of proven experience in the Software
                  Testing Life Cycle (STLC), defect tracking, and QA documentation.</p>

              <h3 class="mt-4">Contact Information</h3>
              <ul class="contact-info list-unstyled">
                <li><i class="bi bi-geo-alt"></i> 7New Railway Station ,5400 Lahore Punjab </li>
                <li><i class="bi bi-envelope"></i> asimusman411@gmail.com</li>
                <li><i class="bi bi-phone"></i> +92 (317)-4439082</li>
                <li><i class="bi bi-linkedin"></i> linkedin.com/in/usmansarwar1999/</li>
              </ul>

              <div class="skills-animation mt-4">
                <h3>Technical Skills</h3>
                <div class="skill-item">
                  <div class="d-flex justify-content-between">
                    <span>Web Development</span>
                    <span>95%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between">
                    <span>UI/UX Design</span>
                    <span>85%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between">
                    <span>Cloud Architecture</span>
                    <span>90%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="skill-item">
                  <div class="d-flex justify-content-between">
                    <span>Project Management</span>
                    <span>80%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Right column with experience and education -->
          <div class="col-lg-8 ps-4 ps-lg-5">
            <!-- Experience Section -->
            <div class="resume-section" data-aos="fade-up">
              <h3><i class="bi bi-briefcase me-2"></i>Work Experience</h3>

              <div class="resume-item">
                <h4>Senior Software Quality Assurance Engineer</h4>
                <h5>2023 - Present</h5>
                <p class="company"><i class="bi bi-building"></i> Punjab Information Technology Board.</p>
                <ul>
                  <li>Designed and executed comprehensive test strategies and test cases to ensure product quality.</li>
                  <li>Performed manual and performance testing (Jmeter) for web applications</li>
                  <li>Conducted API testing using Postman,Swagger and validated responses</li>
                  <li>Collaborated with developers and product managers in Agile/Scrum environment to improve test coverage.</li>
                  <li>Logged and tracked defects in GITLAB, ensuring timely resolution and retesting.</li>
                  <li>Improved testing efficiency by standardizing QA processes and documenting best practices.</li>
                </ul>
              </div>

              <!-- <div class="resume-item">
                <h4>Lead Developer</h4>
                <h5>2019 - 2022</h5>
                <p class="company"><i class="bi bi-building"></i> Digital Solutions Corp.</p>
                <ul>
                  <li>Spearheaded development of company's flagship product reaching 1M+ users</li>
                  <li>Implemented CI/CD pipeline reducing deployment time by 60%</li>
                  <li>Managed team of 8 developers across multiple projects</li>
                  <li>Increased code test coverage from 45% to 90%</li>
                </ul>
              </div>
            </div> -->

            <!-- Education Section -->
            <div class="resume-section" data-aos="fade-up" data-aos-delay="100">
              <h3><i class="bi bi-mortarboard me-2"></i>Education</h3>

              <div class="resume-item">
                <h4>Bachelors in Software Engineering</h4>
                <h5>2018 - 2022</h5>
                <p class="company"><i class="bi bi-building"></i> Superior University</p>
              </div>


            <!-- Certifications Section -->
            <div class="resume-section" data-aos="fade-up" data-aos-delay="200">
              <h3><i class="bi bi-award me-2"></i>Certifications</h3>

              <div class="resume-item">
                <h4>Certrified Web Developer - Interns Pakistan</h4>
                <h5>2021</h5>
              </div>

              <div class="resume-item">
                <h4>IEEE Certification in Web Development</h4>
                <h5>2021</h5>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="row">
            <div class="col-lg-3 filter-sidebar">
              <div class="filters-wrapper" data-aos="fade-right" data-aos-delay="150">
                <ul class="portfolio-filters isotope-filters">
                  <li data-filter="*" class="filter-active">All Projects</li>
                  <li data-filter=".filter-photography">Photography</li>
                  <li data-filter=".filter-design">Design</li>
                  <li data-filter=".filter-automotive">Automotive</li>
                  <li data-filter=".filter-nature">Nature</li>
                </ul>
              </div>
            </div>

            <div class="col-lg-9">
              <div class="row gy-4 portfolio-container isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-1.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">PTC</span>
                        <h4>Punjab Transport Company (PTC)</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/project1-1.png" class="glightbox" title="Capturing Moments"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-2.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">etransit</span>
                        <h4>E-Transit Punjab </h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/project1-2.png" class="glightbox" title="Woodcraft Design"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-automotive">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-3.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">DLIMS PUnjab</span>
                        <h4>Driving License Managment Information System</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/project1-3.png" class="glightbox" title="Classic Beauty"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-nature">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-4.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">CM Laptop</span>
                        <h4>Chief Minister Laptop Scheme 2025</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/project1-4.png" class="glightbox" title="Natural Growth"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-photography">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-5.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Dastak</span>
                        <h4>Dastak Doorstep Services</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/project1-5.png" class="glightbox" title="Urban Stories"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-design">
                  <div class="portfolio-wrap">
                    <img src="assets/img/portfolio/project1-6.png" class="img-fluid" alt="Portfolio Image" loading="lazy">
                    <div class="portfolio-info">
                      <div class="content">
                        <span class="category">Certifications</span>
                        <h4>Global IT Certifictons</h4>
                        <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-6.webp" class="glightbox" title="Digital Experience"><i class="bi bi-plus-lg"></i></a>
                          <a href="portfolio-details.html" title="More Details"><i class="bi bi-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Portfolio Item -->

              </div><!-- End Portfolio Container -->
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="service-header">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <div class="service-intro">
                <h2 class="service-heading">
                  <div>Innovative business</div>
                  <div><span>performance solutions</span></div>
                </h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="service-summary">
                <p>
                  We integrate forward-thinking strategies, creative approaches, and state-of-the-art technologies to deliver exceptional customer experiences that drive growth and engage target markets.
                </p>
                <a href="services.html" class="service-btn">
                  View All Services
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-palette"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Creative <span>branding</span>
                </a>
              </h3>
              <p>
                Nulla facilisi. Maecenas eget magna neque. Suspendisse potenti. Curabitur eleifend nisi non magna vulputate, vel condimentum libero tempus. Proin consectetur feugiat diam.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-gem"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Design <span>systems</span>
                </a>
              </h3>
              <p>
                Praesent euismod varius tellus, vel bibendum nunc interdum at. Donec vehicula diam vel metus venenatis convallis. Aliquam erat volutpat. Etiam viverra magna sit amet.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-megaphone"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Marketing <span>strategies</span>
                </a>
              </h3>
              <p>
                Vivamus tempor velit id magna dictum, sed fermentum nisi faucibus. Integer nec pretium sapien. Fusce tincidunt ligula et purus consequat, ac pellentesque nulla eleifend.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Digital <span>platforms</span>
                </a>
              </h3>
              <p>
                Cras fermentum odio eu feugiat malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et accumsan cursus. Morbi placerat nulla vel nunc viverra accumsan.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-graph-up"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Growth <span>acceleration</span>
                </a>
              </h3>
              <p>
                Aenean vel augue vel nisi bibendum posuere. Phasellus in lacus quis urna sodales dignissim. Duis aliquam libero eget risus facilisis. Quisque eget libero vel nisl fringilla.
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card position-relative z-1">
              <div class="service-icon">
                <i class="bi bi-camera-video"></i>
              </div>
              <a href="service-details.html" class="card-action d-flex align-items-center justify-content-center rounded-circle">
                <i class="bi bi-arrow-up-right"></i>
              </a>
              <h3>
                <a href="service-details.html">
                  Media <span>solutions</span>
                </a>
              </h3>
              <p>
                Etiam efficitur lacus in diam finibus, nec ultrices est sagittis. Maecenas elementum magna sed risus faucibus, nec commodo purus facilisis. Vestibulum accumsan magna.
              </p>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="testimonial-masonry">

          <div class="testimonial-item" data-aos="fade-up">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Implementing innovative strategies has revolutionized our approach to market challenges and competitive positioning.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-f-7.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Rachel Bennett</h3>
                  <span class="position">Strategy Director</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Exceptional service delivery and innovative solutions have transformed our business operations, leading to remarkable growth and enhanced customer satisfaction across all touchpoints.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-m-7.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Daniel Morgan</h3>
                  <span class="position">Chief Innovation Officer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Strategic partnership has enabled seamless digital transformation and operational excellence.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-f-8.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Emma Thompson</h3>
                  <span class="position">Digital Lead</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Professional expertise and dedication have significantly improved our project delivery timelines and quality metrics.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-m-8.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Christopher Lee</h3>
                  <span class="position">Technical Director</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item highlight" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Collaborative approach and industry expertise have revolutionized our product development cycle, resulting in faster time-to-market and increased customer engagement levels.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-f-9.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Olivia Carter</h3>
                  <span class="position">Product Manager</span>
                </div>
              </div>
            </div>
          </div>

          <div class="testimonial-item" data-aos="fade-up" data-aos-delay="500">
            <div class="testimonial-content">
              <div class="quote-pattern">
                <i class="bi bi-quote"></i>
              </div>
              <p>Innovative approach to user experience design has significantly enhanced our platform's engagement metrics and customer retention rates.</p>
              <div class="client-info">
                <div class="client-image">
                  <img src="assets/img/person/person-m-13.webp" alt="Client">
                </div>
                <div class="client-details">
                  <h3>Nathan Brooks</h3>
                  <span class="position">UX Director</span>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box">
              <h3>Contact Info</h3>
              <p>Here is my Details.</p>

              <div class="info-item">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>New Railway Station, Lahore</p>
                  <p>Punjab, 54000</p>
                </div>
              </div>

              <div class="info-item">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+92 317 4439082</p>
                </div>
              </div>

              <div class="info-item">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>asimusman411@gmail.com</p>
                  <p>usman.sarwar@pitb.gov.pk</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form">
              <h3>Get In Touch</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              <form action="index.php" method="POST" class="php-email-form">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>