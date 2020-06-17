<?php 
    include('database_connection.php');
    $head_title = 'Sign up';
    $hyperlink = 'index.php';
    $hyperlinkText = 'Sign in here';

    $errors = ['name' => '', 'surename' => '', 'email' => '', 'password' => ''];
    $name = $surename = $email = $password = '';
   
    if(isset($_POST['submit'])){
        
        // name validation
        if(empty($_POST['name'])){
            $errors['name'] = 'Name is required!';
        }else{
            $name = $_POST['name'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
                $errors['name'] = 'Name must be letters and spaces only!';
            }
        }
        
        // surename validation
        if(empty($_POST['surename'])){
            $errors['surename'] = 'Sureame is required!';
        }else{
            $surename = $_POST['surename'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $surename)){
                $errors['surename'] = 'Surename must be letters and spaces only!';
            }
        }

        // email validation
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required!';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be valid!';
            }
        }

        // password validation
        if(empty($_POST['password'])){
            $errors['password'] = 'Password is required!';
        }else{
            $password = $_POST['password'];
            if(!preg_match('/^[a-zA-Z\s]+$/', $password)){
                $errors['password'] = 'Password must be letters and spaces only!';
            }
        }
        if(array_filter($errors)){
            //there are errors in the form, hence there is no redirection to index.php
    
        }else{
            //redirecting to index.php
            $name = mysqli_real_escape_string($connection, $_POST['name']);
            $surename = mysqli_real_escape_string($connection, $_POST['surename']);
            $email = mysqli_real_escape_string($connection, $_POST['email']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            
            //create sql
            $sql = "INSERT INTO webstronomous(firstName, lastName, email, pass) VALUES('$name', '$surename', '$email', '$password')";
            
            
        }
        if(mysqli_query($connection, $sql)){
            //success
            header('Location: index.php');
        }else{
            //error
            echo 'Query error' . mysqli_query($connection);
        }
       
    }
  
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<div class="container signup">
        <h3><?php echo $head_title . " form"?></h3>
    <form action="signup.php" method="POST">
        <label for="name"> Your name<span> &nbsp;<?php echo $errors['name']?></span></label>
        <input type="text" name ="name" value="<?php echo htmlspecialchars($name)?>">
        <label for="surname"> Your surname<span> &nbsp;<?php echo $errors['surename']?></span></label>
        <input type="text" name ="surename" value="<?php echo htmlspecialchars($surename)?>">
        <label for="email"> Your email<span> &nbsp;<?php echo $errors['email']?></span></label>
        <input type="text" name ="email" value="<?php echo htmlspecialchars($email)?>">
        <label for="password">Your password<span>&nbsp;<?php echo $errors['password']?></span></label>
        <input type="password" name ="password" value="<?php echo htmlspecialchars($password)?>">

<?php include 'footer.php'?>

</body>
</html>