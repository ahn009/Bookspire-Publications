<?php
$page_title       = 'Contact Us - Book Spire Publishing | Get a Free Quote Today';
$meta_description = 'Contact Book Spire Publishing at info@bookspirepublishing.com or +1 (213) 784-1841. Austin, Texas. Ready to help you write, edit, publish, and market your book.';
$canonical_url    = 'https://bookspirepublishing.com/contact-us.php';
include 'includes/header.php';
?>

<style>
    /* ── Contact Form Styles ──────────────────────────────────────── */
    .info-form .form-group {
        margin-bottom: 16px;
        position: relative;
    }
    .info-form .form-control {
        border: 1px solid #d0d7df;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 14px;
        width: 100%;
        box-sizing: border-box;
        transition: border-color .2s, box-shadow .2s;
        font-family: Poppins, sans-serif;
    }
    .info-form .form-control:focus {
        border-color: #00838c;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0,131,140,0.12);
    }
    .info-form textarea.form-control {
        resize: vertical;
        min-height: 110px;
    }
    /* Submit button */
    #contact-form-btn {
        background: linear-gradient(135deg,#00838c,#005f66);
        color: #fff;
        border: none;
        border-radius: 50px;
        padding: 13px 40px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: opacity .2s;
        font-family: Poppins, sans-serif;
    }
    #contact-form-btn:hover  { opacity: .88; }
    #contact-form-btn:disabled { opacity: .6; cursor: not-allowed; }

    /* Contact info boxes */
    .foo_box a h3 { font-size: 26px; color: black; }
    .foo_box a p  { font-size: 14px; margin-top: 12px; }
    .foo_box      { border-right: 1px dotted #0d0d0d; padding: 50px; }
    .foo_box a h3 i { color: #00838c; }

    @media (max-width: 767px) {
        .foo_box { border-right: none; border-bottom: 1px dotted #0d0d0d; padding: 30px 20px; }
    }
</style>

<section class="inner-banner contact-banner">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-7 contact-pt">
                <h1>Contact Us and Get Published</h1>
                <h4>We'll finish generating your book depending on your requirements, the industry, and the genre,
                    combining your idea with our creative expertise. Let's get started by contacting us.</h4>
                <div class="btn-block">
                    <a href="#popupform" class="btn btn-yellow various" data-fancybox="" data-src="#popupform">Get
                        a Free Quote</a>
                    <a href="tel:+12137841841" class="btn btn-transparent">Call Now</a>
                </div>
                <img src="assets/images/exellent.webp" alt="twt_img">
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>
</section>

<section class="our-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="info-con">
                    <h2 class="heading">
                        We'd be delighted if you could tell us about your book.
                    </h2>
                    <p>
                        Our consultations are complimentary, and you can schedule one by providing us with your contact
                        information. We'll get back to you right away to start talking about your ideas!
                    </p>
                    <h3>For immediate support, feel free to call us on
                        <a href="tel:+12137841841">+1 (213) 784-1841</a>
                    </h3>
                </div>
            </div>
            <div class="col-md-7">
                <div class="info-form">
                    <form id="contact-form" class="app_contact_form" action="code.php" method="post" novalidate="novalidate">

                        <div class="form-group">
                            <input type="text" name="name" id="cn" placeholder="Your Full Name"
                                   class="required form-control">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="em" placeholder="Your Email Address"
                                   class="required email form-control">
                        </div>

                        <div class="form-group contact-phone-wrap">
                            <input type="tel" name="phone" placeholder="Your Phone Number"
                                   class="required form-control">
                        </div>

                        <div class="form-group">
                            <textarea name="message" placeholder="Tell us about your project..."
                                      class="required form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group" style="margin-bottom:0;">
                            <input type="submit" id="contact-form-btn" name="submit" value="Send Message">
                            <input type="text" name="content" value="contact-us.php" id="content" hidden="">
                            <input name="domain" value="bookspirepublishing.com" type="text" hidden="">
                        </div>

                    </form>
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
        <h3>Our team never runs out of ideas for you. Book Spire Publishing has served a wide range of clients — from established authors and aspiring writers to large enterprises and small businesses alike.
        </h3>
        <div class="btn-block">
            <a href="#popupform" class="btn btn-black various" data-fancybox="" data-src="#popupform">Get a Free
                Quote</a>
            <a href="tel:+12137841841" class="btn btn-transparent">Call Us Now</a>
        </div>
    </div>
</section>

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
                    <a href="https://maps.google.com/?q=5900+Balcones+Drive+STE+100+Austin+Texas+78731" target="_blank">
                        <h3><i class="fa fa-globe" aria-hidden="true"></i> Location</h3>
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
