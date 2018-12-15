<?php

function verifyPassword($password1, $password2 = null){
    
    trim($password1);
    if(strlen($password1) < 8){
        echo "Password must be at least 8 characters";
    }
}

