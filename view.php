<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title="View Customers"></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">

  <style type="text/css">
  button{
    transition: 1.5s;
  }
  button:hover{
    background-color:#white;
    color: white;
  }
  body{
    background-color: pink;
    color: black;

    font-weight: bolder;
  }
  table,th,td{
    width spacing: 30px;
    font-weight: bold;
    float: center;
    border: 1px solid white;
    border-spacing: 20px;
    border-collapse: collapse;



  }
  tr{
    line-height: 60px;
  }



</style>
</head>


  <div class="container">
        <h2 class="text-center pt-4" style="color : #000000;">View Customers</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="formalLayout" width="81%" cellspacing="0" cellpadding="0">
                        <thead style="color : darkblue;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>

                            </tr>
                        </thead>
                        <tbody>
                          <tr style="color : white;">
                            <td class="py-2"></td>
                            <td class="py-2"></td>
                            <td class="py-2"></td>
                            <td class="py-2"></td>
                        </tr>
    <?php
    $conn = mysqli_connect("localhost", "root","","dbmy");
    if ($conn-> connect_error) {
      die("connection failed:".$conn-> connect_error);

    }
    $sql = "SELECT ID,Name,Email,Balance from viewcustomer";
    $result= $conn-> query($sql);

    if ($result-> num_rows > 0){
      while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["ID"] . "</td><td>". $row["Name"] . "</td><td>". $row["Email"] . "</td><td>". $row["Balance"] . "</td><td>";
      }
      echo "</table>";
    }
    else {
      echo "0 result";
    }
    $conn-> close();
    ?>
  </table>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
  </html>
