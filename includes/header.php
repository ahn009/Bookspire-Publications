<?php
/**
 * Book Spire Publishing — Shared Header
 * ─────────────────────────────────────
 * Set these variables in each page BEFORE including this file:
 *
 *   $page_title       (string) — Browser tab title
 *   $meta_description (string) — SEO meta description
 *   $canonical_url    (string) — Full canonical URL, e.g. "https://bookspirepublishing.com/contact-us.php"
 *   $page_css         (string) — Path to page-specific CSS file (default: assets/css/style.css)
 *   $extra_head       (string) — Any extra <style> or <script> tags for the <head> (optional)
 */

// ── Defaults (used if a page doesn't set them) ────────────────────────────────
if (!isset($page_title))
    $page_title = 'Book Spire Publishing — #1 Book Publishing Company in USA';

if (!isset($meta_description))
    $meta_description = 'Book Spire Publishing is a premier book publishing company in Austin, Texas. Professional ghostwriting, editing, book cover design, publishing, printing, and book marketing services.';

if (!isset($canonical_url))
    $canonical_url = '';

if (!isset($page_css))
    $page_css = 'assets/css/style.css';

if (!isset($extra_head))
    $extra_head = '';
?>
<!doctype html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8">

<head>
    <!-- ── SEO ─────────────────────────────────────────────────────────────── -->
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description) ?>">
    <meta name="author"      content="bookspirepublishing.com">
    <meta name="robots"      content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <?php if (!empty($canonical_url)): ?>
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url) ?>">
    <?php endif; ?>
    <!-- ── /SEO ────────────────────────────────────────────────────────────── -->

    <!-- ── Viewport / Bootstrap ────────────────────────────────────────────── -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="ip2loc" content="">
    <!-- ── /Viewport ────────────────────────────────────────────────────────── -->
    
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WSHH2TDV');</script>
<!-- End Google Tag Manager -->


    <!-- ── Stylesheets ──────────────────────────────────────────────────────── -->
    <link rel="stylesheet" href="ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= htmlspecialchars($page_css) ?>">
    <link rel="stylesheet" type="text/css" href="assets/css/style-web.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/mob_responese.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- ── /Stylesheets ─────────────────────────────────────────────────────── -->

    <!-- ── Favicon (Book Spire Publishing) ─────────────────────────────────── -->
    <link rel="icon"            type="image/x-icon"  href="assets/images/logos/favicon.ico">
    <link rel="icon"            type="image/png" sizes="192x192" href="assets/images/logos/android-chrome-192x192.png">
    <link rel="icon"            type="image/png" sizes="32x32" href="assets/images/logos/favicon-32x32.png">
    <link rel="icon"            type="image/png" sizes="16x16" href="assets/images/logos/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180"     href="assets/images/logos/apple-touch-icon.png">
    <!-- ── /Favicon ─────────────────────────────────────────────────────────── -->

    <!-- jQuery (loaded early so inline scripts in head can use it) -->
    <!--<script src="ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->


    <!-- ════════════════════════════════════════════════════════════════════════
         GOOGLE TAG MANAGER  —  DISABLED
         Replace GTM-XXXXXXX with your Book Spire Publishing GTM container ID,
         then remove the surrounding HTML comment tags to activate.
    ════════════════════════════════════════════════════════════════════════════

    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;
    f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-XXXXXXX');
    </script>

    ════════════════════════════════════════════════════════════════════════════ -->

    <!-- ════════════════════════════════════════════════════════════════════════
         TAWK.TO LIVE CHAT  —  DISABLED TEMPORARILY
         Script ID  : 625547407b967b11798a5234/1g0ehsm5r
         To enable  : remove the surrounding HTML comment tags below.
         Controlled from ONE place: includes/header.php only.
    ════════════════════════════════════════════════════════════════════════════ -->

  

    <!-- ════════════════════════════════════════════════════════════════════════════ -->

    <!-- ── Page-specific <head> content (set $extra_head in each page) ──────── -->
    <?= $extra_head ?>

    <style>
        /* ── Desktop logo ─────────────────────────────────────────────────────── */
        .home-menu .logo img.logo {
            height: 130px;
            max-height: 100%;
            width: auto;
            object-fit: contain;
            display: block;
        }
        .home-menu .col-md-2 {
            display: flex;
            align-items: center;
            padding-top: 0;
            padding-bottom: 0;
        }

        /* ── Shared utility styles ──────────────────────────────────────────── */
        .case_detail_data img { width: auto !important; height: 400px !important; }
        .onge_ban             { color: #45aab9 !important; }

        /* ── Desktop (>980px): clear the absolute-positioned header ────────── */
        @media (min-width: 981px) {
            /* Service pages / blog / case-studies: push first section below header */
            section.main-banner-bg {
                padding-top: 190px !important;
                margin-top:  0      !important;
            }
            section.blog-banner {
                padding-top: 190px !important;
            }
            .case_area {
                padding-top: 190px !important;
            }

            /* Nav column: flex row, items aligned center + pushed to the right */
            .home-menu .col-md-10 {
                display:         flex !important;
                align-items:     center !important;
                justify-content: flex-end !important;
            }

            /* Hide hamburger on desktop — only the nav links should show */
            .home-menu .col-md-10 > .menu-bottom {
                display: none !important;
            }

            /* Tighten nav link spacing so all 8 items fit on one line */
            .home-menu header ul.menu li {
                margin-right: 14px !important;
            }
            .home-menu header ul.menu li:last-child {
                margin-right: 0 !important;
            }

            /* Prevent nav from wrapping on mid-size desktop screens */
            .home-menu header ul.menu {
                white-space: nowrap;
                margin-top:  0 !important;
            }
        }

        /* ── Tablet (768px–980px): reduce padding + fix hamburger position ─── */
        @media (min-width: 768px) and (max-width: 980px) {
            header {
                padding: 8px 0 !important;
            }

            /* Bootstrap col-md-* makes columns side-by-side at ≥768px,
               so the hamburger's responsive.css top: -44px puts it off-screen.
               Reset it to vertically-centered inside the nav column. */
            .home-menu .col-md-10 {
                position: relative !important;
            }
            .menu-bottom {
                position: absolute !important;
                top: 50% !important;
                right: 18px !important;
                transform: translateY(-50%) !important;
                float: none !important;
            }
            .menu-bottom.click {
                position: fixed !important;
                top: 30px !important;
                right: 18px !important;
                transform: none !important;
            }
        }

        /* ── Mobile (<768px): logo left, hamburger right, no empty space ────── */
        @media (max-width: 767px) {

            /* 1. Trim the 40px top padding that was the main whitespace source */
            header {
                padding: 8px 0 !important;
            }
            header nav {
                margin-top: 0 !important;
            }
            a.logo img {
                margin-top: 0 !important;
            }

            /* 2. Keep logo + hamburger on ONE row (no stacking) */
            .home-menu header .container > .row {
                flex-wrap: nowrap !important;
                align-items: center !important;
            }

            /* 3. Logo column: takes remaining width after hamburger slot */
            .home-menu .col-md-2 {
                flex: 1 1 auto !important;
                width: auto !important;
                max-width: calc(100% - 56px) !important;
            }

            /* 4. Nav column: fixed 56px slot just for the hamburger icon */
            .home-menu .col-md-10 {
                flex: 0 0 56px !important;
                width: 56px !important;
                max-width: 56px !important;
                padding-left: 0 !important;
                padding-right: 8px !important;
                position: relative !important;
                min-height: 50px !important;
            }

            /* 5. Reset hamburger — center it in its 56px column */
            .menu-bottom {
                position: absolute !important;
                top: 50% !important;
                right: 0 !important;
                transform: translateY(-50%) !important;
                float: none !important;
            }

            /* 6. When menu opens, hamburger becomes fixed (keep its behavior) */
            .menu-bottom.click {
                position: fixed !important;
                top: 30px !important;
                right: 18px !important;
                transform: none !important;
            }

            /* 7. Scale logo down for mobile proportions */
            .home-menu .logo img.logo {
                height: 85px !important;
                max-width: 220px !important;
            }
        }
    </style>

</head>

<body>

    <!-- GTM noscript — DISABLED (add your GTM noscript here when enabling) -->

    <!--  -->

    <div class="home-menu">
        <header>
            <div class="top-head">
                <div class="container">
                    <ul>
                        <li>
                            <i class="fa fa-phone"></i>
                            <a href="tel:+12137841841">+1 (213) 784-1841</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@bookspirepublishing.com">info@bookspirepublishing.com</a>
                        </li>
                        <li>
                            <a href="javascript:" class="btn btn-yellow various"
                               data-fancybox="" data-src="#popupform">Request a Quote</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logos/android-chrome-512x512.png"
                                 alt="Book Spire Publishing" class="logo">
                        </a>
                    </div>

                    <div class="col-md-10">
                        <nav class="navbar-expand-md main-menu">
                            <ul class="menu">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="ghost-writing.php">Ghostwriting</a></li>
                                <li><a href="book-publishing.php">Publishing</a></li>
                                <li><a href="book-cover.php">Book Cover</a></li>
                                <li><a href="book-editing.php">Editing</a></li>
                                <li><a href="marketing.php">Marketing</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact-us.php">Contact Us</a></li>
                            </ul>
                        </nav>
                        <a href="javascript:" class="menu-bottom">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header  -->
