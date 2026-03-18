    <button id="opener-modal" data-fancybox="" data-src="#popupform" class="d-none">opener</button>

<style>
    footer ul.social li a {
        background: white !important;
    }
    footer ul.social li a i {
        color: #070707;
    }
</style>

<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <h4>Let's Talk</h4>

                <ul class="email">
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@bookspirepublishing.com">info@bookspirepublishing.com</a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="tel:+12137841841">+1 (213) 784-1841</a>
                    </li>
                    <li>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <a href="https://maps.google.com/?q=5900+Balcones+Drive+STE+100+Austin+Texas+78731"
                           target="_blank">
                            5900 Balcones Drive STE 100, Austin, Texas, 78731
                        </a>
                    </li>
                </ul>

                <ul class="privacy">
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-condition.php">Terms &amp; Conditions</a></li>
                </ul>

                <h6>Follow us on</h6>

                <ul class="social">
                    <!-- <li><a href="https://www.linkedin.com/company/bookspirepublishing" target="_blank">
                        <i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://twitter.com/bookspirepub" target="_blank">
                        <i class="fab fa-twitter"></i></a></li> -->
                    <li><a href="https://instagram.com/bookspire_publishing" target="_blank">
                        <i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/profile.php?id=61583904358875" target="_blank">
                        <i class="fab fa-facebook"></i></a></li>
                </ul>

            </div>

            <div class="col-md-3">

                <h4>Services</h4>

                <ul>
                    <li><a href="ghost-writing.php"><i class="fas fa-chevron-right"></i> Ghostwriting</a></li>
                    <li><a href="book-editing.php"><i class="fas fa-chevron-right"></i> Editing</a></li>
                    <li><a href="book-publishing.php"><i class="fas fa-chevron-right"></i> Publishing</a></li>
                    <li><a href="book-cover.php"><i class="fas fa-chevron-right"></i> Book Cover</a></li>
                    <li><a href="book-printing.php"><i class="fas fa-chevron-right"></i> Printing Books</a></li>
                    <li><a href="book-marketing.php"><i class="fas fa-chevron-right"></i> Book Marketing</a></li>
                    <li><a href="book-trailer-video.php"><i class="fas fa-chevron-right"></i> Book Trailer Video</a></li>
                    <li><a href="marketing.php"><i class="fas fa-chevron-right"></i> Marketing</a></li>
                    <li><a href="case-studies.php"><i class="fas fa-chevron-right"></i> Case Studies</a></li>
                </ul>

            </div>

            <div class="col-md-2">

                <h4>Quick Links</h4>

                <ul>
                    <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="about-us.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
                    <li><a href="pricing.php"><i class="fas fa-chevron-right"></i> Pricing</a></li>
                    <li><a href="contact-us.php"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                    <li><a href="blog.php"><i class="fas fa-chevron-right"></i> Blogs</a></li>
                </ul>

            </div>

            <div class="col-md-4">

                <h4>Get in touch with us</h4>

                <form id="footer-form" action="code.php" method="post" class="validate-ftr-form">
                    <div class="form-group">
                        <i class="far fa-user"></i>
                        <input type="text" class="required form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <i class="far fa-envelope"></i>
                        <input type="email" class="required form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group ftr-phone-wrap" style="position:relative;">
                        <input type="tel" class="required form-control" name="phone"
                               placeholder="Your Phone Number">
                    </div>
                    <div class="form-group">
                        <textarea class="required form-control" name="message" rows="3"
                                  placeholder="Your Message" style="resize:vertical;min-height:80px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" id="footer-form-btn" name="submit"
                               class="btn btn-yellow" value="Submit Request">
                        <input type="text" name="content" value="contact-us.php" hidden="">
                        <input name="domain" value="bookspirepublishing.com" hidden="">
                    </div>
                </form>

            </div>

        </div>

    </div>

<div class="container">
    <div class="col-md-12">
        <style>
    footer h6 {
        margin-bottom: 12px;
    }

    footer ul.review {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    footer ul.review li {
        flex: 1;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    footer ul.review li a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    footer ul.review li a img {
        width: 100%;
        max-width: 148px;
        height: auto;
        display: block;
    }

    footer ul.review li:nth-child(2) img,
    footer ul.review li:nth-child(3) img {
        filter: brightness(0) invert(1);
    }

    /* Tablet: 576px–991px */
    @media (max-width: 991px) {
        footer ul.review {
            gap: 12px;
        }
        footer ul.review li a img {
            max-width: 120px;
        }
    }

    /* Mobile: < 576px — stack vertically */
    @media (max-width: 575px) {
        footer ul.review {
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
        }
        footer ul.review li {
            justify-content: flex-start;
            width: 100%;
        }
        footer ul.review li a img {
            max-width: 140px;
        }
    }
</style>

<h6>Reviews</h6>
<ul class="review">
    <li>
        <a href="https://www.trustpilot.com/review/bookspirepublishing.com" target="_blank">
            <img src="assets/images/trustpilot.svg" alt="Trustpilot Reviews">
        </a>
    </li>
</ul>

    </div><!-- /.col-md-12 -->
</div><!-- /.container -->

</footer>

<div class="copy">
    <div class="container">
        <p>
            &copy; 2026 <a href="index.php"><span> Book Spire Publishing </span></a> All Rights Reserved.
        </p>
    </div>
</div>


<!-- ════════════════════════════════════════════════════════════════════════════
     POPUP QUOTE FORM  (shown via Fancybox on CTA button click)
════════════════════════════════════════════════════════════════════════════ -->
<style>
    .popupform {
        width: min(460px, 94vw);
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
    }
    .popupform .pf-head {
        background: linear-gradient(135deg, #00838c, #005f66);
        padding: 22px 28px;
        text-align: center;
    }
    .popupform .pf-head h3 {
        color: #fff;
        font-size: 20px;
        font-weight: 700;
        margin: 0 0 5px;
    }
    .popupform .pf-head p {
        color: rgba(255,255,255,.75);
        font-size: 13px;
        margin: 0;
    }
    .popupform .pf-body {
        padding: 22px 28px 26px;
    }
    .popupform .pf-body .form-group {
        margin-bottom: 12px;
    }
    .popupform .pf-body .form-control {
        border: 1px solid #d0d7df;
        border-radius: 6px;
        padding: 10px 14px;
        font-size: 14px;
        width: 100%;
        box-sizing: border-box;
        transition: border-color .2s;
    }
    .popupform .pf-body .form-control:focus {
        border-color: #00838c;
        outline: none;
        box-shadow: 0 0 0 3px rgba(0,131,140,.1);
    }
    .popupform .pf-body textarea.form-control {
        resize: vertical;
        min-height: 75px;
    }

    .popupform .pf-body .btn-submit-popup {
        width: 100%;
        background: linear-gradient(135deg, #00838c, #005f66);
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 12px;
        font-size: 15px;
        font-weight: 700;
        cursor: pointer;
        transition: opacity .2s;
        margin-top: 2px;
    }
    .popupform .pf-body .btn-submit-popup:hover    { opacity: .88; }
    .popupform .pf-body .btn-submit-popup:disabled { opacity: .6; cursor: not-allowed; }
    @media (max-width: 500px) {
        .popupform { width: 94vw; border-radius: 8px; }
        .popupform .pf-head { padding: 18px 20px; }
        .popupform .pf-body { padding: 18px 20px 22px; }
    }
</style>

<div style="display:none;" class="popupform" id="popupform">
    <div class="pf-head">
        <h3>Get a Free Quote</h3>
        <p>Fill in the form and our team will contact you shortly.</p>
    </div>
    <div class="pf-body">
        <form id="popup-form" action="code.php" method="post">

            <div class="form-group">
                <input type="text" class="form-control" name="name"
                       placeholder="Your Full Name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email"
                       placeholder="Your Email Address">
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" name="phone"
                       placeholder="Your Phone Number">
            </div>

            <div class="form-group">
                <textarea class="form-control" name="message" rows="3"
                          placeholder="Tell us about your project..."></textarea>
            </div>

            <div class="form-group" style="margin-bottom:0;">
                <input type="submit" id="popup-form-btn"
                       class="btn-submit-popup" value="Get Free Quote Now">
                <input type="hidden" name="content" value="popup-form">
                <input type="hidden" name="domain"  value="bookspirepublishing.com">
            </div>

        </form>
    </div>
</div>

    <!-- ── Scripts (loaded once via footer) ──────────────────────────────── -->
    <script src="ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/libs.js"></script>
    <script type="text/javascript" src="assets/js/captcha.kmk.min.js"></script>
    <script type="text/javascript" src="assets/js/functions.js"></script>
    <script type="text/javascript" src="bootstrap/v5/tp.widget.bootstrap.min.js" async=""></script>
    <script type="text/javascript" src="assets/js/frontend-v2/widgets-v2.24a197bed6.v2.js" defer=""></script>

    <!-- ════════════════════════════════════════════════════════════════════
         HUBSPOT EMBED  —  DISABLED
         Replace 20908609 with your Book Spire Publishing HubSpot Portal ID,
         then remove the surrounding comment tags to activate.
    ════════════════════════════════════════════════════════════════════════

    <script type="text/javascript" id="hs-script-loader" async="" defer=""
            src="//js.hs-scripts.com/XXXXXXXX.js"></script>

    ════════════════════════════════════════════════════════════════════════ -->



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WSHH2TDV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19579168;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19579168/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

<!-- Set customer info + session variables + new event handler -->
<script>
    (function waitForLC() {
        if (window.__lcListenersSet) return;
        if (window.LiveChatWidget && window.LiveChatWidget.on) {
            window.__lcListenersSet = true;

            window.LiveChatWidget.on('ready', function () {
                // Update current page for agent visibility
                LiveChatWidget.call('set_session_variables', {
                    current_page: window.location.pathname
                });

                // Restore open state if visitor had the chat open before navigating
                try {
                    if (localStorage.getItem('lc_open') === '1') {
                        LiveChatWidget.call('maximize');
                    }
                } catch (e) {}
            });

            // Persist visibility across page loads
            window.LiveChatWidget.on('visibility_changed', function (data) {
                try {
                    localStorage.setItem('lc_open', data.visibility === 'maximized' ? '1' : '0');
                } catch (e) {}
            });

            window.LiveChatWidget.on('new_event', function (event) {
                switch (event.type) {
                    case "message":
                    case "rich_message":
                    case "file":
                        LiveChatWidget.call("maximize");
                        break;
                }
            });
        } else {
            setTimeout(waitForLC, 200);
        }
    })();
</script>
<!-- End of LiveChat code -->




</body>
</html>
