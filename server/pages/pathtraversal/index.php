<?php
if (isset($_POST['password'])) {
        $password = $_POST['password'];
        
        if(is_file("./content/".$password.".txt")) {
                include("./content/".$password.".txt");
        } else {
                include("login.html");
                echo ('Login failed');
        }
} else {
        include("login.html");
}
