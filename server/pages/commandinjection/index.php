<?php
if (isset($_POST['filter'])) {
        $filter = $_POST['filter'];
        exec('cat content.txt | grep '.$filter, $output, $ret);
        foreach ($output as $line) {
        	echo($line.'<br>');
        }
} else {
        include("filter.html");
}
