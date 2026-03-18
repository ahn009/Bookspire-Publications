<?php
$page_title       = 'Blog - Book Spire Publishing | Writing & Publishing Insights';
$meta_description = 'Read the latest tips, insights, and news about writing, publishing, and book marketing from the Book Spire Publishing team.';
$canonical_url    = 'https://bookspirepublishing.com/blog.php';
$page_css         = 'assets/css/style-2.css?ver=1771958679';
include 'includes/header.php';
?>


<link rel="canonical" href="blog.php">

<style>
   
    @media (min-width: 1200px) {
        .container-xl {
            max-width: 1140px;
        }

        .col-xl-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%;
        }
    }

    .blog-banner h1,
    .blog h1 {
        font-weight: 700;
        font-size: 51px;
        background-image: -moz-linear-gradient(90deg, rgb(0 131 140) 0, #00838c 100%);
        background-image: -ms-linear-gradient(90deg, rgb(0 131 140) 0, #00838c 100%);
        color: #4c4c4c;
    }

    .btn-1 {
        font-weight: 500;
        font-size: 16px;
        padding: 8px 40px;
        color: #fff !important;
        border-radius: 30px;
        background: linear-gradient(133deg, #00838c 27%, #00838c 45%, #00838c 59%, #00838c 83%);
        border: none;
        transition: box-shadow .2s linear;
    }

    .btn-1::before {
        content: "";
        position: absolute;
        background-image: url(./assets/images/double-arrow.svg);
        background-repeat: no-repeat;
        right: 17px;
        width: 17px;
        height: 17px;
        transition: transform .3s linear;
        transform-origin: center;
        top: 50%;
        transform: translateY(-50%);
    }   

    .blog .nav {
        display: block;
    }

    .blog a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent;
    }

    .img-container {
        height: 200px;
        overflow: hidden;
        position: relative;
    }

</style>

<section class="banner-sec blog-banner">
    <div class="container-xl">
        <div class="banner-wrapper">
            <div class="row">
                <div class="col-xl-7">
                    <div class="banner-txt-wrapp">
                        <div class="banner-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <h3>100% Statisfaction Gauranteed</h3>
                        </div>
                        <div class="banner-hd">
                            <h1 class="anim-text">Blog</h1>
                            <p class="anim-text">Welcome to the hub of ideas, solutions, and ruminations of all
                                things writing, from writing a book to its publication.
                                Leveraging the expertise and experience of hundreds of writers, editors and literary
                                professionals to bring you fresh, crisp, and useful knowledge about the literary
                                world.
                            </p>
                            <a href="javascript:" class="btn-1 open-popup anim-text" data-fancybox="" data-src="#popupform">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container-xl">
        <div class="blog-by-category section-padding">
            <div class="blog-grid text-center equalHeightWrapper">
                <div class="row">
                    <div class="item col-md-6 col-lg-4">
                        <a href="book-blog.php" class="news-content-block content-block">
                            <div class="img-container">
                                <img src="assets/images/blog-1.webp" alt="Project image" class="img-fluid">
                            </div>
                            <h5 class="equalHeight">
                                <span class="content-block__sub-title">How Do I Find</span>
                                Someone to Help Me Write a Book?
                            </h5>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="book-cta">
    <div class="container">
        <h2 class="heading">
            Want to publish <br>
            your very own book?
        </h2>
        <h3>Our ghostwriters never run out of relevant content for you, Book Spire Publishing has served a variety of clients including, established authors, aspiring authors, large
            and small businesses, and more.
        </h3>
        <div class="btn-block">
            <a href="javascript:" class="btn btn-black various" data-fancybox="" data-src="#popupform">Get a Free
                Quote</a>
            <a href="javascript:" class="btn btn-transparent chat">Live Chat</a>
        </div>
    </div>
</section>

<style>
    .foo_box a h3 {
        font-size: 30px;
        color: black;
    }

    .foo_box a p {
        font-size: 14px;
        margin-top: 12px;
    }

    .foo_box {
        border-right: 1px dotted #0d0d0d;
        padding: 50px;
    }

    .foo_box a h3 i {
        color: #00838c;
    }
</style>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="mailto:info@bookspirepublishing.com">
                        <h3><i class="fa fa-envelope" aria-hidden="true"></i> Email</h3>
                        <p>info@bookspirepublishing.com</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="https://maps.google.com/?q=5900+Balcones+Drive+STE+100+Austin+Texas+78731">
                        <h3><i class="fa fa-globe" aria-hidden="true"></i> Contact Us</h3>
                        <p>5900 Balcones Drive STE 100, Austin, Texas, 78731</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="foo_box">
                    <a href="tel:+12137841841">
                        <h3><i class="fa fa-phone-square" aria-hidden="true"></i> Phone</h3>
                        <p>+1 (213) 784-1841</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
