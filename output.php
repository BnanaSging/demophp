<?php 









if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword= $_POST["confirm-password"];


    echo "USER username is ".$username."<br>";
    echo "USER email is ".$email."<br>";
    echo "USER passowrd is ".$password."<br>";
    echo "USER confirm password is ".$confirmPassword."<br>";


/*

    if(trim($username)   !="" ) {
        echo "USer username is NOT EMPTY<br>";
    } else {
        echo "field username is empty <br>";
    }

      if(trim($email)   !="" ) {
        echo "USer email is NOT EMPTY<br>";
    } else {
        echo "field email is empty <br>";
    }

      if(trim(string: $password)   !="" ) {
        echo "USer password is NOT EMPTY<br>";
    } else {
        echo "field password is empty <br>";
    }
    
        if(trim(string: $confirmPassword)   !="" ) {
        echo "USer confirmPassword is NOT EMPTY<br>";
    } else {
        echo "field confirmPassword is empty <br>";
    }
  
*/

}
test($username)

function test(fieldName){
    if(trim($fieldName) != "") {
        echo "User field is NOT EMPTY";
    }else{
    echo "firld $$ is not empty<br>";

}
}

?>