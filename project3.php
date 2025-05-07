<?php
// Data
$username = "admin";
$password = "1234";

//user input data
$inputUsername = "admin";
$inputPassword = "1";

//check authenticatino 
if($username === $inputUsername)
{
    if($password === $inputPassword)
    {
        echo "Login Successful";
    }
    else{
        echo "Invalid username or password";
    }
} else{
    echo "Invalid username or password";
}