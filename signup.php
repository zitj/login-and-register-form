<?php 
    include('database_connection.php');
    $head_title = 'Sign up';
    $hyperlink = 'index.php';
    $hyperlinkText = 'Sign in here';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<div class="container signup">
        <h3><?php echo $head_title . " form"?></h3>
    <form action="profile.php">
        <label for="name"> Your name<span> &nbsp;</span></label>
        <input type="text">
        <label for="surname"> Your surname<span> &nbsp;</span></label>
        <input type="text">
        <label for="email"> Your email<span> &nbsp;</span></label>
        <input type="text">
        <label for="password">Your password<span>&nbsp;</span></label>
        <input type="password">
        
<?php include 'footer.php'?>

</body>
</html>