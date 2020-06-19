<?php 
    include('database_connection.php');
    $head_title = 'Sign in';
    $hyperlink = 'signup.php';
    $hyperlinkText = 'Sign up here';

    $sql = 'SELECT email, pass FROM webstronomous';

    $result = mysqli_query($connection, $sql);

    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    $errors = ['email' => '', 'password' => ''];
    $email = $password = '';

    if(isset($_POST['submit'])){
        
        // email validation
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required!';
        }else{
            $email = $_POST['email'];
            foreach($users as $e_mail){
                if($email == $e_mail['email']){
                    $errors['email'] = 'Your email is correct!';
                    break;
                }else{
                    $errors['email'] = 'This email does not exist!';
                    // $errors['email'] = $e_mail['email'];
                }
            }
        }

        //password validation

        if(empty($_POST['password'])){
            $errors['password'] = 'Password is required!';
        }else{
            $password = $_POST['password'];
            foreach($users as $pass_word){
                if($password == $pass_word['pass']){
                    $errors['password'] = 'Your password is correct!';
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
                echo 'something is not right!';
            }
        }
        
    }
        
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<div class="container">
    <h3><?php echo $head_title . " form"?></h3>
    <form action="index.php" method="POST">
        <label for="email"> Your e-mail<span>&nbsp;<?php echo $errors['email']?></span></label>
        <input type="text" name="email">
        
        <label for="password">Your password <span>&nbsp;<?php echo $errors['password']?></span</label>
        <input type="password" name="password">
        
<?php include 'footer.php'?>
    
</html>