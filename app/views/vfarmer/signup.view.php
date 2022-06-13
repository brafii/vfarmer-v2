<?php $this->view("includes/header") ?>


  <body class="login-page">


    <div class="register-page">
        <div class="container p-5">
            <img src="assets/images/logo.png" class="img-fluid">

            <form action="" method="POST" enctype="multipart/form-data">
                
                <div class="mb-3">
                    <label for="formFile" class="form-label">Profile</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                    <!-- <p  class="mt-1" id="message">Password is <span id="strength"></span> </p> -->
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Country">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="contact" placeholder="Contact">
                </div>

                <div class="mb-3 mt-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Address">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="terms" value="Agreed" class="form-check-input">
                    <label class="form-check-label">Agree the terms and policy</label>
                </div>
                
                <button type="submit" class="btn btn-primary myRegister-button">Register</button>
            </form>

            <div class="form-info text-center">
                <div class="container"> 
                    <p class="mt-5 mb-1">Already have account? <span><a href="">Sign In</a></span></p>
                    <p class="last">Go Home <span><a href="">Here</a></span></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="register-footer p-5 text-center">
        <p>Copyright &copy 2020 Becham Foods. All rights reserved. Template by Brafii.</p>
    </div>
    <!-- End Footer -->
   


<?php $this->view("includes/footer") ?>