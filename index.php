<?php
// === Data + Router ===
$projectsFile = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'projects.php';
$projects = is_file($projectsFile) ? require $projectsFile : [];
$slug = isset($_GET['project']) ? preg_replace('/[^a-z0-9\-]/i', '', $_GET['project']) : null;
$current = null;
if ($slug) {
    foreach ($projects as $p) {
        if ($p['slug'] === $slug) {
            $current = $p;
            break;
        }
    }
}
function e($s)
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= $current ? e($current['title']) . ' · Portfolio' : 'Delroy Brown - Portfolio' ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="assets/img/img-13.jpg" alt="" class="img-fluid rounded-circle">
        </div>

        <!-- link back to this PHP file, not index.html -->
        <a href="index.php" class="logo d-flex align-items-center justify-content-center">
            <img src="assets/img/db_logo.png" alt="">
            <h1 class="sitename">Delroy Brown</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://www.linkedin.com/in/delroy-brown-b83045226/" target="_blank" class="linkedin"><i
                    class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#skills"><i class="bi bi-braces navicon"></i> Skills</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/img-15.jpg" alt="" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Delroy Brown</h2>
                <p>
                    <span class="typed" data-typed-items="Designer, Software Developer, Freelancer">Designer</span>
                    <span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
                </p>
            </div>
        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>I'm Delroy Brown, A Web/software developer from High Wycombe, England.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="assets/img/img-12.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>UI/UX Designer &amp; Web Developer.</h2>
                        <p class="fst-italic py-3">
                            Full-stack developer skilled in Python, React, C#, Java, and PHP, passionate about building
                            clean, efficient, and impactful applications.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>April 2nd
                                            1991</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.DBrown.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>07795
                                            128316</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>High Wycombe,
                                            England</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>34</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>delroybrown.db@gmail.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p class="py-3">
                            I’m a full-stack developer who loves turning ideas into working applications, whether that
                            means diving into Python back-ends, crafting interfaces with React, or solving challenges
                            with C# and Java. I thrive on learning new tools, simplifying complex problems, and building
                            things that feel both useful and intuitive. For me, coding isn’t just about syntax — it’s
                            about creating solutions that make an impact and constantly pushing myself to grow.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Full-stack developer skills.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row skills-content skills-animation">
                    <!-- LEFT COLUMN -->
                    <div class="col-lg-6">
                        <!-- Frontend -->
                        <h5 class="text-uppercase text-muted fw-semibold small mb-2">Frontend</h5>

                        <div class="progress">
                            <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>jQuery</span> <i class="val">85%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="85"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>React</span> <i class="val">70%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="70"></div>
                            </div>
                        </div>


                        
                    </div>

                    <!-- RIGHT COLUMN -->
                    <div class="col-lg-6">
                        <!-- Backend -->
                        <h5 class="text-uppercase text-muted fw-semibold small mb-2">Backend</h5>

                        <div class="progress">
                            <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Python</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Django</span> <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Java</span> <i class="val">60%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>C#</span> <i class="val">45%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="45"></div>
                            </div>
                        </div>

                        <!-- Data & Cloud -->
                        <h5 class="text-uppercase text-muted fw-semibold small mt-4 mb-2">Data & Cloud</h5>

                        <div class="progress">
                            <span class="skill"><span>MySQL</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>AWS (S3 / IAM)</span> <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75"></div>
                            </div>
                        </div>

                        <!-- Design Tools -->
                        <h5 class="text-uppercase text-muted fw-semibold small mt-4 mb-2">Design Tools</h5>

                        <div class="progress">
                            <span class="skill"><span>Figma</span> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill"><span>Photoshop</span> <i class="val">95%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <p>Through formal full-stack training and professional roles, I’ve gained expertise in modern web technologies, API integration, and scalable solutions, consistently applying these skills to deliver secure, efficient, and user-focused applications.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Education</h3>
                        <div class="resume-item">
                            <h4>IT Career Switch</h4>
                            <h5>2024 - 2025</h5>
                            <p><em>Online</em></p>
                            <p>I gained advanced skills in software development, working with multiple programming
                                languages, frameworks, and databases. The program focused on problem-solving, scalable
                                architecture, debugging, and real-world project delivery, preparing me to operate at a
                                senior developer level</p>
                        </div>
                        <div class="resume-item">
                            <h4>Full Stack Developer Course - Code Institute</h4>
                            <h5>2020 - 2021</h5>
                            <p><em>Online</em></p>
                            <p>I learned to build and deploy full-stack web applications, combining front-end design
                                with back-end logic. The course covered HTML, CSS, JavaScript, Python, Django,
                                databases, and deployment workflows, giving me practical skills to develop, test, and
                                launch complete projects.</p>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        <div class="resume-item">
                            <h4>E3D-Online</h4>
                            <h5>2021 - 2023</h5>
                            <p><em>Chalgrove, Oxford - England</em></p>
                            <ul>
                                <li>Assisted in the development and maintenance of e-commerce applications using React
                                    and Django</li>
                                <li>Collaborated with senior developers on features and bugfixes</li>
                                <li>Integrated APIs and third-party services to enhance performance and UX</li>
                                <li>Contributed to testing, debugging, and documentation</li>
                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>NetRoadshow</h4>
                            <h5>2016 - 2019</h5>
                            <p><em>Aldgate, London - England</em></p>
                            <ul>
                                <li>Took part in developing a secure event-management application for investor roadshows
                                    in banking
                                    sector</li>
                                <li>Worked with in cross-disciplinary teams to deliver high-security projects on time
                                    and under
                                    budget</li>

                            </ul>
                        </div>
                        <div class="resume-item">
                            <h4>Freelance Web/Software Developer</h4>
                            <h5>2016 - Present</h5>
                            <p><em>High Wycombe - England</em></p>
                            <ul>
                                <li>Designed and delivered 20+ custom web applications for clients in retail,
                                    hospitality, and non
                                    profits</li>
                                <li>Integrated multiple payment gateways (Stripe, PayPal) and booking APIs into
                                    e-commerce
                                    platforms</li>
                                <li>Employed AI tools to automate code reviews, generate unit tests, and scaffold UI,
                                    speeding up
                                    delivery cycles</li>
                                <li>Provided ongoing maintenance and feature enhancements using Django, React, and AWS
                                    infrastructure</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>A showcase of web applications demonstrating full-stack development, API integration, and responsive
                    design — built with clean code and focused on solving real-world challenges.</p>
            </div>

            <div class="container pb-5" data-aos="fade-up" data-aos-delay="100">
                <?php if (!$current): ?>
                    <!-- Project list -->
                    <?php if (empty($projects)): ?>
                        <div class="alert alert-warning">No projects configured yet. Create <code>data/projects.php</code>.
                        </div>
                    <?php endif; ?>
                    <div class="row g-4">
                        <?php foreach ($projects as $p): ?>
                            <div class="col-12 col-sm-6 col-lg-4">
                                <article class="card h-100 shadow-sm">
                                    <?php if (!empty($p['thumb'])): ?>
                                        <img src="<?= e($p['thumb']) ?>" class="card-img-top" alt="<?= e($p['title']) ?>">
                                    <?php endif; ?>
                                    <div class="card-body d-flex flex-column">
                                        <h2 class="h5 card-title mb-2">
                                            <a href="portfolio-details.php?project=<?= urlencode($p['slug']) ?>"
                                                class="stretched-link text-decoration-none">
                                                <?= e($p['title']) ?>
                                            </a>
                                        </h2>
                                        <?php if (!empty($p['summary'])): ?>
                                            <p class="text-muted small mb-3"><?= e($p['summary']) ?></p>
                                        <?php endif; ?>
                                        <?php if (!empty($p['tech'])): ?>
                                            <div class="mt-auto">
                                                <?php foreach ($p['tech'] as $t): ?>
                                                    <span
                                                        class="badge bg-secondary-subtle text-secondary-emphasis me-1 mb-1"><?= e($t) ?></span>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php else: ?>
                    <!-- Project detail -->
                    <article class="row g-4">
                        <div class="col-lg-7">
                            <a href="index.php" class="btn btn-outline-secondary mb-3">← All Projects</a>
                            <h1 class="h3"><?= e($current['title']) ?></h1>
                            <?php if (!empty($current['summary'])): ?>
                                <p class="lead"><?= e($current['summary']) ?></p>
                            <?php endif; ?>
                            <div><?= $current['body'] ?></div>
                            <?php if (!empty($current['links'])): ?>
                                <div class="mt-3 d-flex gap-2 flex-wrap">
                                    <?php foreach ($current['links'] as $link): ?>
                                        <a href="<?= e($link['href']) ?>" target="_blank" class="btn btn-primary">
                                            <?= e($link['label']) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-5">
                            <?php if (!empty($current['images'])): ?>
                                <?php foreach ($current['images'] as $img): ?>
                                    <img src="<?= e($img) ?>" class="img-fluid rounded mb-3" alt="<?= e($current['title']) ?>">
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endif; ?>
            </div>
        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Practical development services covering everything from custom web apps to API integration, e-commerce solutions, and ongoing deployment support.</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Custom Web
                                    Application Development</a></h4>
                            <p class="description">Building scalable, responsive applications using React, PHP, Django
                                and other modern frameworks.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">E-Commerce
                                    Solutions</a></h4>
                            <p class="description">Developing and maintaining secure, high-performance online stores
                                with payment gateway integration</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">API Development &
                                    Integration</a></h4>
                            <p class="description">Creating and connecting RESTful APIs to streamline data flow between
                                platforms</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Database Design &
                                    Management</a></h4>
                            <p class="description">Implementing efficient, secure database solutions with SQL and
                                Firestore</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">UI/UX
                                    Implementation</a></h4>
                            <p class="description">Turning designs into polished, interactive front ends optimized for
                                performance and accessibility</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Deployment &
                                    Maintenance</a></h4>
                            <p class="description">Hosting, monitoring, and optimizing applications on platforms like
                                Heroku and cloud services</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Services Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>High Wycombe, England</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Me</h3>
                                    <p>07795 128316</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Me</h3>
                                    <p>delroybrown.db@gmail.com</p>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps?q=High+Wycombe,+England&output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field"
                                        required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- /Contact Section -->
    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Delroy Brown</strong> <span>All Rights
                        Reserved</span></p>
            </div>

        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/typed.js/typed.umd.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>