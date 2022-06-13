<?php $this->view("includes/header") ?>

<body class="login-page">

    <div class="login-button">
        <div class="container p-5">
            <img src="assets/images/logo.png" class="img-fluid">

            <form action="" method="POST">

                <div class="mb-3 mt-3">
                  <label class="form-label">Email address</label>
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>

                <!-- <a class="btn btn-primary myLogin-button" href="dashboard.php" role="button">Sign In</a> -->
                <button type="submit" class="btn btn-primary myLogin-button">Sign In</button>
            </form>

            <div class="form-info text-center">
                <div class="container"> 
                    <p class="mt-5 mb-1">Need an Account? <span><a href="">Sign Up</a></span></p>
                    <p class="last">Go Home <span><a href="">Here</a></span></p>
                </div>
            </div>
        </div>
    </div>
 


<?php $this->view("includes/footer") ?>