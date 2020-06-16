<?php 
    $head_title = 'Sign in';
    $hyperlink = 'signup.php';
    $hyperlinkText = 'Sign up here';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<div class="container">
    <h3><?php echo $head_title . " form"?></h3>
    <form action="profile.php">
        <label for="email"> Your e-mail<span> &nbsp;</span></label>
        <input type="text">
        
        <label for="password">Your password <span>&nbsp;</span></label>
        <input type="password">
        
<?php include 'footer.php'?>
    
</html>