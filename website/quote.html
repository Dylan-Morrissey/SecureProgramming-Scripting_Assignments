<html>
  <head>
    <title>Wages</title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <font face="Arial" size="5" color="green"><p>
 Enter Name: <br />
 </font>
 <input type="text" name="Employee_Name" size="15">
<font face="Arial" size="5" color="green"><p>
 Enter Password: <br />
 </font> 
<input type="text" name="Employee_Password" size="10">
 <input type="submit"></p>
 </form>
     
<?php
  if(($_POST['Employee_Name'] && $_POST['Employee_Password']) !=null)
    {
      try {
          // 1. Connect to the database
          $data_source_name = 'mysql:host=localhost;dbname=wages';
          $username = 'root';
          $password = '';
          
          $conn = new PDO($data_source_name, $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
          // 2. Build a query
          $query = "SELECT * FROM wages 
          WHERE Employee_Password =  ".$conn->quote($_POST['Employee_Password']);
    echo $query;
        
      
          // 3. Execute the query
  $result = $conn->query($query);

  // 4. Display the results
  echo '<table border=1 cellpadding=1 cellspacing=1>';
  echo '<tr><td><b>Employee Name</b></td><td><b>Wage</b></td></tr>';
          

  foreach($result as $row) 
          {
              $Employee_Name = $row[0];
              $Employee_Wages = $row[1];
              echo '<tr><td>'.$Employee_Name.'</td><td>'.$Employee_Wages.'</td></tr>';
          }   
          echo '</table>';
      }
      catch(PDOException $e) 
      {
          echo 'ERROR: ' . $e->getMessage();
      }
      
      // 5. Close the connection
      $conn = null;
      }
      ?>
  </body>
</html>


