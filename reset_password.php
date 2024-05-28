
<html>
    <head>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        <div class="container">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="img/user.png"/>

                <br>
                <div class="result">
                    <?php
                    if (isset($_GET['empty'])) {
                        echo '<div class="alert alert-danger">Enter Username or Password</div>';
                    } elseif (isset($_GET['loginErr'])) {
                        echo '<div class="alert alert-danger">Username or Password Don\'t Match</div>';
                    }
                    ?>
                </div>
                <form class="form-signin" data-toggle="validator" action="ajax.php" method="post">
                    <div class="row">

                        <div class="form-group col-lg-12">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="" required
                                   data-error="Enter Password">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" name="reset_password">RESET</button>
                </form><!-- /form -->
            </div><!-- /card-container -->
        </div><!-- /container -->

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/validator.min.js"></script>
    </body>
</html>