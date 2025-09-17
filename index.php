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
            <img src="assets/img/img-13-opt.jpg" alt="" class="img-fluid rounded-circle">
        </div>

        <!-- link back to this PHP file, not index.html -->
        <a href="index.php" class="logo d-flex align-items-center justify-content-center">
            <img src="assets/img/db_logo.png" alt="">
            <h1 class="sitename">Delroy Brown</h1>
        </a>

        <div class="social-links text-center">
            <a href="https://www.linkedin.com/in/delroy-brown-b83045226/" target="_blank" class="linkedin">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://github.com/DelroyBrown" target="_blank" class="github">
                <i class="bi bi-github"></i>
            </a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#skills"><i class="bi bi-braces navicon"></i> Skills</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Curriculum Vitae</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <!-- <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li> -->
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="assets/img/hero-image.png" alt="" data-aos="fade-in" class="">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>Delroy J. Brown</h2>
                <p>
                    <span class="typed"
                        data-typed-items="Full-Stack Developer, Problem Solver, Creative Builder, Tech Explorer">Designer</span>
                    <span class="typed-cursor typed-cursor--blink" aria-hidden="true">
                    </span>
                </p>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <p>I'm Delroy Brown, A Web/software developer from High Wycombe, England.</p>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
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

                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>High Wycombe,
                                            England</span></li>
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
        </section>
        <!-- /About Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <p>Full-stack developer skilled in HTML, CSS, JavaScript, React, Python, Django, PHP, MySQL, Java, C#, AWS, and modern design tools—building fast, scalable, and user-focused web applications from frontend to backend.</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <!-- Front end -->
                <h5 class="text-uppercase text-muted fw-semibold small mb-3">
                    Front end
                </h5>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/html5-original.svg" alt="HTML5" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">HTML5</small>
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/css3-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">CSS3</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/javascript-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">Javascript</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/jquery-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">JQuery</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/react-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">React</small>
                        </div>
                    </div>

                    <!-- repeat for JS, jQuery, React, etc. -->

                </div>
                
                <!-- Back end -->
                <h5 class="text-uppercase text-muted fw-semibold small mt-5">
                    Back end
                </h5>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/php-original.svg" alt="HTML5" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">PHP</small>
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/mysql-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">MySQL</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/python-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">Python</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/django-plain.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">Django</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/java-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">Java</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/csharp-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">C#</small>
                        </div>
                    </div>


                </div>

                <!-- Data & Cloud -->
                <h5 class="text-uppercase text-muted fw-semibold small mt-5">
                    Data & Cloud
                </h5>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4">

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/mysql-original.svg" alt="HTML5" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">MySQL</small>
                        </div>
                    </div>

                    <div class="col">
                        <div class="d-flex flex-column align-items-center p-3 rounded-3 bg-body shadow-sm h-100">
                            <img src="assets/img/skills/amazonwebservices-original.svg" alt="CSS3" class="img-fluid"
                                style="max-height:64px; object-fit:contain" width="150" height="150" loading="lazy"
                                decoding="async">
                            <small class="text-muted mt-2">AWS</small>
                        </div>
                    </div>

                </div>

           
            </div>
        </section>
        <!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Curriculum Vitae</h2>
                <a href="assets/img/delroyBrown-CV.pdf" class="btn btn-lg btn-dark rounded-0 mb-4" download>Download
                    CV</a>
                <p>Through formal full-stack training and professional roles, I’ve gained expertise in modern web
                    technologies, API integration, and scalable solutions, consistently applying these skills to deliver
                    secure, efficient, and user-focused applications.</p>
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
                            <h4>Web/Software Developer</h4>
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
        </section>
        <!-- /Resume Section -->

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
                    <div class="row justify-content-center g-4">
                        <?php foreach ($projects as $p): ?>
                            <div class="col-12 col-md-6 col-lg-6">
                                <article class="card h-100 shadow-sm">
                                    <?php if (!empty($p['thumb'])): ?>
                                        <img src="<?= e($p['thumb']) ?>" class="card-img-top" alt="<?= e($p['title']) ?>">
                                    <?php endif; ?>
                                    <div class="card-body d-flex flex-column">
                                        <h2 class="h5 card-title mb-2">
                                            <a href="portfolio-details.php?project=<?= urlencode($p['slug']) ?>"
                                                class="stretched-link text-decoration-none project-link"
                                                data-project="<?= e($p['slug']) ?>">
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


            <!-- Project Modal -->
            <div class="modal fade" id="projectModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Loading…</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="py-5 text-center">
                                <div class="spinner-border" role="status"></div>
                                <div class="mt-2 small text-muted">Fetching project…</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /Portfolio Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>I’m a software developer who enjoys solving problems, writing clean code, and learning fast. If
                    you’re looking for someone reliable, adaptable, and ready to grow with your team, I’d love to
                    connect.</p>
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

                            <iframe src="https://www.google.com/maps?q=High+Wycombe,+England&output=embed"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" id="contact-form"
                            data-aos="fade-up" data-aos-delay="200">
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

                                <!-- Honeypot: kept invisible via CSS -->
                                <input type="text" name="website" autocomplete="off" tabindex="-1"
                                    style="position:absolute;left:-9999px;">

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


    <script>
        document.addEventListener('click', function (e) {
            const a = e.target.closest('a.project-link');
            if (!a) return;
            if (e.metaKey || e.ctrlKey || e.shiftKey || e.altKey || e.button === 1) return; // allows new-tab
            e.preventDefault();

            const url = a.getAttribute('href') + '&partial=1';
            const modalEl = document.getElementById('projectModal');
            const modal = bootstrap.Modal.getOrCreateInstance(modalEl);

            modalEl.querySelector('.modal-title').textContent = 'Loading…';
            modalEl.querySelector('.modal-body').innerHTML =
                '<div class="py-5 text-center"><div class="spinner-border" role="status"></div><div class="mt-2 small text-muted">Fetching project…</div></div>';

            modal.show();

            fetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
                .then(r => { if (!r.ok) throw new Error('HTTP ' + r.status); return r.text(); })
                .then(html => {
                    const tmp = document.createElement('div'); tmp.innerHTML = html.trim();
                    const titleNode = tmp.querySelector('[data-modal-title]');
                    modalEl.querySelector('.modal-title').textContent = titleNode ? titleNode.getAttribute('data-modal-title') : a.textContent.trim();

                    const respModalContent = tmp.querySelector('.modal-content');
                    if (respModalContent) {
                        modalEl.querySelector('.modal-dialog').replaceChildren(respModalContent);
                    } else {
                        modalEl.querySelector('.modal-body').innerHTML = html;
                    }
                })
                .catch(err => {
                    modalEl.querySelector('.modal-body').innerHTML =
                        '<div class="alert alert-danger">Couldn’t load that project (' + err.message + '). ' +
                        '<a href="' + a.href + '">Open full page</a>.</div>';
                });
        });
    </script>

</body>

</html>