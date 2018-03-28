<?php
session_start();
extract($_POST);


$xml=simplexml_load_file("user.xml") or die("Error: Cannot create object");
foreach($xml->children() as $user) {
    $usrenameXml = $user->username;
     $passwordXml =  $user->password ;
    $coutn =  0 ;

    if ($usrenameXml == $username & $passwordXml == $password ){

        $_SESSION["id"]= (string)$user->id;
        $_SESSION["username"]= (string)$user->username;

        $newURL = 'authordashboard.php';
        header('Location: '.$newURL);


    }else {
       echo  $coutn++;
      //  echo "wrong usrename or password";
    }
}
?>
