<?php include("includes/login_header.php") ?>

<div class="sh-login-sec">
    <div class="container">
        <div class="row">
            <div class="col-10 col-lg-4 offset-lg-4 offset-1">
                <h1 class="text-center mb-3">login</h1>
                <hr>
                <form action="../otp/" method="post">
                    <div class="card-2 mt-5" id="mail_card">
                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="floatingInput" name = "email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email Address</label>
                        </div>
                        <button type="submit" class="btn btn-warning" id="next_card" style="width: 100%;">Send OTP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/login_footer.php") ?>