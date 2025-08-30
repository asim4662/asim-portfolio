<?php

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $namessageme=$_POST['message'];


    echo $name,$email,$subject,$namessageme;

}
else {
    echo 'invalid '
}

?>


