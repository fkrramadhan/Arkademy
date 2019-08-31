<?php

function validationUsername($username){
    if ( !preg_match('/[^A-Za-z0-9\.\/\\\\:]|\..*\.|\.$|:(?!(?<=^[a-zA-Z]:)[\/\\\\])/', $username) || (strlen($username) > 9 || strlen($username) < 5 )){
        return "Username tidak valid";
    }
    return "username valid";
}

function validationPassword($password){
    if ( !preg_match('/[^A-Za-z0-9\.\/\\\\:]|\..*\.|\.$|:(?!(?<=^[a-zA-Z]:)[\/\\\\])/', $password) || (strlen($uspasswordername) < 8){
        return "Password tidak valid";
    }
    return "Password valid";
}

echo validationUsername('C0d3YourFuture!#');