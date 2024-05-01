<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nikita Skliarov - portfolio</title>
  <link rel="stylesheet" href="css/bulma.min.css">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">
  <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="css/custom.css">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <script src="https://kit.fontawesome.com/c81480a66a.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <!-- Left side -->
    <div class="navbar-start">
      <button class="button m-3" id="theme-toggle" aria-haspopup="true" aria-controls="change-mod-dropdown"
        aria-controls="dropdown-menu">
        <i class="fa-regular fa-lightbulb"></i>
      </button>
    </div>

    <!-- Right side -->
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <button class="button tab-button" data-tab="1">
            Education
          </button>
          <button class="button tab-button" data-tab="2">
            Experience
          </button>
          <button class="button tab-button" data-tab="3">
            Skills
          </button>
          <button class="button tab-button" data-tab="4">
            Certificates & Awards
          </button>
          <a class="button" href="#contactForm">
            Contact me!
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Notification that email was sent -->
  <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
    <div class="notification is-success is-light m-3">
      <button class="delete" id="deleteNotification"></button>
      <strong>Thank you!</strong> Your message has been sent.
    </div>
  <?php endif; ?>

  <!-- Home section -->
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">Welcome to my Portfolio. Explore a showcase of my passion, creativity, and
          dedication to IT.</h1>
        <a href="#about" class="button is-large is-rounded is-primary is-outlined">
          <span class="icon is-small">
            <i class="fas fa-chevron-down"></i>
          </span>
        </a>
      </div>
    </div>
  </section>

  <!-- Second section - about section -->
  <section id="about" class="hero is-fullheight">

    <!-- About me part - face and info -->
    <div class="columns is-centered m-5">
      <div class="column"></div>
      <div class="column is-justify-content-flex-end is-flex image is-4by5">
        <img src="img/face.webp" alt="Photo of Nikita Skliarov">
      </div>
      <div class="column">
        <h1 class="title">Nikita Skliarov</h1>
        <h2 class="subtitle">Software Developer</h2>
        <div class="content is-medium">
          <div class="block">
            Age: <strong>19</strong>
          </div>
          <div class="block">
            Nationality: <strong>Ukrainian</strong>
          </div>
          <div class="block">
            Education: 1st year student at <strong>ROC van Twente</strong> at the <strong>Software Developer</strong>
            course.
          </div>
        </div>
      </div>
      <div class="column"></div>
    </div>

    <!-- Stats part -->
    <div class="columns is-centered">
      <div class="column is-half">
        <div class="columns is-centered has-text-centered">
          <div class="column">
            <h1 class="subtitle is-size-6 half-of-parent">Exercises at school</h1>
            <h1 class="title half-of-parent count" data-target="497">0</h1>
          </div>
          <div class="column">
            <h1 class="subtitle is-size-6 half-of-parent">Projects</h1>
            <h1 class="title half-of-parent count" data-target="5">0</h1>
          </div>
          <div class="column">
            <h1 class="subtitle is-size-6 half-of-parent">Cups of coffee drunk (LU 05.01.24)</h1><h1 class="title half-of-parent count" data-target="978">978</h1>
          </div>
        </div>
      </div>
    </div>

  </section>

  <!-- Third section - tabs section -->
  <section class="mt-5" id="tabs">

    <!-- Tab triggers -->
    <div class="tabs is-centered is-large">
      <ul>
        <li class="is-active tab" data-tab="1"><a>Education</a></li>
        <li class="tab" data-tab="2"><a>Experience</a></li>
        <li class="tab" data-tab="3"><a>Skills</a></li>
        <li class="tab" data-tab="4"><a>Certificates</a></li>
      </ul>
    </div>

    <!-- Tabs sections -->
    <div id="tab-content">

      <!-- Education section (tab) -->
      <section class="is-active" data-content="1">
        <div class="columns is-centered">
          <div class="column is-half m-3">
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="img/izium-school-logo.webp" alt="Izium school logo" />
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">School number 6</p>
                    <p class="subtitle is-6">Izium, Ukraine</p>
                  </div>
                </div>
                <div class="content">
                  Studies at school number 6. Graduated in 2021 with a diploma in general education.
                  Subjects studied: Ukrainian, English, Mathematics (more than 3F accordingly to Dutch grading system),
                  Physics, Chemistry, Biology, Geography, History (world and Ukraine), IT and Art.
                  <br />
                  <time class="has-text-weight-bold">2011 - 2022</time>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="img/isk-het-erasmus-logo.webp" alt="ISK Het Erasmus logo" />
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">ISK Het Erasmus</p>
                    <p class="subtitle is-6">Almelo, Overijssel, Netherlands</p>
                  </div>
                </div>
                <div class="content">
                  Studies at ISK Het Erasmus. This is a school for children who have recently moved to the Netherlands
                  and do not speak Dutch. Graduated in 2022 with a diploma.
                  Subjects studied: Dutch (B2 level), English (around A2), Mathematics (more than 3F).
                  <br />
                  <time class="has-text-weight-bold">2022 - 2023</time>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-content">
                <div class="media">
                  <div class="media-left">
                    <figure class="image is-48x48">
                      <img src="img/roc-van-twente-logo.webp" alt="ROC van Twente logo" />
                    </figure>
                  </div>
                  <div class="media-content">
                    <p class="title is-4">ROC van Twente</p>
                    <p class="subtitle is-6">Hengelo, Overijssel, Netherlands</p>
                  </div>
                </div>
                <div class="content">
                  Currently studying at ROC van Twente. This is a vocational school where I am studying to become a
                  software developer.
                  Subjects studied (and to be studied): Programming, Databases, Web development, Project management,
                  English, Dutch, Mathematics, Communication, and Professional skills.
                  <br />
                  <time class="has-text-weight-bold">1 july 2023 - 31 june 2027</time>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projects section (tab) -->
      <section data-content="2">
        <div class="columns is-centered m-3">
          <div class="column is-two-thirds">

            <!-- Header -->
            <h1 class="is-size-3 has-text-centered block">List of projects in which I have participated</h1>

            <!-- Content -->
            <div class="columns">

              <!-- First pair -->
              <div class="column is-half">
                <div class="card card-with-full-height">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="img/memory.webp" alt="Memory game image" />
                    </figure>
                  </div>
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-4">Memory Game</p>
                        <p class="subtitle is-6">JS, HTML/CSS</p>
                      </div>
                    </div>
                    <div class="content">
                      A simple memory game created with HTML, CSS, and JavaScript. The game has 30 cards with 15 pairs
                      of images. The game has a timer and a score counter of two players.
                      <br />
                      <time class="has-text-weight-bold">November 2023</time>
                    </div>
                  </div>
                  <footer class="card-footer">
                    <p class="card-footer-item">
                      <span>
                        <a href="https://github.com/Nikita-Skliarov/memory-game" target="_blank">GitHub <i
                            class="fa-brands fa-square-github"></i></a>
                      </span>
                    </p>
                  </footer>
                </div>
              </div>
              <div class="column is-half">
                <div class="card card-with-full-height">
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-4">Bootstrap portfolio</p>
                        <p class="subtitle is-6">JS, HTML/CSS (+ <strong>Bootstrap</strong> framework), PHP, DB
                          (phpMyAdmin), PDO</p>
                      </div>
                    </div>
                    <div class="content">
                      This was a first version of my portoflio created with Bootstrap which was part of the school
                      exercise. The portfolio has a page with info about me and working log-in and sign-up pages.
                      <br />
                      <br />
                      <time class="has-text-weight-bold">December 2023</time>
                    </div>
                  </div>
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="img/bootstrap-portfolio.webp" alt="Bootstrp portfolio preview image" />
                    </figure>
                  </div>
                  <footer class="card-footer">
                    <p class="card-footer-item">
                      <span>
                        <a href="https://github.com/Nikita-Skliarov/bootstrap-portfolio" target="_blank">GitHub <i
                            class="fa-brands fa-square-github"></i></a>
                      </span>
                    </p>
                  </footer>
                </div>
              </div>
            </div>

            <!-- Second pair -->
            <div class="columns">
              <div class="column is-half">
                <div class="card card-with-full-height">
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-4">Mall</p>
                        <p class="subtitle is-6">HTML/CSS (+ <strong>Bootstrap</strong> framework), JS (+
                          <strong>JQuery</strong>), PHP, DB (phpMyAdmin), PDO
                        </p>
                      </div>
                    </div>
                    <div class="content">
                      A school end project of my first year. The project is a website for a mall. The website has now a
                      6 shops, log-in and sign-up system and a shopping cart.
                      <br />
                      <br />
                      <time class="has-text-weight-bold">January 2024 - April 2024</time>
                    </div>
                  </div>
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="img/mall-website.webp" alt="Mall image" />
                    </figure>
                  </div>
                  <footer class="card-footer">
                    <p class="card-footer-item">
                      <span>
                        <a href="https://codecrafters-roc.nl/" target="_blank">Website <i
                            class="fa-solid fa-globe"></i></a>
                      </span>
                    </p>
                  </footer>
                </div>
              </div>
              <div class="column is-half">
                <div class="card card-with-full-height">
                  <div class="card-image">
                    <figure class="image is-4by3">
                      <img src="img/country-game.webp" alt="Gues the country game image" />
                    </figure>
                  </div>
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-4">Country Guess Game</p>
                        <p class="subtitle is-6">JS, PHP, HTML/CSS (+ <strong>Bootstrap</strong> framework), DB
                          (phpMyAdmin), PDO</p>
                      </div>
                    </div>
                    <div class="content">
                      A game where you have to guess the country by the flag. The game has a timer and a score counter.
                      The game has a database where the user's score is stored.
                      <br />
                      <time class="has-text-weight-bold">January 2024</time>
                    </div>
                  </div>
                  <footer class="card-footer">
                    <p class="card-footer-item">
                      <span>
                        <a href="https://github.com/Nikita-Skliarov/bootstrap-portfolio" target="_blank">GitHub <i
                            class="fa-brands fa-square-github"></i></a>
                      </span>
                    </p>
                  </footer>
                </div>
              </div>
            </div>

            <!-- Third pair (only 1 now) -->
            <div class="columns">
              <div class="column">
                <div class="card">
                  <div class="card-content">
                    <div class="media">
                      <div class="media-content">
                        <p class="title is-1">And this website</p>
                        <p class="subtitle is-6">JS (+ <strong>JQuery</strong>), HTML/CSS (+ <strong>Bulma</strong>
                          framework)</p>
                      </div>
                    </div>
                    <div class="content">
                      It can be another project, huh?
                      <br />
                      <time class="has-text-weight-bold">March 2024</time>
                    </div>
                  </div>
                  <div class="card-footer">
                    <p class="card-footer-item">
                      <span>
                        <a href="https://github.com/Nikita-Skliarov/bulma-portfolio" target="_blank">GitHub <i
                            class="fa-brands fa-square-github"></i></a>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Skills section (tab) -->
      <section data-content="3">
        <div class="columns is-centered m-3">
          <div class="column is-half">
            <h1 class="is-size-3 has-text-centered block">(Accordingly to NexEd)</h1>

            <!-- First card -->
            <div class="card">
              <div class="columns is-3">
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="HTMLCSS">
                  <h1 class="title">HTML/CSS</h1>
                  <div class="skill">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>55%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="PHP">
                  <h1 class="title">PHP</h1>
                  <div class="skill is-justify-content-center">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>71%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Second card -->
            <div class="card">
              <div class="columns is-3">
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="JavaScript">
                  <h1 class="title">JavaScript</h1>
                  <div class="skill">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>32%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="CSHARPw">
                  <h1 class="title">C#</h1>
                  <div class="skill is-justify-content-center">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>22%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Third card -->
            <div class="card">
              <div class="columns is-3">
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="Laravel">
                  <h1 class="title">Laravel</h1>
                  <div class="skill">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>12%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="MySQL">
                  <h1 class="title">MySQL</h1>
                  <div class="skill is-justify-content-center">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>73%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fourth card -->
            <div class="card">
              <div class="columns is-3">
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="Bootstrap">
                  <h1 class="title">Bootstrap</h1>
                  <div class="skill">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>100%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
                <div class="column is-flex is-flex-direction-column is-align-items-center" id="Security">
                  <h1 class="title">Security</h1>
                  <div class="skill is-justify-content-center">
                    <div class="outer">
                      <div class="inner">
                        <div class='number'>41%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                      <defs>
                        <linearGradient id="gradientColor">
                          <stop offset="0%" stop-color="#e91e63"></stop>
                          <stop offset="100%" stop-color="#673ab7"></stop>
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round"></circle>
                    </svg>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress bars -->
            <div class="columns is-centered has-text-weight-bold">
              <div class="column">
                <p class="block subtitle">Web</p>
                <progress class="progress is-link" value="67" max="100">67%</progress>
                <p class="block subtitle">Scrum</p>
                <progress class="progress is-primary" value="100" max="100">100%</progress>
                <p class="block subtitle">SEO</p>
                <progress class="progress is-info" value="60" max="100">60%</progress>
                <p class="block subtitle">Git</p>
                <progress class="progress is-success" value="100" max="100">100%</progress>
                <p class="block subtitle">Linux</p>
                <progress class="progress is-danger" value="35" max="100">35%</progress>
              </div>
            </div>
          </div>
      </section>

      <!-- Certificates section (tab) -->
      <section data-content="4">
        <h1 class="is-size-3 has-text-centered">My certificates from NexEd</h1>
        <div class="columns is-centered">
          <div class="column is-two-thirds">
            <div class="timeline-area">
              <div class="container">
                <div class="all-timelines">

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Sep 5, 2023</h6> Command line
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Sep 14, 2023</h6> HTML/CSS Beginner
                      </span>
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Sep 21, 2023</h6> PHP Beginner
                      </span>
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Oct 3, 2023</h6> HTML/CSS Advanced
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Oct 17, 2023</h6> JavaScript Introductie
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Oct 25, 2023</h6> PHP Novice
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Nov 8, 2023</h6> JavaScript Beginner
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Nov 15, 2023</h6> MySQL Beginner
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Nov 20, 2023</h6> PHP Web
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Nov 22, 2023</h6> HTML Pro
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Dec 11, 2023</h6> Database PDO
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Dec 21, 2023</h6> Bootstrap
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Jan 10, 2024</h6> Scrum
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Jan 19, 2024</h6> Git
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <i class="fa-solid fa-crown"></i>
                        <h6>Apr 24, 2024</h6>
                        <span class="has-text-weight-bold">Eindproject leerjaar 1</span>
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>Apr 25, 2024</h6>
                        C# Introductie
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
      </section>
    </div>
  </section>

  <!-- Fourth section - form section -->
  <section class="hero is-fullheight" id="contactForm">
    <section class="hero-body">
      <div class="container">
        <form action="php/form.php" method="POST">
          <h1 class="has-text-centered title">Contact me</h1>

          <!-- Name input -->
          <div class="field">
            <label class="label">Name</label>
            <div class="control has-icons-left">
              <input class="input" type="text" name="name" placeholder="Your name" required>
              <span class="icon is-small is-left">
                <i class="fa fa-user"></i>
              </span>
            </div>
          </div>

          <!-- Email input -->
          <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left">
              <input class="input" id="emailInput" type="email" name="email" placeholder="E-mail address" required>
              <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
              </span>
            </div>
            <!-- Invalid email danger -->
            <p class="help is-danger is-display-none" id="emailDanger">This email is invalid</p>
          </div>

          <!-- Company input -->
          <div class="field">
            <label class="label">Company</label>
            <div class="control has-icons-left">
              <input class="input" type="text" name="company" placeholder="Company name" required>
              <span class="icon is-small is-left">
                <i class="fa fa-building"></i>
              </span>
            </div>
          </div>

          <!-- Message input -->
          <div class="field">
            <label class="label">Message</label>
            <div class="control">
              <textarea class="textarea" name="message" placeholder="Your message" required></textarea>
            </div>
          </div>

          <!-- Submit button -->
          <div class="field is-grouped is-grouped-centered">
            <div class="control">
              <button class="button is-link" id="submitButton">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </section>
  </section>

  <!-- Last section - footer -->
  <footer class="footer">
    <div class="content has-text-centered">
      <p>
        <strong>Bulma</strong> by <a href="https://ns-my-portfolio.nl">Nikita Skliarov</a>.
        The source code is licensed
        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
      </p>
      <!-- GitHub, LinkedIn links with icons -->
      <div class="buttons is-centered">
        <a href="https://github.com/Nikita-Skliarov" class="button is-rounded is-link is-outlined" target='_blank'>
          <span class="icon is-small">
            <i class="fab fa-github"></i>
          </span>
          <span>GitHub</span>
        </a>
        <a href="https://www.linkedin.com/in/nikita-skliarov-46a2752b1/" class="button is-rounded is-link is-outlined"
          target='_blank'>
          <span class="icon is-small">
            <i class="fab fa-linkedin"></i>
          </span>
          <span>LinkedIn</span>
        </a>
      </div>
    </div>
  </footer>
</body>

<script>
  // Function to toggle between light and dark mode
  function toggleTheme() {
    const htmlElement = $('html');
    if (htmlElement.attr('data-theme') === 'dark') {
      htmlElement.attr('data-theme', 'light');
      $('#theme-toggle i').removeClass('fa-moon').addClass('fa-lightbulb');
    } else {
      htmlElement.attr('data-theme', 'dark');
      $('#theme-toggle i').removeClass('fa-lightbulb').addClass('fa-moon');
    }
  }

  // Event listener for theme toggle button
  $('#theme-toggle').on('click', function () {
    toggleTheme();
  });

  // Detect user's theme and update the toggle button icon accordingly
  if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
    $('#theme-toggle i').removeClass('fa-lightbulb').addClass('fa-moon');
  }

  // Make tabs active on click and change content accordingly
  $('.tab').on('click', function () {
    $('.tab').removeClass('is-active');
    $(this).addClass('is-active');

    const tabContent = $(this).data('tab');
    $('#tab-content section').removeClass('is-active');
    $(`#tab-content section[data-content="${tabContent}"]`).addClass('is-active');
  });

  // Smooth scroll of hyperlinks
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  });

  // Navbar buttons script
  const tabButtons = $('.tab-button');
  tabButtons.on('click', function () {
    // Scroll to section 'tabs'
    $('html, body').animate({
      scrollTop: $('#tabs').offset().top
    }, 500);

    // Open following tab
    const tab = $(this).data('tab');
    $('.tab').removeClass('is-active');
    $(`.tab[data-tab="${tab}"]`).addClass('is-active');
    // Show following tab
    $('#tab-content section').removeClass('is-active');
    $(`#tab-content section[data-content="${tab}"]`).addClass('is-active');
  });


  // Validate email input
  const emailInput = $('#emailInput');
  emailInput.on('input', function () {
    const email = emailInput.val();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailDangerText = $('#emailDanger');
    const submitButton = $('#submitButton');

    // Check if email is valid
    if (emailPattern.test(email)) {
      emailInput.removeClass('is-danger');
      emailInput.addClass('is-success');

      // Hide invalid email message
      emailDangerText.removeClass('is-display-block');
      emailDangerText.addClass('is-display-none');

      // Enable submit button if it disabled
      submitButton.prop('disabled', false);
    } else {
      emailInput.removeClass('is-success');
      emailInput.addClass('is-danger');
      emailDangerText.addClass('is-display-block');

      // Disable submit button if email is invalid
      submitButton.prop('disabled', true);
    }
  });

  // Delete notification button
  $('#deleteNotification').on('click', function () {
    $('.notification').remove();
  });
</script>

<!-- Circles script -->
<script src="js/circle-scores.js"></script>

<!-- Stats counter animation -->
<script src="js/stats-animation.js"></script>

</html>