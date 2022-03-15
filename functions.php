<?php
    function redirect($url, $permanent = false) {
        if (headers_sent() === false) header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        exit();
    }

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
