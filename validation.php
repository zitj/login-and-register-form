<?php
include('database_connection.php');
$sql = 'SELECT email, pass, lastName, firstName FROM webstronomous';

$result = mysqli_query($connection, $sql);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

$succeses = $errors = $required = ['email' => '', 'password' => ''];

$email = $password = '';

if(isset($_POST['submit'])){
    
    // email validation
    if(empty($_POST['email'])){
        $required['email'] = 'Email is required!';
    }else{
        $email = $_POST['email'];
        foreach($users as $e_mail){
            if($email == $e_mail['email']){
                $successes['email'] = 'Your email is correct!';
                break;
            }else{
                $errors['email'] = 'This email does not exist!';
            }
        }
    }

    //password validation

    if(empty($_POST['password'])){
        $required['password'] = 'Password is required!';
    }else{
        $password = $_POST['password'];
        foreach($users as $pass_word){
            if($password == $pass_word['pass']){
                $successes['password'] = 'Your password is correct!';
                break;
            }else{
                $errors['password'] = 'Wrong password';
            }
        }
    }
    foreach($users as $user){
        if($user['email'] === $email && $user['pass'] === $password){
            //success
            header('Location: profile.php');
        }else{
            //error
            
        }
    }
    
}
?>