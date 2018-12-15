<?php


function verifyRegisterData(){
        
    $_POST = filter_input_array(INPUT_POST , FILTER_SANITIZE_STRING);
        
    $data = [
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'password' => $_POST['password'],
        'confirm_password' => $_POST['confirm_password']
        ];
    
    $errors = [];
            
    $errors = verifyPassword($data['password'], $data['confirm_password']);
    $errors = verifyName($data['name']);
    $errors = verifyEmail($data['email']);
    
        
    else{
            
            
        }
        
        else{
            if($data['password'] !=                 $data['confirm_password']){
                $data['confirm_password_err'] = "Passwords do not match";
            }
        }
        
        return $errors;
        
        
    }

function verifyPassword($password1 = null, $password2 = null){
    
    $errors = [];
    
    if(!$password1)
        $errors['pass_length'] = 'Please enter a password';
    
    if(strlen($password1) < 8)
        $errors['pass_length'] = 'Password must be at least 8 characters';
    
    if($password2){
        if($password1 != $password2)
            $errors['pass_match'] = 'Passwords do not match';
    }
    
    return $errors;
}

function verifyName($name = null){
    
    $errors = [];
    
    if(!$name)
        $errors['name'] = 'Please enter a username';
    
    return $errors;
        
}

function verifyName($email = null){
    
    $errors = [];
    
    if($this->userModel->findUserByEmail($email))
        $errors['email'] = "Email is already taken";
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['email'] = 'Email address is not valid';
    
    if(!$email)
        $errors['email'] = 'Please enter a valid email address';
    
    return $errors;
        
}