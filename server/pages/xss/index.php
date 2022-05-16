<?php
if (isset($_POST['user'])) {
        $user = $_POST['user'];
        echo ('Hello '.$user.'!');
} else {
        include("login.html");
}
