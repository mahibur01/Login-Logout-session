<?php

include "class/function.php";
$obj = new adminCv();

if (isset($_POST['adminLogin'])) {
    $obj->adminLogin($_POST);
}

session_start();
if (isset($_SESSION['adminID'])) {
    $id = $_SESSION['adminID'];
}

if (isset($id)) {
    header("location: dashboard.php");
}

?>

<?php include_once "./includes/head.php";?>

<body>
    <div class="container d-flex justify-content-center">
        <div class="card mx-5 my-5">
            <div class="card-body py-2 px-2">
            <form action= "" method= "POST">
                <h2 class="card-heading py-3 px-5">Log In</h2>
                    <div class="row rone mx-3 my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="userName" class="sr-only">Email or Phone</label>
                                <input type="text" name="userName" class="form-control" id="userName" placeholder="Username">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                            </div>
                        </div>
                    </div>

                    <div class="row rtwo mx-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" name="adminLogin" class="btn btn-primary mb-2">log In</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"><a href="#" class="forgot">Forgot your Password?</a></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <!-- </section> -->
   <script src="./assets/js/custom.js"></script>
</body>
</html>
