<?php
session_start();


require_once __DIR__ ."/back/helpers.php";
require_once __DIR__ ."/back/getStudent.php";



 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <style>
        body{
            background-color: #19283D;
        }
    </style>

    
</head>
<body class="text-light">
    <div id="Edit">
        <div class="header text-center">
            <img src="assets/images/logo.png" alt="">
        </div>
        <div class="body">
            <form class="w-50 m-auto" action="back/edit.php" method="POST">
                 <input type="hidden" name="student_id" value="<?= old('id') ?>" > 
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="FirstName" class="form-label">First Name :</label>
                                <input type="text" class="form-control" id="FirstName" name="firstName" value="<?= old('firstName'); ?>" >
                                <?= getError('firstName'); ?> 
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="LastName" class="form-label">Last Name:</label>
                                <input type="text" class="form-control" id="LastName" name="lastName" value="<?= old('lastName'); ?>">
                                <?= getError('lastName'); ?> 
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="Email" class="form-label">Email :</label>
                                <input type="text" class="form-control" id="Email" name="email" value="<?= old('email'); ?>" >
                                <?= getError('email'); ?> 
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="Password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="Password" name="password" value="<?= old('password'); ?>">
                                <?= getError('password'); ?> 
                                
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="Age" class="form-label">Age :</label>
                                <input type="number" class="form-control" id="Age" name="age" value="<?= old('age'); ?>" > 
                                <?= getError('age'); ?> 


                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="item">
                            <div class="mb-3">
                                <label for="Phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="Phone" name="phone" value="<?= old('phone'); ?>">
                                <?= getError('phone'); ?> 

                            </div>

                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-info text-light w-100">edit</button>
                </form>

        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-4.0.0.js"></script>
    <script src="assets/js/sweetalert.js"></script>
    
    <script src="assets/js/index.js"></script>
</body>
</html>