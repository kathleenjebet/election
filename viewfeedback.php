<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container" my-4>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">FEEDBACK</th>
      <th scope="col">RATING</th>
      <th scope="col">SUBDATE</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $hostName="localhost";
     $dbUser="root";
     $dbPass="";
     $dbName="CAMP_FEEDBACK";


    $conn=mysqli_connect($hostName,$dbUser,$dbPass,$dbName);
    if(!$conn){
        die('connection unnsuccesful');
    }
    $sql="SELECT *FROM FEEDBACK";
    $result=mysqli_query( $conn,$sql);
    while($row=mysqli_fetch_array($result)){
        $ID=$row["ID"];
        $NAME = $row['NAME'];
         $EMAIL=$row['EMAIL'];
         $FEEDBACK=$row['FEEDBACK'];
         $RATING=$row['RATING'];
        $SUBDATE = $row['SUBDATE'];

       echo" <tr>
      <th scope='row'>$ID</th>
      <td>$NAME</td>
      <td>$EMAIL</td>
      <td>$FEEDBACK</td>
      <td>$RATING</td>
      <td>$SUBDATE</td>
    </tr>";
    }
    ?>
    
  </tbody>
</table>
</div>
</body>
</html>