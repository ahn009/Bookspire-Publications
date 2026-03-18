<?php
$page_title       = 'Thank You - Book Spire Publishing';
$meta_description = 'Thank you for contacting Book Spire Publishing. Our team will get back to you shortly.';
$canonical_url    = 'https://bookspirepublishing.com/thankyou.php';
include 'includes/header.php';
?>

<style>
    /* ── Thank You Page ──────────────────────────────────────────────── */

    /* Header is position:absolute (~190px tall on desktop).
       Add padding-top so the card is never hidden behind it.            */
    .thankyou-section {
        min-height: 100vh;
        box-sizing: border-box;
        padding: 220px 16px 60px;   /* 220px clears the ~190px abs header */
        display: flex;
        align-items: flex-start;
        justify-content: center;
        background: linear-gradient(160deg, #e8f7f8 0%, #f8fffe 50%, #ffffff 100%);
    }

    /* Card — direct flex child so centering works */
    .thankyou-card {
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 48px rgba(0,131,140,.13);
        padding: 56px 48px 48px;
        max-width: 580px;
        width: 100%;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    /* Colour bar at top */
    .thankyou-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0; right: 0;
        height: 5px;
        background: linear-gradient(90deg, #00838c 0%, #ffc107 100%);
    }

    /* Check icon */
    .thankyou-icon {
        width: 86px;
        height: 86px;
        background: linear-gradient(135deg, #00838c, #005f66);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 24px;
        box-shadow: 0 8px 24px rgba(0,131,140,.28);
    }
    .thankyou-icon i { font-size: 38px; color: #fff; }

    /* Heading */
    .thankyou-card h1 {
        font-size: 38px;
        font-weight: 800;
        color: #1a2e2f;
        margin: 0 0 14px;
        line-height: 1.2;
    }
    .thankyou-card h1 span { color: #00838c; }

    /* Sub-text */
    .thankyou-card p.sub {
        font-size: 16px;
        color: #555;
        line-height: 1.75;
        margin: 0 auto 28px;
        max-width: 420px;
    }

    /* Steps row */
    .thankyou-steps {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin: 0 auto 30px;
        flex-wrap: wrap;
    }
    .step-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        flex: 1;
        min-width: 100px;
        max-width: 130px;
    }
    .step-num {
        width: 40px;
        height: 40px;
        background: #e8f8f9;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        font-weight: 700;
        color: #00838c;
        flex-shrink: 0;
    }
    .step-item p {
        font-size: 12px;
        color: #666;
        margin: 0;
        text-align: center;
        line-height: 1.4;
    }

    /* Divider */
    .thankyou-divider {
        border: none;
        border-top: 1px solid #eaf0f1;
        margin: 0 0 28px;
    }

    /* Action buttons */
    .thankyou-actions {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: wrap;
    }
    .btn-ty-home {
        background: linear-gradient(135deg, #00838c, #005f66);
        color: #fff !important;
        border-radius: 50px;
        padding: 13px 32px;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        transition: opacity .2s;
        display: inline-block;
        white-space: nowrap;
    }
    .btn-ty-home:hover { opacity: .86; text-decoration: none; }

    .btn-ty-call {
        background: transparent;
        color: #00838c !important;
        border: 2px solid #00838c;
        border-radius: 50px;
        padding: 11px 28px;
        font-size: 15px;
        font-weight: 700;
        text-decoration: none;
        transition: all .2s;
        display: inline-block;
        white-space: nowrap;
    }
    .btn-ty-call:hover {
        background: #00838c;
        color: #fff !important;
        text-decoration: none;
    }

    /* ── Tablet (≤ 980px): header shrinks, reduce top padding ─────── */
    @media (max-width: 980px) {
        .thankyou-section {
            padding: 160px 16px 50px;
        }
        .thankyou-card {
            padding: 44px 32px 36px;
        }
        .thankyou-card h1 { font-size: 30px; }
        .thankyou-card p.sub { font-size: 15px; }
    }

    /* ── Mobile (≤ 767px): header is much shorter ─────────────────── */
    @media (max-width: 767px) {
        .thankyou-section {
            padding: 110px 16px 40px;
        }
    }

    /* ── Small mobile (≤ 575px) ───────────────────────────────────── */
    @media (max-width: 575px) {
        .thankyou-section {
            padding: 90px 12px 30px;
        }
        .thankyou-card {
            padding: 34px 20px 28px;
            border-radius: 14px;
        }
        .thankyou-icon {
            width: 68px;
            height: 68px;
            margin-bottom: 18px;
        }
        .thankyou-icon i { font-size: 28px; }
        .thankyou-card h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .thankyou-card p.sub {
            font-size: 14px;
            margin-bottom: 20px;
            max-width: 100%;
        }
        /* 2 × 2 grid for steps */
        .thankyou-steps {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px 10px;
            margin-bottom: 22px;
        }
        .step-item { min-width: unset; max-width: 100%; flex: unset; }
        .step-num  { width: 34px; height: 34px; font-size: 13px; }
        .step-item p { font-size: 11px; }
        .thankyou-divider { margin: 0 0 20px; }
        /* Full-width stacked buttons */
        .thankyou-actions { flex-direction: column; gap: 10px; }
        .btn-ty-home,
        .btn-ty-call {
            width: 100%;
            text-align: center;
            padding: 13px 16px;
            font-size: 14px;
            box-sizing: border-box;
        }
    }

    /* ── Very small (≤ 360px) ─────────────────────────────────────── */
    @media (max-width: 360px) {
        .thankyou-card { padding: 26px 14px 22px; }
        .thankyou-card h1 { font-size: 20px; }
        .thankyou-card p.sub { font-size: 13px; }
    }
</style>

<!-- Card is a DIRECT flex child of the section — ensures proper vertical centering -->
<section class="thankyou-section">
    <div class="thankyou-card">

        <div class="thankyou-icon">
            <i class="fas fa-check"></i>
        </div>

        <h1>Thank You <span>&amp; Well Done!</span></h1>
        <p class="sub">Your message has been received. A member of our publishing team will reach out to you within 24 hours.</p>

        <div class="thankyou-steps">
            <div class="step-item">
                <div class="step-num">1</div>
                <p>Message Received</p>
            </div>
            <div class="step-item">
                <div class="step-num">2</div>
                <p>Team Review &amp; Response</p>
            </div>
            <div class="step-item">
                <div class="step-num">3</div>
                <p>Free Consultation</p>
            </div>
            <div class="step-item">
                <div class="step-num">4</div>
                <p>Your Book Journey Begins!</p>
            </div>
        </div>

        <hr class="thankyou-divider">

        <div class="thankyou-actions">
            <a href="index.php" class="btn-ty-home">&#8592; Back to Home</a>
            <a href="tel:+12137841841" class="btn-ty-call"><i class="fa fa-phone"></i>&nbsp; +1 (213) 784-1841</a>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
