<?php
// --- Loads one project by slug and renders it in the iPortfolio details layout ---
$projectsFile = __DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'projects.php';
if (!is_file($projectsFile)) {
    http_response_code(500);
    die('<b>Setup error:</b> Missing <code>data/projects.php</code>.');
}
$projects = require $projectsFile;

$slug = isset($_GET['project']) ? preg_replace('/[^a-z0-9\-]/i', '', $_GET['project']) : '';
$current = null;
foreach ($projects as $p) {
    if (isset($p['slug']) && $p['slug'] === $slug) {
        $current = $p;
        break;
    }
}
function e($s)
{
    return htmlspecialchars((string) $s, ENT_QUOTES, 'UTF-8');
}

$title = $current ? ($current['title'] ?? 'Project') . ' · Portfolio' : 'Project not found · Portfolio';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?= e($title) ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Inter:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="portfolio-details-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="assets/img/img-13.jpg" alt="" class="img-fluid rounded-circle">
        </div>

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
                <li><a href="index.php#hero"><i class="bi bi-house navicon"></i> Home</a></li>
                <li><a href="index.php#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="index.php#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="index.php#portfolio" class="active"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="index.php#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <li><a href="index.php#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="main">
        <!-- ======= Portfolio Details Section ======= -->  
        <section id="portfolio-details" class="portfolio-details section">
            <div class="container">

                <?php if (!$current): ?>
                    <div class="alert alert-danger mt-4">
                        Project not found. <a class="alert-link" href="index.php#portfolio">Back to portfolio</a>
                    </div>
                <?php else: ?>

                    <div class="row gy-4">
                        <!-- Left: Swiper gallery -->
                        <div class="col-lg-8" data-aos="fade-up">
                            <div class="portfolio-details-slider swiper">
                                <div class="swiper-wrapper align-items-center">
                                    <?php
                                    $imgs = !empty($current['images']) && is_array($current['images']) ? $current['images'] : [];
                                    if (!$imgs && !empty($current['thumb'])) {
                                        $imgs = [$current['thumb']];
                                    }
                                    foreach ($imgs as $img):
                                        ?>
                                        <div class="swiper-slide">
                                            <img src="<?= e($img) ?>" alt="<?= e($current['title'] ?? 'Project image') ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>

                        <!-- Right: project info -->
                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                            <div class="portfolio-info">
                                <h3><?= e($current['title'] ?? 'Project') ?></h3>
                                <ul>

                                    <?php if (!empty($current['links'])): ?>
                                        <?php foreach ($current['links'] as $link): ?>
                                            <li><strong><?= e($link['label'] ?? 'Link') ?></strong>:
                                                <a href="<?= e($link['href'] ?? '#') ?>" target="_blank" rel="noopener">Open</a>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                    <?php if (!empty($current['tech'])): ?>
                                        <li><strong>Tech</strong>:
                                            <?php foreach ($current['tech'] as $i => $t): ?>
                                                <span
                                                    class="badge bg-secondary-subtle text-secondary-emphasis me-1"><?= e($t) ?></span>
                                            <?php endforeach; ?>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                            <div class="portfolio-description">
                                <?php if (!empty($current['detail-summary'])): ?>
                                    <p class="lead fw-bold mb-2"><?= e($current['detail-summary']) ?></p>
                                <?php endif; ?>
                                <div>
                                    <?= !empty($current['body']) ? $current['body'] : '<p>No additional description provided.</p>' ?>
                                </div>
                                <div class="mt-3">
                                    <a href="index.php#portfolio" class="btn btn-outline-secondary">← Back to all
                                        projects</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer id="footer" class="footer position-relative light-background">
        <div class="container">
            <div class="copyright text-center">
                <p>© <span>Copyright</span> <strong class="px-1 sitename">Delroy Brown</strong> <span>All Rights
                        Reserved</span></p>
            </div>
          
        </div>
    </footer>

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>
    <div id="preloader"></div>

    <!-- Vendor JS -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
        console.log('slides on load:', document.querySelectorAll('.portfolio-details-slider .swiper-slide').length);
        new Swiper('.portfolio-details-slider', {
            loop: true,
            speed: 600,
            pagination: { el: '.portfolio-details-slider .swiper-pagination', clickable: true },
            navigation: {
                nextEl: '.portfolio-details-slider .swiper-button-next',
                prevEl: '.portfolio-details-slider .swiper-button-prev'
            }
        });
    </script>

</body>

</html>