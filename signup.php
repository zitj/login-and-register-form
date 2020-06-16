<?php 
    $head_title = 'Sign up form';
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'?>

<div class="container signup">
        <h3><?php echo $head_title?></h3>
    <form action="">
        <label for="name"> Your name<span> &nbsp;</span></label>
        <input type="text">
        <label for="surname"> Your surname<span> &nbsp;</span></label>
        <input type="text">
        <label for="email"> Your email<span> &nbsp;</span></label>
        <input type="text">
        <label for="password">Your password<span>&nbsp;</span></label>
        <input type="password">
        
        <button>Sign up</button>
        <div class="borderRight"></div>
        <div class="borderBottom"></div>
    </form>
    <a href="#">Sign in here</a>

</div><!-- end .container -->

</body>
</html>