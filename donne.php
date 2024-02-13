<?php


 $name = $_POST["name"] ;



 $tel = $_POST["tel"] ;

  $mail = $_POST["mail"] ;

 $conn = mysqli_connect("localhost" ,"root" ,"", "electronique");

$query = "INSERT INTO 
    boutique(name,tel,mail)VALUES('$name','$tel','$mail')";

    mysqli_query($conn, $query);

    mysqli_close($conn);









?>