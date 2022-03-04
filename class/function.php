<?php
class adminCv
{
    private $conn;
    public function __construct()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = "";
        $dbname = 'cv';
        $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$this->conn) {
            die("Database Connection Error!!");
        }
    }

    // Login
    public function adminLogin($data)
    {
        $userName = $data['userName'];
        $password = md5($data['password']);

        $query = "SELECT * FROM admin_info WHERE admin_username='$userName' && admin_pass='$password'";

        if (mysqli_query($this->conn, $query)) {
            $admin_info = mysqli_query($this->conn, $query);
            if ($admin_info) {
                header("location:dashboard.php");
                $admin_data = mysqli_fetch_assoc($admin_info);
                session_start();
                $_SESSION['adminID'] = $admin_data['id'];
                $_SESSION['admin_name'] = $admin_data['admin_username'];
            }
        }
    }

    // Logout
    public function admin_logout()
    {
        unset($_SESSION['adminID']);
        unset($_SESSION['admin_name']);
        header('location: index.php');
    }
}
