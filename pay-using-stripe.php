<?php
$page_title       = 'Secure Payment - Book Spire Publishing | Pay Online via Stripe';
$meta_description = 'Make a secure payment to Book Spire Publishing using Stripe. Fast, safe, and convenient online payment for all publishing services.';
$canonical_url    = 'https://bookspirepublishing.com/pay-using-stripe.php';
$page_css         = 'assets/css/style-3.css?ver=1771958681';
include 'includes/header.php';
?>


<style>
    label {
        width: 100%;
        color:#fff
    }

    .button {
        float: left;
        display: block;
        background: #e41f05;
        color: #fff;
        box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        border: 0;
        margin-top: 20px;
        font-size: 15.7px;
        font-weight: 600;
        height: 40px;
        line-height: 38px;
        outline: none;
        padding: 1px 25px
    }

    .panel {
        width: fit-content
    }

    h3.heading {
        font-weight: 700;
        border-bottom: 2px dashed #ddd;
        margin: 0 auto;
        width: fit-content
    }

    .Subscribe-btn {
        padding: 8px 11px;
    }
  
</style>


<section id="stripe" class="our-banner">


        <form method="post" action="">
                <div class="container">
                    <div class="row">



                        <div class="col-sm-6 ">

                            <br>
                            <label>Package Name <span class="required ">*</span></label>

                            <br>
                            <input type="text" name="item_name" value="Consultancy Fee" class="form-control sameStyle" readonly="">
                        </div>

                        <div class="col-sm-6 ">
                            <br>

                            <label>Email <span class="required ">*</span></label>
                            <br>

                            <input type="text" name="email" class="form-control sameStyle" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="">

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6 ">
                            <br>
                            <label>Billing Amount <span class="required ">*</span></label>

                            <br>

                            <input type="text" name="amount" class="form-control sameStyle" onkeyup="javascript: this.value = this.value.replace(/[^0-9]/g,'');" required="">
                        </div>

                        <div class="col-sm-6 ">

                            <br>
                            <label>Currency<span class="required">*</span></label>
                            <br>
                            <div class="wpcf7-select-parent">
                                <select name="currency_code" class="form-control sameStyle">
                                        <option value="USD">USD</option>
                                       
                                </select>


                                <div class="select-arrow" style="height: 31px; width: 31px; line-height: 31px;"></div>
                            </div>


                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-sm-4 d-md-block d-none">
                           
                        
                        
                        </div>
                        <div class="col-12 col-sm-8 pl-5 pt-5">
                                <button id="pbtn" type="submit" class="btn btn-info trans-btn dark-green-border text-center" style="margin-bottom:20px"> <span>Pay Using Stripe</span> </button>
                        </div>
                    </div>
                </div>
        </form>



</section>



<script>
    $(function() {
    $('input').keyup(function() {
        this.value = this.value.toLocaleLowerCase();
    });
});
</script>

<?php include 'includes/footer.php'; ?>
