<?php
if (isset($_POST['password'])) {
        $password = $_POST['password'];
                
        exec('./bof.out '.$password, $output, $ret);

        if ($ret == 0) {
                echo ('<h1>Secured content!</h1>');
        } else {
                include("login.html");
                echo ('Login failed');
        }
} else {
        include("login.html");
}
