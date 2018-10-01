<html>
  <head>
    <title>Full Name</title>
  </head>
  <body><font face="Arial">
    <b><font color="#000080">Your Name:</font></b><br><br>
    <?php
      $First = $_GET["FirsName"];
      $Second = $_GET["SecondName"];
            
      $resultString = "Your Name is: " .$First." " .$Second;
      echo $resultString;
      echo '</font><br><br><hr>'
      ?>
    </font>
  </body>
</html>
