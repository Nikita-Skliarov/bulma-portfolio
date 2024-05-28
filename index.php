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
  <meta name="description"
    content="Welcome to my Portfolio. Explore a showcase of my passion, creativity, and dedication to IT.">
  <script src="https://kit.fontawesome.com/c81480a66a.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Dataset",
  "name": "Nikita Skliarov",
  "description": "Welcome to my Portfolio. Explore a showcase of my passion, creativity, and dedication to IT.",
  "spatialCoverage": "Hengelo, Overijssel, Netherlands",
  "license": "MIT",
  "datePublished": "2024-09-05"
}
</script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar" role="navigation" aria-label="main navigation">

    <!-- Right side -->
    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <!-- Language Buttons -->
         <!--  <button class="button lang-button" data-lang="en">EN</button>
          <button class="button lang-button" data-lang="nl">NL</button> -->

          <button class="button tab-button" id="tab-education" data-tab="3">
            Education
          </button>
          <button class="button tab-button" id="tab-experience" data-tab="2">
            Experience
          </button>
          <button class="button tab-button" id="tab-skills" data-tab="1">
            Skills
          </button>
          <button class="button tab-button" id="tab-certificates" data-tab="4">
            Certificates & Awards
          </button>
          <a class="button" id="tab-contact-me" href="#contactForm">
            Contact me!
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Dark/light mode switch - placed sticky (see stylesheet) -->
  <button class="button is-medium sticky-button is-rounded" id="theme-toggle" aria-haspopup="true"
    aria-controls="change-mod-dropdown" aria-controls="dropdown-menu">
    <span class="icon">
      <i class="fa-regular fa-lightbulb"></i>
    </span>
  </button>

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
        <h1 class="title" id="portfolio-title">Welcome to my Portfolio. Explore a showcase of my passion, creativity,
          and dedication to IT.</h1>
        <a href="#about" class="button is-large is-rounded is-primary mt-5" id="button-around-chevron">
          <span class="icon is-small">
            <i class="fas fa-chevron-down" id="chevron"></i>
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
          <div class="block" id="age">
            Age: <strong>19</strong>
          </div>
          <div class="block" id="nationality">
            Nationality: <strong>Ukrainian</strong>
          </div>
          <div class="block" id="education">
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
            <h1 class="title half-of-parent count" data-target="525">0</h1>
          </div>
          <div class="column">
            <h1 class="subtitle is-size-6 half-of-parent">Projects</h1>
            <h1 class="title half-of-parent count" data-target="5">0</h1>
          </div>
          <div class="column">
            <h1 class="subtitle is-size-6 half-of-parent">Cups of coffee drunk (LU 10.05.24)</h1>
            <h1 class="title half-of-parent count" data-target="1030">0</h1>
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
        <li class="is-active tab" data-tab="1"><a>Skills</a></li>
        <li class="tab" data-tab="2"><a>Experience</a></li>
        <li class="tab" data-tab="3"><a>Education</a></li>
        <li class="tab" data-tab="4"><a>Certificates</a></li>
      </ul>
    </div>

    <!-- Tabs sections -->
    <div id="tab-content">

      <!-- Skills section (tab) -->
      <section class="is-active" data-content="1">
        <div class="columns is-centered m-3">
          <div class="column is-half is-centered">
            <h1 class="is-size-3 has-text-centered block">(Accordingly to <a href="https://www.nexed.com/"
                target="_blank">NexEd</a>)</h1>
            <div>
              <canvas id="skillsChart"></canvas>
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

            <!-- Second pair -->
            <div class="columns is-centered">
              <div class="column is-four-fifths">
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
            </div>

            <!-- Third pair (only 1 now) -->
            <div class="columns is-centered">
              <div class="column is-four-fifths">
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

      <!-- Education section (tab) -->
      <section data-content="3">
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
                  English, Dutch  , Mathematics, Communication, and Professional skills.
                  <br />
                  <time class="has-text-weight-bold">1 july 2023 - 31 june 2027</time>
                </div>
              </div>
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

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>May 13, 2024</h6>
                        C# Beginner
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>

                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>May 21, 2024</h6>
                        CSS Pro
                      </span>
                      <div class="t-square"></div>
                    </div>
                  </div>
                  
                  <!--SINGLE TIMELINE-->
                  <div class="single-timeline d-flex-2">
                    <div class="timeline-blank"></div>
                    <div class="timeline-text d-flex-2">
                      <span>
                        <h6>May 28, 2024</h6>
                        C# Novice
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

<!-- Email validation script -->
<script src="js/email-validation.js"></script>

<!-- Notification button script -->
<script src="js/notification-button.js"></script>

<!-- Hyperlinks and tabs script -->
<script src="js/hyperlinks-and-tabs.js"></script>

<!-- Theme toggler script -->
<script src="js/theme-toggler.js"></script>

<!-- Circles script -->
<script src="js/circle-scores.js"></script>

<!-- Stats counter animation -->
<script src="js/stats-animation.js"></script>

<!-- Charts script -->
<script src="js/skills-chart.js"></script>

<script>
  /* const enTranslations = {
    'tab-education': 'Education',
    'tab-experience': 'Experience',
    'tab-skills': 'Skills',
    'tab-certificates': 'Certificates & Awards',
    'tab-contact-me': 'Contact me',
    'portfolio-title': 'Welcome to my Portfolio. Explore a showcase of my passion, creativity, and dedication to IT.',
    'age': 'Age: <strong>19</strong>',
    'nationality': 'Nationality: <strong>Ukrainian</strong>',
    'education': 'Education: 1st year student at <strong>ROC van Twente</strong> at the <strong>Software Developer</strong> course.',
  };

  const nlTranslations = {
    'tab-education': 'Opleiding',
    'tab-experience': 'Ervaring',
    'tab-skills': 'Vaardigheden',
    'tab-certificates': 'Certificaten & Prijzen',
    'tab-contact-me': 'Neem contact op',
    'portfolio-title': 'Welkom bij mijn Portfolio. Verken een showcase van mijn passie, creativiteit en toewijding aan IT.',
    'age': 'Leeftijd: <strong>19</strong>',
    'nationality': 'Nationaliteit: <strong>Oekraïens</strong>',
    'education': 'Opleiding: 1e jaars student aan het <strong>ROC van Twente</strong> aan de opleiding <strong>Software Developer</strong>.',
  };

  // Function to set language based on selected language code
  function setLanguage(langCode) {
    const translations = langCode === 'nl' ? nlTranslations : enTranslations;
    Object.keys(translations).forEach(key => {
      document.getElementById(key).innerHTML = translations[key];
    });
  }

  // Event listener for language buttons
  document.querySelectorAll('.lang-button').forEach(button => {
    button.addEventListener('click', () => {
      const langCode = button.getAttribute('data-lang');
      setLanguage(langCode);
    });
  });

  setLanguage('nl'); */
</script>

</html>