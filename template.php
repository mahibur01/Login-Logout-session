<?php

include "class/function.php";
$obj = new adminCv();
session_start();

$id = $_SESSION['adminID'];

if ($id == null) {
    header("location: index.php");
}

if (isset($_GET['adminlogout'])) {
    if ($_GET['adminlogout'] == 'logout') {
        $obj->admin_logout();
    }
}

?>



<?php include_once "./includes/head.php";?>
<body>
   <nav class="sidebar close">
      <?php include_once "./includes/sidebar.php";?>
   </nav>
   <section class="home">
      <div class="container-fluid p-5">
         <div class="row">
            <div class="col-lg-12">
               <?php
if (isset($view)) {
    if ($view == "dashboard") {
        include "view/dash_view.php";
    } else if ($view == "menu") {
        include "view/manage_menu_view.php";
    }
}

?>
            </div>
         </div>
      </div>
   </section>
   <script src="./assets/js/custom.js"></script>
</body>
</html>