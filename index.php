<?php 
    include('database_connection.php');
    $head_title = 'Sign in';
    $hyperlink = 'signup.php';
    $hyperlinkText = 'Sign up here';

    $sql = 'SELECT email, pass FROM webstronomous';

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

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<div class="container">
    <h3><?php echo $head_title . " form"?></h3>
    <form action="index.php" method="POST">
        <label for="email"> Your e-mail<span><?php echo $required['email']?></span>
        <span class='correct'><?php echo $successes['email']?></span>
        <span class='wrong'><?php echo $errors['email']?></span></label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
        
        <label for="password">Your password <span><?php echo $required['password']?></span>
        <span class='correct'><?php echo $succeses['password']?></span>
        <span class='wrong'><?php echo $errors['password']?></span></label>
        <input type="password" name="password" value="<?php echo htmlspecialchars($password)?>">
        
<?php include 'footer.php'?>
    
</html>