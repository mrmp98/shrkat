<?php require_once __DIR__ . '/../../../سایت خبری/c/vorod.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>signup</h3>
                        <p>اطلعات خود را وارد کنید </p>
                        <form class="requires-validation" novalidate>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                               <!-- <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div> -->
                            </div>
                           <div class="col-md-12">
                              <input class="form-control" type="password" name="password" placeholder="Password" required>
                               <!-- <div class="valid-feedback">Password field is valid!</div>
                               <div class="invalid-feedback">Password field cannot be blank!</div> -->
                           </div>
                           <div class="col-md-12">
                            <input class="form-control" type="text" name="phone" placeholder="yorphone" required>
                             <!-- <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div> -->
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" type="date" name="date"  required>
                             <!-- <div class="valid-feedback">Email field is valid!</div>
                             <div class="invalid-feedback">Email field cannot be blank!</div> -->
                        </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
            <a  href="../sign in/index.php">singin<a>

                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <script src="../../c/EROR.js"></script>

 <script src="script.js"></script>
</body>
</html>