<?php 
    $head_title = 'Sign in form';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>
<body>

<div class="container">
        <h3><?php echo $head_title?></h3>
    <form action="">
        <label for="emaim">Your e-mail <span> &nbsp;</span></label>
        <input type="text">
        <label for="password">Your password <span>&nbsp;</span></label>
        <input type="password">
        
        <button>Sign in</button>
        <div class="borderRight"></div>
        <div class="borderBottom"></div>
    </form>
    <a href="#">Sign up here</a>

</div><!-- end .container -->

</body>
</html>