<?php

declare(strict_types=1);


// Start or resume the session
session_start();
//var_dump($_SESSION['visit_counter']);

if (isset($_SESSION['visit_counter'])) {
        $_SESSION['visit_counter']++;
        echo "Number of Visits: ". ($_SESSION['visit_counter']);
}
else{
    $_SESSION['visit_counter'] =0;
    echo "Number of Visits: ". $_SESSION['visit_counter'];
}





//session_start();
//
//if(!isset($_SESSION['visit_counter'])) {
//    $_SESSION['visit_counter'] = 0;
//}
//
//if(!isset($_SESSION['visit_history'])) {
//    $_SESSION['visit_history'] = [];
//}
//
//
//if(isset($_POST['clear_session'])) {
//    session_unset();
//}
//
//if(!isset($_SESSION['visit_counter'])) {echo ""; }
//else
//{
//    echo $_SESSION['visit_counter']++;
//}
//
//echo "<br>";
//$_SESSION['visit_history'][] = $_SERVER['REQUEST_URI'];
//
//echo "<pre>";
//print_r($_SESSION['visit_history']);
//echo "</pre>";
//?>
<!---->
<!--<hr>-->
<!--<a href='test.php'>Test.php</a> |-->
<!--<a href='MyPage.php'>MyPage.php</a> |-->
<!--<a href='Hello.php'>Hello.php</a> |-->
<!--<hr>-->
<!--<form method="post">-->
<!--    <input type="submit" name="clear_session" value="Clear session">-->
<!--</form>-->

