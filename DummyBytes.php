<?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'Instagram')) {
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename= blablabla');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);
    }
    else{
        header('Location: https://www.google.com/maps/search/superefectivos+cerca/@10.9837879,-74.8880583,12z/data=!3m1!4b1');
    }
?>
