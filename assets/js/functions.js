/* Open LiveChat widget when any element with class="chat" is clicked */
$(document).on('click', '.chat', function (e) {
    e.preventDefault();
    if (window.LiveChatWidget) {
        LiveChatWidget.call('maximize');
    }
});

$(document).ready(function () {

    /* ── Fancybox: disable all click/touch close behaviour for popup form ─
       intl-tel-input and browser autocomplete dropdowns are body-level
       elements; Fancybox's clickOutside + touch handlers close the popup
       when those are interacted with. Set to false globally so every
       popup on this site behaves like a modal (only X button closes it). */
    if (typeof $.fancybox !== 'undefined') {
        $.fancybox.defaults.clickOutside  = false;
        $.fancybox.defaults.clickSlide    = false;
        $.fancybox.defaults.touch         = false;
        $.fancybox.defaults.trapFocus     = false;
    }

    $(".menu-bottom").on("click", function () {
        $("html").toggleClass("menu-open")
    }), $(".menu-bottom").click(function () {
        $(this).toggleClass("click")
    }), AOS.init({
        disable: "mobile"
    }), $(".various").click(function () {
        var a = $(this).attr("name");
        $(".popupform .leadprice").val(a)
    }), $(".lazy").lazy(), $(".owl-testimonial").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 15,
        responsiveClass: !0,
        autoplay: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
            0:    { items: 1 },
            600:  { items: 1 },
            1e3:  { items: 1 },
            360:  { items: 1 }
        }
    }), $(".owl-site-logo").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 1e3,
        autoplaySpeed: 300,
        navText: [""],
        responsive: {
            0:    { items: 3 },
            600:  { items: 3 },
            1e3:  { items: 6 },
            360:  { items: 3 }
        }
    }), $(".owl-becomiing").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        navText: [""],
        responsive: {
            0:    { items: 3 },
            600:  { items: 3 },
            1e3:  { items: 3 },
            360:  { items: 1 }
        }
    }), $(".owl-site-logo2").owlCarousel({
        loop: !0,
        nav: !1,
        dots: !1,
        margin: 10,
        responsiveClass: !0,
        autoplay: !0,
        autoplayHoverPause: !0,
        autoplayTimeout: 8e3,
        autoplaySpeed: 800,
        responsive: {
            0:    { items: 3 },
            600:  { items: 3 },
            1e3:  { items: 7 },
            360:  { items: 3 }
        }
    });

    var a = $(".grid").isotope({
        itemSelector: ".element-item",
        layoutMode: "fitRows"
    });

    $("#filters").on("click", "button", function () {
        var b = $(this).attr("data-filter");
        a.isotope({ filter: b })
    }), $(".button-group").each(function (c, a) {
        var b = $(a);
        b.on("click", "button", function () {
            b.find(".is-checked").removeClass("is-checked"), $(this).addClass("is-checked")
        })
    });

    var d = 8, e = a.data("isotope");

    function b(c) {
        a.find(".hidden").removeClass("hidden");
        var b = e.filteredItems.slice(c, e.filteredItems.length).map(function (a) {
            return a.element
        });
        $(b).addClass("hidden"), a.isotope("layout"), 0 == b.length ? jQuery("#showMore").hide() : jQuery("#showMore").show()
    }

    "" != $("#showMore ").text() && ($("#showMore ").on("click", function (a) {
        a.preventDefault(), showNextItems(next_items)
    }), b(8)), a.after('<button id="showMore">  see all Work </button>'), $("#showMore").click(function () {
        $("#filters").data("clicked") && (d = 8, $("#filters").data("clicked", !1)), b(d += 8)
    }), $("#filters").click(function () {
        $(this).data("clicked", !0), b(8)
    });

    var c = $("#back-top");
    $(window).scroll(function () {
        $(window).scrollTop() > 300 ? c.addClass("show") : c.removeClass("show")
    }), c.on("click", function (a) {
        a.preventDefault(), $("html, body").animate({ scrollTop: 0 }, "300")
    })

}), setTimeout(function () {
    $("#opener-modal ").click()
}, 7e3);

/* ═══════════════════════════════════════════════════════════════════════════
   SHARED AJAX SUBMIT HELPER
═══════════════════════════════════════════════════════════════════════════ */
function submitForm(form, btnId, btnDefault) {
    var $btn = $("#" + btnId);
    $btn.val("Sending...").prop("disabled", true);

    $.ajax({
        url: './code.php',
        type: 'POST',
        data: $(form).serialize(),
        dataType: 'text',
        success: function (response) {
            try { var r = JSON.parse(response); } catch (e) { r = {}; }
            if (r.success == 1) {
                window.location.href = 'thankyou.php';
            } else {
                $btn.val(btnDefault).prop("disabled", false);
                alert("Something went wrong. Please call +1 (213) 784-1841");
            }
        },
        error: function () {
            $btn.val(btnDefault).prop("disabled", false);
            alert("Something went wrong. Please call +1 (213) 784-1841");
        }
    });
}

/* ═══════════════════════════════════════════════════════════════════════════
   POPUP FORM
═══════════════════════════════════════════════════════════════════════════ */
$("#popup-form").validate({
    rules: {
        name:    { required: true },
        email:   { required: true, email: true },
        phone:   { required: true, minlength: 6 },
        message: { required: true, minlength: 5 }
    },
    messages: {
        name:    { required: 'Please enter your name.' },
        email:   { required: 'Please enter your email.', email: 'Please enter a valid email.' },
        phone:   { required: 'Please enter your phone number.', minlength: 'Phone number is too short.' },
        message: { required: 'Please enter a message.', minlength: 'Message is too short.' }
    },
    highlight:   function (a) { $(a).css('border-color', '#dc3545'); },
    unhighlight: function (a) { $(a).css('border-color', '#d0d7df'); },
    errorPlacement: function (err, elem) {
        err.css({ 'font-size': '12px', 'color': '#dc3545', 'margin-top': '4px', 'display': 'block' });
        err.insertAfter(elem);
    },
    submitHandler: function (form) {
        submitForm(form, 'popup-form-btn', 'Get Free Quote Now');
    }
});

/* ═══════════════════════════════════════════════════════════════════════════
   FOOTER FORM
═══════════════════════════════════════════════════════════════════════════ */
$("#footer-form").validate({
    rules: {
        name:    { required: true },
        email:   { required: true, email: true },
        phone:   { required: true, minlength: 6 },
        message: { required: true, minlength: 5 }
    },
    messages: {
        name:    { required: 'Please enter your name.' },
        email:   { required: 'Please enter your email.', email: 'Please enter a valid email.' },
        phone:   { required: 'Please enter your phone number.' },
        message: { required: 'Please enter a message.' }
    },
    highlight:   function (a) { $(a).css('border-color', '#dc3545'); },
    unhighlight: function (a) { $(a).css('border-color', ''); },
    errorPlacement: function (err, elem) {
        err.css({ 'font-size': '12px', 'color': '#dc3545', 'margin-top': '4px', 'display': 'block' });
        err.insertAfter(elem);
    },
    submitHandler: function (form) {
        submitForm(form, 'footer-form-btn', 'Submit Request');
    }
});

/* ═══════════════════════════════════════════════════════════════════════════
   CONTACT PAGE FORM
═══════════════════════════════════════════════════════════════════════════ */
$("#contact-form").validate({
    rules: {
        name:    { required: true },
        email:   { required: true, email: true },
        phone:   { required: true, minlength: 6 },
        message: { required: true, minlength: 5 }
    },
    messages: {
        name:    { required: 'Please enter your name.' },
        email:   { required: 'Please enter your email.', email: 'Please enter a valid email.' },
        phone:   { required: 'Please enter your phone number.' },
        message: { required: 'Please enter a message.' }
    },
    highlight:   function (a) { $(a).css('border-color', '#dc3545'); },
    unhighlight: function (a) { $(a).css('border-color', ''); },
    errorPlacement: function (err, elem) {
        err.css({ 'font-size': '12px', 'color': '#dc3545', 'margin-top': '4px', 'display': 'block' });
        err.insertAfter(elem);
    },
    submitHandler: function (form) {
        submitForm(form, 'contact-form-btn', 'Send Message');
    }
});
