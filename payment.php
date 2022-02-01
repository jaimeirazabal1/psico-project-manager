<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <?php require_once('menu.php') ?>

    <div class="container m-5 mx-auto">
    <div class="row main">
        <div class="col-lg-6 col-12 my-5 rcol">
            <h3 class="product text-center">PRODUCT DETAILS</h3>
            <div class="image text-center"><img src="psico.jpg" width="300px" height="350px"></div>
            <p class="text-center my-3">Toilet paper is a tissue paper product primarily used to clean<br>the anus and surrounding area of feces after defecation,<br> and to clean the vulva and perineum of puppies</p>
        </div>
        <div class="col-lg-6 col-12 my-5 scol">
            <div class="row r1">
                <h6 class="text-muted">ORDER TOTAL:</h6>
                <h4 class="text-danger">58&#36;</h4>
            </div>
            <div class="row r2">
                <h6>Lilly Soft & Strong 32 pack</h6>
                <h6 class="htwo">X4</h6>
            </div>
            <div class="row r3">
                <h3 class="payment">PAYMENT DETAILS</h3>
            </div>
            <div class="row r4">
                <h6 class="payment-method">Select Payment method:</h6>
            </div>
            <div class="row r5">
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/visa.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/amex.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/paypal.png" /></div>
            </div>
            <div class="row r6">
                <form class="personalDetails">
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Cardholder Name"> </div>
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Card number"> </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4"> <input type="text" class="form-control" placeholder="MM/YY"> </div>
                            <div class="col-4 offset-2"> <input type="password" class="form-control" placeholder="CCV"> </div>
                            <div class="col-2 th"><i class="far fa-credit-card"></i> </div>
                        </div>
                    </div> <button type="submit" class="btn btn-primary mt-3">PLACE ORDER</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>