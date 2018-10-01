<html>
 <body>  
  <form method="POST" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>"> 
    <b>Use this form to register on my site</b><br /><br />
    <table>
        <tr><td>Name: </td><td><input type="text" name="name"></td></tr>
        <tr><td>Email address: </td><td><input type="text" name="email"></td></tr>
        <tr><td>Date of Birth: </td><td><input type="text" name="dob"></td></tr>
        <tr><td>Car Registration: </td><td><input type="text" name="reg"></td></tr>
	<tr><td>Card Number: </td><td><input type="text" name="card"></td></tr>
    </table>
    <br />
    <input type="submit" name="sanitizeButton" value="Sanitize">
    <input type="submit" name="validateButton" value="Validate">
    <input type="submit" name="logout" value="Logout">
  </form>
<?php

session_start();  

if(isset($_SESSION['pagerefreshes']))
    $_SESSION['pagerefreshes'] = $_SESSION['pagerefreshes']+ 1;
else
    $_SESSION['pagerefreshes'] = 1;

echo "Page Refreshes = ". $_SESSION['pagerefreshes']; 

if(isset($_POST['validateButton']))
{
    echo "<br /> Name entered: ".$_POST['name']." <br />";
    echo "Email address entered: ".$_POST['email']." <br />";
    echo "Date of Birth entered: ".$_POST['dob']." <br />";
    echo "car Registration entered: ".$_POST['reg']." <br />";
    echo "Card Number: ".$_POST['card']." <br /><br />";

if (!empty($_POST['email'])) {
    $validatedEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if ($validatedEmail)
    {
        echo "Email address after validation: $validatedEmail<br />";
    }
    else
    {    
        echo "Email address invalid!<br />";
    }
}
if (!empty($_POST['dob'])) {
    if (preg_match("/\d{1,2}\/\d{1,2}\/\d{2,4}/", $_POST['dob']))
    {
        echo "Date of Birth is correct <br />";
    }
    else
    {    
        echo "Date of birth is invalid!<br />";

    }
}
if (!empty($_POST['reg'])) {
    if (preg_match("/\d{2,3}[A-Z]{1,2}\d{1,6}$/", $_POST['reg']))
    {
        echo "Car Reg is correct <br />";
    }
    else
    {    
        echo "Car Reg is invalid!<br />";
    }
}
if (!empty($_POST['card'])) {
    if (preg_match("/\d{16}/", $_POST['card']))
    {
        echo "Card entered is correct<br />";
    }
    else
    {    
        echo "Card Invalid!<br />";
    }
 }
}
 if(isset($_POST['logout'])){
  session_destroy();  
}
?>

 </body>
</html>
